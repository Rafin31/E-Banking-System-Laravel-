<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Manager;
use App\Models\loginmodel;
use App\Models\User;
use Carbon\Carbon;
use App\Models\financialmodel
;

use App\Models\clientmodel;
use App\Models\transmodel;
use App\Models\hiredemployeemodel;
use App\Models\reportingtimemodel;
use App\Models\requesttomanagermodel;
use App\Models\salarymodel;
use App\Models\meetingmodel;
use App\Models\bugreportmodel;
use App\Models\reportmodel;

use Validator;

class ManagerController extends Controller
{
        
        public function createUser(Request $rq)
        {
            $error=false;
            $validation=Validator::make($rq->all(),
            [
                
                'uname'=> 'required|min:3|max:10' ,
                'password'=> 'required|min:8|max:25',
                'phnno'=>'required|min:11'
            ]
            );
            $validationemail=Validator::make($rq->all(),
            [
               
                'email'=>'email:rfc,dns'
            ]
            );
            $username=$rq->uname;
            $split_user =str_split($username,1)   ;
            if(ctype_alnum($username)||  ctype_alnum($username) || in_array('_',$split_user) || in_array('-',$split_user) || in_array('.',$split_user)==false )
            {
               
            }
            else
            {
                echo "UserName Rules Violation  <br>";
                $error=true;
            }
             if($rq->password!=$rq->cpassword)
            {
                echo "Re typed password doesn't match <br>";
                $error=true;


            }
            else if($validation->fails() || $validationemail->fails())
            {
               
                $error=true;

            }
            if ($error)
            {
                echo "Validations failed";
            }
            else
            {
       
        DB::beginTransaction();
        try {

            // inserting into users table
            $user = new User;
            
            $user->user_name = $rq->uname;
            $user->email = $rq->email;
            $user->address = $rq->address;
            $user->phone_number =  $rq->phnno;
            $user->profile_picture =  'null';
            $user->user_type =  $rq->ut;
            $user->account_Status ='active';
            $found= loginmodel::where('user_name',$rq->uname)->first();
            if($found)
            {
                echo "The username already exists";
            }
            else
            {
                $user->save();

                $last = User::all()->last();
                $id = $last['id'];
    
                // inserting into login table
                $login = new loginmodel;
                $login->id =  $id;
                $login->user_name = $rq->uname;
                $login->password =  $rq->password;
                $login->user_type = $rq->ut;
                $login->account_Status ='active';
                $login->save();
                DB::commit();
                $rq->session()->flash('msg'," Registration Sucess Please login");
                return redirect('/manager/login');
            
        }
           
        }
         catch(\Throwable $th) 
         {
            DB::rollBack();
            echo "Registration Failed ";
            throw $th;
        }
    
        }
  }

        public function verify(Request $rq)
        {
            $validation=Validator::make($rq->all(),
            [
                
                'uname'=> 'required|min:3|max:10' ,
                'password'=> 'required|min:8|max:25'
               
            ]);
             if($validation->fails())
            {
               
                echo "Password /Username validation error";

            }
            $found= loginmodel::where('user_name',$rq->uname)
            ->where('password',$rq->password)
            ->first() ;
            if($found)
            {
            if(array($found['user_name']))
            {
                    $rq->session()->put('uname',$rq->uname);
                    if ($rq->session()->has('uname'))
                    {
                        if(array($found['user_type'=='Bank Manager']))
                        {
                            return redirect('/manager/dashboard')->withName($rq->uname);

                        }
                        elseif(array($found['user_type'=='Admin']))
                        {
                            return redirect('/dashboard')->withName($rq->uname);
                        }
                    }
               
              
            }
        }
            else
            {
                $rq->session()->flash('msg',"Invalid Credentials");
                return redirect('/manager/login');
            }
            /*if ($rq->uname=="manager"  &&  $rq->password=="1234")
            {
                $rq->session()->put('uname',$rq->uname);
                $rq->session()->put('password',$rq->password);
                //$rq->session()->get('status') == true;
                if ($rq->session()->has('uname'))
                {
                    return redirect('/manager/dashboard')->withName($rq->uname);
                }
                
            }
            else
            {
                $rq->session()->flash('msg',"invalid credentials");
                return redirect('/manager/login');
                //return view('mngr.loginerr');
            }*/
        }

