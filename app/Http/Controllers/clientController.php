<?php

namespace App\Http\Controllers;

use App\Http\Requests\contact;
use App\Models\loginModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\withdrw;
use App\Models\usersModel;
use App\Models\requestsModel;
use App\Models\applymodel;
use App\Models\exchangecurrencymodel;
use Illuminate\Support\Facades\DB;
use App\Models\clientModel;
use App\Models\transactionModel;
use App\Http\Requests\sendMoney;
use App\Http\Requests\electricity;
use App\Http\Requests\gas;
use App\Http\Requests\water;
use App\Http\Requests\rechargeMoney;
use App\Http\Requests\education;
use App\Http\Requests\internet;
use App\Http\Requests\telephone;
use App\Http\Requests\creditCard;
use App\Http\Requests\exchangeCurrency;
use App\Http\Requests\apply;
use App\Http\Requests\editprofile;
use App\Http\Requests\changePassword;
use App\Exports\TransactionExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\postNotice;




class clientController extends Controller
{
    public function index()
    {
        $users = usersModel::find(session('user_id'))->client;
        $transaction = usersModel::find(session('user_id'))->transaction->last();

        $notice = postNotice::all()->last();
        //echo $notice->description;



        return view("Client.index")->with('transaction', $transaction)
            ->with('client', $users)
            ->with('notice', $notice);
    }

    public function logout()
    {
        session()->flush;
        return redirect("/");
    }

    public function Apply()
    {
        return view("Client.Apply");
    }

    public function Applydone(apply $req)
    {
        $apply = new applymodel;
        $apply->id = session('user_id');

        $apply->request_type =  $req->apply_type;
        $apply->description = $req->description;


        $apply->save();
        $req->session()->flash('msg', 'Request Submitted...Wait for Manager Confirmation');
        return redirect()->route('Apply');
    }

    //......................Contact......................//

    public function Contact()
    {
        return view("Client.Contact");
    }

    public function Contactdone(contact $req)
    {


        $contact = new requestsModel;
        $contact->id = session('user_id');
        $contact->user_name =  $req->user_name;
        $contact->request_type =  $req->r_type;
        $contact->description = $req->description;
        $contact->status = 'pending';

        $contact->save();
        $req->session()->flash('msg', 'request submitted');
        return redirect()->route('Contact');
    }

    //......................Credit card......................//

    public function Credit_Card()
    {
        return view("Client.Credit_Card");
    }

    public function Credit_Carddone(creditCard $req)
    {
        $user = usersModel::find(session('user_id'))->login;
        //echo $user;
        $currentval = usersModel::find(session('user_id'))->client;

        //echo $currentval;
        //  echo $req->password;
        //  echo $req->password;
        //echo $user['password'];

        if (Hash::check($req->password,  $user['password'])) {


            DB::beginTransaction();

            if ($req->amount > $currentval['account_balance']) {
                $req->session()->flash('msg', 'insufficient balance');
                return redirect()->route('Credit_Card');
            } else {
                try {
                    $currentval = $currentval['account_balance'] - $req->amount;
                    //echo $currentval;
                    //echo session('user_id');

                    $credit_card  = new transactionModel;
                    $credit_card->id = session('user_id');
                    $credit_card->current_balance = $currentval;
                    $credit_card->credit = 0.0;
                    $credit_card->credit_type = 'Null';
                    $credit_card->debit =  $req->amount;
                    $credit_card->debit_type =  $req->type;
                    $credit_card->transactions_date = now()->day . '-' . now()->month . '-' . now()->year;


                    $credit_card->save();

                    $client_table = clientModel::find(session('user_id'));
                    //echo  $currentval ;
                    // $client_table->id =session('user_id');
                    $client_table->account_balance = $currentval;
                    $client_table->save();
                    DB::commit();
                    return redirect('/login/index');
                } catch (\Throwable $th) {
                    DB::roleback();
                    echo "Something Went Wrong";
                    throw $th;
                }
            }
            //return view("Client.Withdraw");
        } else {
            echo "password didn't match";
        }
    }


    //......................Edit Profile......................//
    public function Edit_Profile()
    {
        $user = usersModel::find(session('user_id'));
        return view("Client.Edit_Profile")->with('user', $user);
    }

