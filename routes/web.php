<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});
Route::get('/login', "loginController@index")->name("login.login");
Route::get('/login/logout', "loginController@logout")->name("logout");
Route::post('/login', "loginController@loginVarify");


Route::get('/login/registration', "loginController@signUP")->name("registration.register");
Route::post('/login/registration', "registrationcontroller@registration");


//-----------------------------Session Check-------------------------------------
Route::group(['middleware' => ['sessionCheck']], function () {


    //----------------------------Admin Check start here-----------------------------------------------
    Route::group(['middleware' => ['adminCheck']], function () {
        Route::get('/dashbord', "loginController@dashbord")->name("user.dashbord");

        Route::get('/dashbord/userList', "userController@userList")->name("user.user_list");
        Route::post('/dashbord/userList', "userController@ajaxSearch")->name('ajax');

        Route::get('/dashbord/userServices', "userController@userServices")->name("user.services");

        Route::get('/dashbord/addUser', "userController@addUser")->name("user.add_user");
        Route::post('/dashbord/addUser', "userController@insertUser");

        Route::get('/dashbord/deleteUser', "userController@deleteUser")->name("user.delete_user");
        Route::post('/dashbord/deleteUser', "userController@destroy");

        Route::get('/dashbord/editUser', "userController@editUser")->name("user.edit_user");
        Route::get('/dashbord/completeEdit/{id}', "userController@completeEdit")->name("completeEdit");
        Route::post('/dashbord/completeEdit/{id}', "userController@editingOparetion");


        Route::get('/dashbord/blockUser', "userController@blockUser")->name("user.block_user");
        Route::post('/dashbord/blockUser', "userController@blockUserOparetion")->name("user.block_user");

        Route::get('/dashbord/pendingUser', "userController@pendingUser")->name("user.pending_user");
        Route::post('/dashbord/pendingUser', "userController@pendingUserOparation");

        Route::get('/dashbord/unblockUser', "userController@unblockUser")->name("user.unblock_user");
        Route::post('/dashbord/unblockUser', "userController@unblockOperation");

        Route::get('/dashbord/clientReq', "userController@clientReq")->name("user.client_req");
        Route::post('/dashbord/clientReq', "userController@clientReqOperation");

        Route::get('/dashbord/profile', "userController@profile")->name("user.profile");

        Route::get('/dashbord/profile/editProfile', "userController@editProfile")->name("user.edit__profile");
        //Route::get('/dashbord/profile/editProfile', "userController@editProfile")->name("user.edit__profile");
        Route::post('/dashbord/profile/editProfile', "userController@editProfileOparetion");

        Route::get('/dashbord/profile/changePassword', "userController@changePassword")->name("user.changePassword");
        Route::post('/dashbord/profile/changePassword', "userController@changePasswordOperation");

        Route::get('/dashbord/postNotices', "userController@postNotices")->name("user.postNotices");
        Route::post('/dashbord/postNotices', "userController@postNoticesOperation")->name("user.postNotices");

        Route::get('/dashbord/userList/export', "userController@export");
    });
    //-------------------------Admin check Ends Here--------------------------------------




    //Client Start

    Route::get('/login/index', "clientController@index")->name("client.index");

    Route::get('/index/Withdraw', "clientController@Withdraw")->name("Withdraw");
    Route::post('/index/Withdraw', "clientController@WithdrawDone");

    Route::get('/index/Send_Money', "clientController@Send_Money")->name("Send_Money");
    Route::post('/index/Send_Money', "clientController@Send_MoneyDone");

    Route::get('/index/Electricity', "clientController@Electricity")->name("Electricity");
    Route::post('/index/Electricity', "clientController@ElectricityDone");

    Route::get('/index/Exchange_Currency', "clientController@Exchange_Currency")->name("Exchange_Currency");
    Route::post('/index/Exchange_Currency', "clientController@Exchange_Currencydone");

    Route::get('/index/Gas', "clientController@Gas")->name("Gas");
    Route::post('/index/Gas', "clientController@gasdone");

    Route::get('/index/Water', "clientController@Water")->name("Water");
    Route::post('/index/Water', "clientController@Waterdone");

    Route::get('/index/Internet', "clientController@Internet")->name("Internet");
    Route::post('/index/Internet', "clientController@Internetdone");

    Route::get('/index/Telephone', "clientController@Telephone")->name("Telephone");
    Route::post('/index/Telephone', "clientController@Telephonedone");

    Route::get('/index/Education', "clientController@Education")->name("Education");
    Route::post('/index/Education', "clientController@Educationdone");

    Route::get('/index/Credit_Card', "clientController@Credit_Card")->name("Credit_Card");
    Route::post('/index/Credit_Card', "clientController@Credit_Carddone");

    Route::get('/index/Recharge_money', "clientController@Recharge_money")->name("Recharge_money");
    Route::post('/index/Recharge_money', "clientController@Recharge_moneydone");

    Route::get('/index/transaction', "clientController@transaction")->name("Transaction");
    Route::get('/index/transaction/export', "clientController@transactionExport");

    Route::get('/index/changePassword', "clientController@changepassword")->name("changePassword");
    Route::post('/index/changePassword', "clientController@changepassworddone");

    Route::get('/index/Apply', "clientController@Apply")->name("Apply");
    Route::post('/index/Apply', "clientController@Applydone");

    Route::get('/index/profile', "clientController@Profile")->name("Profile");

    Route::get('/index/Edit_Profile', "clientController@Edit_Profile")->name("Edit_Profile");
    Route::post('/index/Edit_Profile', "clientController@Edit_Profiledone");

    Route::get('/index/Contact', "clientController@Contact")->name("Contact");
    Route::post('/index/Contact', "clientController@Contactdone");


    Route::get('/index/logout', "clientController@logout")->name("client.logout");

     //Client Start

    Route::get('/login/index',"clientController@index")->name("client.index");

    Route::get('/index/Withdraw',"clientController@Withdraw")->name("Withdraw");
    Route::post('/index/Withdraw',"clientController@WithdrawDone");

    Route::get('/index/Send_Money',"clientController@Send_Money")->name("Send_Money");
    Route::post('/index/Send_Money',"clientController@Send_MoneyDone");
    
    Route::get('/index/Electricity',"clientController@Electricity")->name("Electricity");
    Route::post('/index/Electricity',"clientController@ElectricityDone");
    
    Route::get('/index/Exchange_Currency',"clientController@Exchange_Currency")->name("Exchange_Currency");
    Route::post('/index/Exchange_Currency',"clientController@Exchange_Currencydone");

    Route::get('/index/Gas',"clientController@Gas")->name("Gas");
    Route::post('/index/Gas',"clientController@gasdone");

    Route::get('/index/Water',"clientController@Water")->name("Water");
    Route::post('/index/Water',"clientController@Waterdone");

    Route::get('/index/Internet',"clientController@Internet")->name("Internet");
    Route::post('/index/Internet',"clientController@Internetdone");

    Route::get('/index/Telephone',"clientController@Telephone")->name("Telephone");
    Route::post('/index/Telephone',"clientController@Telephonedone");

    Route::get('/index/Education',"clientController@Education")->name("Education");
    Route::post('/index/Education',"clientController@Educationdone");

    Route::get('/index/Credit_Card',"clientController@Credit_Card")->name("Credit_Card");
    Route::post('/index/Credit_Card',"clientController@Credit_Carddone");

    Route::get('/index/Recharge_money',"clientController@Recharge_money")->name("Recharge_money");
    Route::post('/index/Recharge_money',"clientController@Recharge_moneydone");

    Route::get('/index/transaction',"clientController@transaction")->name("Transaction");

    Route::get('/index/changePassword',"clientController@changepassword")->name("changePassword");
    Route::post('/index/changePassword',"clientController@changepassworddone");

    Route::get('/index/Apply',"clientController@Apply")->name("Apply");
    Route::post('/index/Apply',"clientController@Applydone"); 

    Route::get('/index/profile',"clientController@Profile")->name("Profile");

    Route::get('/index/Edit_Profile',"clientController@Edit_Profile")->name("Edit_Profile");
    Route::post('/index/Edit_Profile',"clientController@Edit_Profiledone");

    Route::get('/index/Contact',"clientController@Contact")->name("Contact");
    Route::post('/index/Contact',"clientController@Contactdone");
    
    
    Route::get('/index/logout',"clientController@logout")->name("client.logout");
    

});
//---------------------------sessoion check Ends here-----------------------------------------