        public function logout(Request $rq )
        {
                $rq->session()->flush('msg'," Please login again to continue ");
                return redirect('/login');
            
        }
        
        public function addClient(Request $rq)
        {

        $validation=Validator::make($rq->all(),
        [
            
            'acbalance'=> 'required|min:2' ,
            
        ]
        );
        if($validation->fails())
        {
            echo "Validation Failed .";
        }
        else
        {
            $user = new clientmodel;
            $user->id=$rq->id;
            $user->account_balance=$rq->acbalance;
            $user->account_type=$rq->at;
   
            $user->nid_varification=$rq->nidverify;
            $user->account_status=$rq->as;
          
           $user->save();
           $users = clientmodel::all();
       
       
           return view('mngr.client.clientList')->with('clientlist',$users); 
        }
        

     

       
        }

        public function addMeeting(Request $rq)
        {

            
          
            $validation=Validator::make($rq->all(),
            [
                
                'title'=> 'required|min:2' , //must have to be minimum 2 char
                'mt'=> 'required',
                'venue'=> 'required',
                'date'=> 'required|date|after:tomorrow', // The date must be after tommorrow
                
                'time'=> 'required'

            ]
            );
          
            if($validation->fails())
            {
                echo "Validation Failed .";
            }
            else
            {
                $user = new meetingmodel;
                $user->id=$rq->id;
                $user->title=$rq->title;
                $user->meeting_type=$rq->mt;
                $user->venue=$rq->venue;
                $user->date=$rq->date;
                $user->time=$rq->time;
              
               $user->save();
       
               $users = meetingmodel::all();
               return view('mngr.meeting.meetingList')->with('meetinglist',$users); 
            }
 
        
     
      
        }

        public function addBugReport(Request $rq)
        {

           
            $validation=Validator::make($rq->all(),
            [
                
                'id'=> 'required|min:1' ,
                
                'bt'=> 'required',
                'description'=> 'required'

            ]
            );
            if($validation->fails())
            {
                echo "Validation Failed .";
            }
            else
            {
                $user = new bugreportmodel;
                $user->id=$rq->id;
                $user->description=$rq->description;
                $user->bug_type=$rq->bt;

                $user->save();
       
               $users = bugreportmodel::all();
               return view('mngr.bug.bugList')->with('buglist',$users); 
            }
 
        
     
      
        }

    public function getAllClient()
    {

            $users = clientmodel::all();
 
           
        return view('mngr.client.clientList')->with('clientlist',$users); 
    }
    public function getAllReportingTime()
    {

            $users = reportingtimemodel::all();
 
 
        return view('mngr.reportingtime')->with('clientlist',$users); 
    }

    public function blockClient(Request $rq)
    {

          $user = clientmodel::where('id',$rq->id) 
        ->first();
        $user->account_status='inactive';
    
    $user->save();


    $users = clientmodel::all();
    
    return view('mngr.client.clientList')->with('clientlist',$users); 
    
    }
    public function blockDetails($id)
    {
        //return view('mngr.blockclient')->with('id',$id);
        $user= clientmodel::where('id', $id)
            ->first();
        
        return view('mngr.client.confirmBlock')->with('blocklist',$user); 
    }


    public function acceptApplication($id)
    {

        $user= requesttomanagermodel::where('id', $id)
        ->first();
    
    return view('mngr.application.confirmApplication')->with('blocklist',$user); 
    }       

    public function confirmApplication(Request $rq)
    {

          $user = requesttomanagermodel::where('id',$rq->id) 
        ->first();
        $user->status='completed';
    
    $user->save();


    $users = requesttomanagermodel::all();
    
    return view('mngr.application.applicationList')->with('reqlist',$users); 
    
    }
    
        