    public function Edit_Profiledone(editprofile $req)
    {
        DB::beginTransaction();
        try {
            $user = usersModel::find(session("user_id"));
            $user->user_name = $req->user_name;
            $user->email = $req->email;
            $user->address = $req->address;
            $user->phone_number = $req->phone_number;
            $user->save();

            $login = loginModel::find(session("user_id"));
            $login->user_name = $req->user_name;
            $login->save();

            $req->session()->flash('msg', 'Profile updated Succefully');
            DB::commit();
            return redirect('/index/profile');
        } catch (\Throwable $th) {
            DB::rollBack();
            $req->session()->flash('msg', 'Something went wrong');
            return redirect('/index/profile');
            //throw $th;
        }
    }

    //......................Transaction......................//

    public function transaction()
    {
        $transaction = transactionModel::where("id", session('user_id'))->get();
        //print_r($transaction);
        return view("client.transaction")->with("transaction", $transaction);
    }

    public function transactionExport()
    {
        return Excel::download(new TransactionExport, 'Transacrions.xlsx');
    }



    //......................Change Password......................//

    public function changePassword()
    {
        return view("Client.changePassword");
    }

    public function changePassworddone(changePassword $req)
    {
        $password = usersModel::find(session('user_id'))->login;

        if (Hash::check($req->current_password, $password['password'])) {
            $user = loginModel::find(session("user_id"));
            $user->password = bcrypt($req->confirm_password);
            $user->save();

            $req->session()->flash("change_password", "password changed successfully");
            return redirect()->route('logout');
        } else {
            $req->session()->flash("change_password", "password didn't match with current password");
            return redirect('/index/changePassword');
        }
    }
    //......................EDUCATION......................//

    public function Education()
    {
        return view("Client.Education");
    }

    public function Educationdone(education $req)
    {
        $user = usersModel::find(session('user_id'))->login;
        //echo $user;
        $currentval = usersModel::find(session('user_id'))->client;

        //echo $currentval;
        //  echo $req->password;
        //  echo $req->password;
        //echo $user['password'];

        if (Hash::check($req->password,  $user['password'])) {


            DB::beginTransaction();

            if ($req->amount > $currentval['account_balance']) {
                $req->session()->flash('msg', 'insufficient balance');
                return redirect()->route('Education');
            } else {
                try {
                    $currentval = $currentval['account_balance'] - $req->amount;
                    //echo $currentval;
                    //echo session('user_id');

                    $education  = new transactionModel;
                    $education->id = session('user_id');
                    $education->current_balance = $currentval;
                    $education->credit = 0.0;
                    $education->credit_type = 'Null';
                    $education->debit =  $req->amount;
                    $education->debit_type =  $req->type;
                    $education->transactions_date = now()->day . '-' . now()->month . '-' . now()->year;


                    $education->save();

                    $client_table = clientModel::find(session('user_id'));
                    //echo  $currentval ;
                    // $client_table->id =session('user_id');
                    $client_table->account_balance = $currentval;
                    $client_table->save();
                    DB::commit();
                    return redirect('/login/index');
                } catch (\Throwable $th) {
                    DB::roleback();
                    echo "Something Went Wrong";
                    throw $th;
                }
            }
            //return view("Client.Withdraw");
        } else {
            echo "password didn't match";
        }
    }



    //......................Electricity......................//


    public function Electricity()
    {
        return view("Client.Electricity");
    }

    public function ElectricityDone(electricity $req)
    {
        $user = usersModel::find(session('user_id'))->login;
        //echo $user;
        $currentval = usersModel::find(session('user_id'))->client;

        //echo $currentval;
        //  echo $req->password;
        //  echo $req->password;
        //echo $user['password'];

        if (Hash::check($req->password,  $user['password'])) {


            DB::beginTransaction();

            if ($req->amount > $currentval['account_balance']) {
                $req->session()->flash('msg', 'insufficient balance');
                return redirect()->route('Electricity');
            } else {
                try {
                    $currentval = $currentval['account_balance'] - $req->amount;
                    //echo $currentval;
                    //echo session('user_id');

                    $electricity = new transactionModel;
                    $electricity->id = session('user_id');
                    $electricity->current_balance = $currentval;
                    $electricity->credit = 0.0;
                    $electricity->credit_type = 'Null';
                    $electricity->debit =  $req->amount;
                    $electricity->debit_type =  $req->type;
                    $electricity->transactions_date = now()->day . '-' . now()->month . '-' . now()->year;


                    $electricity->save();

                    $client_table = clientModel::find(session('user_id'));
                    //echo  $currentval ;
                    // $client_table->id =session('user_id');
                    $client_table->account_balance = $currentval;
                    $client_table->save();
                    DB::commit();
                    return redirect('/login/index');
                } catch (\Throwable $th) {
                    DB::roleback();
                    echo "Something Went Wrong";
                    throw $th;
                }
            }
            //return view("Client.Withdraw");
        } else {
            echo "password didn't match";
        }
    }

    //......................Exchange Currency......................//

    public function Exchange_Currency()
    {
        return view("Client.Exchange_Currency");
    }

    public function Exchange_Currencydone(exchangeCurrency $req)
    {
        $ex_money = new exchangecurrencymodel();
        $ex_money->id = session('user_id');
        $ex_money->exchange_from = $req->ex_from;
        $ex_money->exchange_amount = $req->ex_amount;
        $ex_money->exchange_to = $req->ex_to;
        $ex_money->Date = $req->date;


        $ex_money->save();
        $req->session()->flash('msg', 'Collect money from the office');
        return redirect()->route('Exchange_Currency');
    }


    //......................Gas......................//

    public function Gas()
    {
        return view("Client.Gas");
    }

    public function Gasdone(gas $req)
    {
        $user = usersModel::find(session('user_id'))->login;
        //echo $user;
        $currentval = usersModel::find(session('user_id'))->client;

        //echo $currentval;
        //  echo $req->password;
        //  echo $req->password;
        //echo $user['password'];

        if (Hash::check($req->password,  $user['password'])) {


            DB::beginTransaction();

            if ($req->amount > $currentval['account_balance']) {
                $req->session()->flash('msg', 'insufficient balance');
                return redirect()->route('Gas');
            } else {
                try {
                    $currentval = $currentval['account_balance'] - $req->amount;
                    //echo $currentval;
                    //echo session('user_id');

                    $gas = new transactionModel;
                    $gas->id = session('user_id');
                    $gas->current_balance = $currentval;
                    $gas->credit = 0.0;
                    $gas->credit_type = 'Null';
                    $gas->debit =  $req->amount;
                    $gas->debit_type =  $req->type;
                    $gas->transactions_date = now()->day . '-' . now()->month . '-' . now()->year;


                    $gas->save();

                    $client_table = clientModel::find(session('user_id'));
                    //echo  $currentval ;
                    // $client_table->id =session('user_id');
                    $client_table->account_balance = $currentval;
                    $client_table->save();
                    DB::commit();
                    return redirect('/login/index');
                } catch (\Throwable $th) {
                    DB::roleback();
                    echo "Something Went Wrong";
                    throw $th;
                }
            }
            //return view("Client.Withdraw");
        } else {
            echo "password didn't match";
        }
    }

    //......................Internet......................//

    public function Internet()
    {
        return view("Client.Internet");
    }
    public function Internetdone(internet $req)
    {
        $user = usersModel::find(session('user_id'))->login;
        //echo $user;
        $currentval = usersModel::find(session('user_id'))->client;

        //echo $currentval;
        //  echo $req->password;
        //  echo $req->password;
        //echo $user['password'];

        if (Hash::check($req->password,  $user['password'])) {


            DB::beginTransaction();

            if ($req->amount > $currentval['account_balance']) {
                $req->session()->flash('msg', 'insufficient balance');
                return redirect()->route('Internet');
            } else {
                try {
                    $currentval = $currentval['account_balance'] - $req->amount;
                    //echo $currentval;
                    //echo session('user_id');

                    $internet  = new transactionModel;
                    $internet->id = session('user_id');
                    $internet->current_balance = $currentval;
                    $internet->credit = 0.0;
                    $internet->credit_type = 'Null';
                    $internet->debit =  $req->amount;
                    $internet->debit_type =  $req->type;
                    $internet->transactions_date = now()->day . '-' . now()->month . '-' . now()->year;


                    $internet->save();

                    $client_table = clientModel::find(session('user_id'));
                    //echo  $currentval ;
                    // $client_table->id =session('user_id');
                    $client_table->account_balance = $currentval;
                    $client_table->save();
                    DB::commit();
                    return redirect('/login/index');
                } catch (\Throwable $th) {
                    DB::roleback();
                    echo "Something Went Wrong";
                    throw $th;
                }
            }
            //return view("Client.Withdraw");
        } else {
            echo "password didn't match";
        }
    }