        public function addEmployee(Request $rq)
        {

            $validation=Validator::make($rq->all(),
            [
                
                
                'id'=> 'required',
                'mt'=> 'required',
                'uname'=> 'required',
                'designation'=> 'required',
                'duration'=> 'required'

            ]
            );
         
 
           
        

        $users = hiredemployeemodel::all();
        if($validation->fails())
        {
            echo "Validation Failed";
        }
        else
        {

            $user = new hiredemployeemodel;
            $user->id=$rq->id;
            $user->name=$rq->uname;
            $user->designation=$rq->designation;
            $user->duration=$rq->duration;  
           
            $user->save();
            return view('mngr.employee.employeeList')->with('employeelist',$users); 
        }
       
       
        }
//All getting method  . . . 
    public function getAllTrans()
    {

            $users = transmodel::all();
 
 
        return view('mngr.transaction.transactionList')->with('translist',$users); 
    }
    public function getAllReq()
    {

            $users =   requesttomanagermodel::all();
 
 
        return view('mngr.application.applicationList')->with('reqlist',$users); 
    } 
    public function getAllSalary()
    {

            $users =   salarymodel::all();
 
 
        return view('mngr.employee.salaryList')->with('salarylist',$users); 
    }

    
    public function calculateProfit()
    {

            $users =   financialmodel::all();
           
            foreach ($users as $month)  // important: To iterate an array of object achived from model must have to have id as primary key to iterate the array
            {
                $profit=$month->profit;
                $loss= $month->loss;
                if($profit<$loss)
                {
                    $ultimateprofit=($profit-$loss);
                    $month->ultimate_profit=-$ultimateprofit;
                }
                $ultimateprofit=$profit-$loss;
                $month->ultimate_profit=$ultimateprofit;
                $month->save();
            }
           
            $users =   financialmodel::all();
        return view('mngr.financial.financialList')->with('finanlciallist',$users); 
    }
    public function getAllEmployee()
    {

            $users =   hiredemployeemodel::all();
 
 
        return view('mngr.employee.employeeList')->with('employeelist',$users); 
    }
    public function getReportingTime()
    {

            $users =   reportingtimemodel::all();
 
 
        return view('mngr.employee.reportingtime')->with('reportingtime',$users); 
    }
    public function getAllMeeting()
    {

            $users =   meetingmodel::all();
 
 
            return view('mngr.meeting.meetingList')->with('meetinglist',$users); 
    }
    public function getFinancial()
    {

            $users =   financialmodel::all();
 
 
            return view('mngr.financial.financialList')->with('finanlciallist',$users); 
    }
    public function getReport()
    {

            $users = reportmodel::all();
 
 
        return view('mngr.report.reportList')->with('reportlist',$users); 
    }
    public function getProfile()
    {
            //$found= User::where('user_name',$rq->session('user_name'))->first();

            //$users = reportmodel::all();
 
 
        return view('mngr.profile.profileList');
        //->with('profilelist',$found); 
    }


    public function addDeal(Request $rq)
    {

        $validation=Validator::make($rq->all(),
        [
            
            'name'=> 'required|min:2' ,
           
            'email'=> 'email|required' 
        ]
        );
        if($validation->fails())
        {
            echo "Validation Failed .";
        }
        else
        {
          
        $deal = [
            'companyname'=>$rq->name ,
            'description'=>$rq->description,
            'email'=>$rq->email

        ];
   
            $json=json_encode($deal);
    

         
            if (file_exists('../resources/views/mngr/deal.json'))
            {
                $get_data= file_get_contents('../resources/views/mngr/deal.json'); 
                $array_data =json_decode($get_data);
                $deal = array('companyname'=>$rq->name ,
                'description'=>$rq->description,
                'email'=>$rq->email
            );
                $array_data[]=$deal;
                $json_data=json_encode($array_data);
                if(file_put_contents('../resources/views/mngr/deal.json',$json_data))
                {
                    echo"Sueccesfully Deal Done ! ! ! (Stored In deal.json file)";
                   return view('mngr.deal.dealList');
                }
                else
                {
                    echo "Sorry can't make Deal . . . . Error Occured";
                }
            }
           //return view('mngr.client.clientList')->with('clientlist',$users); 
        }
    }




    
        
}