    //......................Recharge Money......................//

    public function Recharge_money()
    {
        return view("Client.Recharge_money");
    }
    public function Recharge_moneydone(rechargeMoney $req)
    {
        $user = usersModel::find(session('user_id'))->login;
        //echo $user;
        $currentval = usersModel::find(session('user_id'))->client;



        if (Hash::check($req->password,  $user['password'])) {


            DB::beginTransaction();

            if ($req->amount > $currentval['account_balance']) {
                $req->session()->flash('msg', 'insufficient balance');
                return redirect()->route('Recharge_money');
            } else {
                try {
                    $currentval = $currentval['account_balance'] - $req->amount;
                    //echo $currentval;
                    //echo session('user_id');

                    $recharge = new transactionModel;
                    $recharge->id = session('user_id');
                    $recharge->current_balance = $currentval;
                    $recharge->credit = 0.0;
                    $recharge->credit_type = 'Null';
                    $recharge->debit =  $req->amount;
                    $recharge->debit_type =  $req->type;
                    $recharge->transactions_date = now()->day . '-' . now()->month . '-' . now()->year;


                    $recharge->save();

                    $client_table = clientModel::find(session('user_id'));
                    //echo  $currentval ;
                    // $client_table->id =session('user_id');
                    $client_table->account_balance = $currentval;
                    $client_table->save();
                    DB::commit();
                    return redirect('/login/index');
                } catch (\Throwable $th) {
                    DB::roleback();
                    echo "Something Went Wrong";
                    throw $th;
                }
            }
            //return view("Client.Withdraw");
        } else {
            echo "password didn't match";
        }
    }


    //......................Profile......................//

    public function profile()
    {
        $profile = usersModel::find(session('user_id'));
        // echo array($profile);
        return view("client.profile")->with("user", $profile);
    }

    //......................Send Money......................//

    public function Send_Money()
    {
        return view("Client.Send_Money");
    }

    public function Send_MoneyDone(sendMoney $req)
    {
        $user = usersModel::find(session('user_id'))->login;
        //echo $user;
        $currentval = usersModel::find(session('user_id'))->client;

        //echo $currentval;
        //  echo $req->password;
        //  echo $req->password;
        //echo $user['password'];

        if (Hash::check($req->password,  $user['password'])) {


            DB::beginTransaction();

            if ($req->amount > $currentval['account_balance']) {
                $req->session()->flash('msg', 'insufficient balance');
                return redirect()->route('Send_Money');
            } else {
                try {
                    $currentval = $currentval['account_balance'] - $req->amount;
                    //echo $currentval;
                    //echo session('user_id');

                    $sendmoney = new transactionModel;
                    $sendmoney->id = session('user_id');
                    $sendmoney->current_balance = $currentval;
                    $sendmoney->credit = 0.0;
                    $sendmoney->credit_type = 'Null';
                    $sendmoney->debit =  $req->amount;
                    $sendmoney->debit_type =  'send money' . $req->acc_num;
                    $sendmoney->transactions_date = now()->day . '-' . now()->month . '-' . now()->year;


                    $sendmoney->save();

                    $client_table = clientModel::find(session('user_id'));
                    //echo  $currentval ;
                    // $client_table->id =session('user_id');
                    $client_table->account_balance = $currentval;
                    $client_table->save();
                    DB::commit();
                    return redirect('/login/index');
                } catch (\Throwable $th) {
                    DB::roleback();
                    echo "Something Went Wrong";
                    throw $th;
                }
            }
            //return view("Client.Withdraw");
        } else {
            echo "password didn't match";
        }
    }

    //......................Telephone......................//

    public function Telephone()
    {
        return view("Client.Telephone");
    }
    public function Telephonedone(telephone $req)
    {
        $user = usersModel::find(session('user_id'))->login;
        //echo $user;
        $currentval = usersModel::find(session('user_id'))->client;

        //echo $currentval;
        //  echo $req->password;
        //  echo $req->password;
        //echo $user['password'];

        if (Hash::check($req->password,  $user['password'])) {


            DB::beginTransaction();

            if ($req->amount > $currentval['account_balance']) {
                $req->session()->flash('msg', 'insufficient balance');
                return redirect()->route('Telephone');
            } else {
                try {
                    $currentval = $currentval['account_balance'] - $req->amount;
                    //echo $currentval;
                    //echo session('user_id');

                    $telephone = new transactionModel;
                    $telephone->id = session('user_id');
                    $telephone->current_balance = $currentval;
                    $telephone->credit = 0.0;
                    $telephone->credit_type = 'Null';
                    $telephone->debit =  $req->amount;
                    $telephone->debit_type =  $req->type;
                    $telephone->transactions_date = now()->day . '-' . now()->month . '-' . now()->year;


                    $telephone->save();

                    $client_table = clientModel::find(session('user_id'));
                    //echo  $currentval ;
                    // $client_table->id =session('user_id');
                    $client_table->account_balance = $currentval;
                    $client_table->save();
                    DB::commit();
                    return redirect('/login/index');
                } catch (\Throwable $th) {
                    DB::roleback();
                    echo "Something Went Wrong";
                    throw $th;
                }
            }
            //return view("Client.Withdraw");
        } else {
            echo "password didn't match";
        }
    }
    //......................Water......................//

    public function Water()
    {
        return view("Client.Water");
    }
    public function Waterdone(water $req)
    {
        $user = usersModel::find(session('user_id'))->login;
        //echo $user;
        $currentval = usersModel::find(session('user_id'))->client;

        if (Hash::check($req->password,  $user['password'])) {


            DB::beginTransaction();

            if ($req->amount > $currentval['account_balance']) {
                $req->session()->flash('msg', 'insufficient balance');
                return redirect()->route('Water');
            } else {
                try {
                    $currentval = $currentval['account_balance'] - $req->amount;
                    //echo $currentval;
                    //echo session('user_id');

                    $water = new transactionModel;
                    $water->id = session('user_id');
                    $water->current_balance = $currentval;
                    $water->credit = 0.0;
                    $water->credit_type = 'Null';
                    $water->debit =  $req->amount;
                    $water->debit_type =  $req->type;
                    $water->transactions_date = now()->day . '-' . now()->month . '-' . now()->year;


                    $water->save();

                    $client_table = clientModel::find(session('user_id'));
                    //echo  $currentval ;
                    // $client_table->id =session('user_id');
                    $client_table->account_balance = $currentval;
                    $client_table->save();
                    DB::commit();
                    return redirect('/login/index');
                } catch (\Throwable $th) {
                    DB::roleback();
                    echo "Something Went Wrong";
                    throw $th;
                }
            }
            //return view("Client.Withdraw");
        } else {
            echo "password didn't match";
        }
    }

    //......................Withdraw......................//

    public function Withdraw()
    {
        return view("Client.Withdraw");
    }

    public function WithdrawDone(withdrw $req)
    {

        $user = usersModel::find(session('user_id'))->login;
        //echo $user;
        $currentval = usersModel::find(session('user_id'))->client;

        //echo $currentval;
        //  echo $req->password;
        //  echo $req->password;
        //echo $user['password'];

        if (Hash::check($req->pin,  $user['password'])) {


            DB::beginTransaction();
            if ($req->amount > $currentval['account_balance']) {
                $req->session()->flash('msg', 'insufficient balance');
                return redirect()->route('Withdraw');
            } else {
                try {

                    $currentval = $currentval['account_balance'] - $req->amount;
                    //echo $currentval;
                    //echo session('user_id');

                    $transaction = new transactionModel;
                    $transaction->id = session('user_id');
                    $transaction->current_balance = $currentval;
                    $transaction->credit = 0.0;
                    $transaction->credit_type = 'Null';
                    $transaction->debit =  $req->amount;
                    $transaction->debit_type =  $req->type;
                    $transaction->transactions_date = now()->day . '-' . now()->month . '-' . now()->year;

                    $transaction->save();

                    $client_table = clientModel::find(session('user_id'));
                    //echo  $currentval ;
                    // $client_table->id =session('user_id');
                    $client_table->account_balance = $currentval;
                    $client_table->save();
                    DB::commit();
                    return redirect('/login/index');
                } catch (\Throwable $th) {
                    echo "Something Went Wrong";
                    throw $th;
                }
            }
            //return view("Client.Withdraw");
        } else {
            echo "password didn't match";
        }
    }
}
