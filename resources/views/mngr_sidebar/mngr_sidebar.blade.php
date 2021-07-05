<style>
        

        .fade {
        transition: opacity 7.95s linear; } /*This will controll the visible time*/
        </style>
<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="fade"></i><span class="nav-text"> Welcome to Dashboard</span>
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                <li><a href="/manager/logout"> <i class="fa fa-lock"></i>log out</a></li>    {{session('uname')}}
                    <li><a href="#"><i class="fa fa-lock"></i>Manager</a></li>
                    <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                </ul>
            </li>
            <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <li class="nav-label"><strong>Manage  </strong> </li>
                </a>
                <ul aria-expanded="false">

                    <li><a href="/manager/register">Register New User</a></li>
                   
                    <li class="nav-label"><strong> Client </strong> </li>
                    <li><a href="/manager/clientlist">Client's List</a></li>
                    <li><a href="/manager/clients">Print Client's List</a></li>

                    <li><a href="/manager/addclient">Add Client</a></li>
                    <li class="nav-label"><strong> Employee </strong> </li>

                    <li><a href="/manager/addemployee"> Hire Employee</a></li>
                    <li><a href="/manager/employee">Employee List</a></li>
                    <li><a href="/manager/employee/salary">Employee's Salary</a></li>
                    <li><a href="/manager/employee/reportingtime">Employee's Reporting Time</a></li>

                   
                    <li class="nav-label"><strong> Officials </strong> </li>

                    <li><a href="/manager/meeting/add">Add Meeting</a></li>
                    <li><a href="/manager/meeting/list"> Meeting List</a></li>
                   

                   

                    
                    <li><a href="/manager/deal">Deal</a></li>
                    <li class="nav-label"><strong> Report </strong> </li>

                    <li><a href="/manager/bug/add">Report A Bug</a></li>

                    <li><a href="/manager/viewreport">Report about Employee</a></li>

                  
                </ul>
            </li>
            <li class="nav-label"><strong>Manage Banking Works</strong> </li>
            <li>
               
            <li><a href="/manager/application">Applications</a></li>
                    <li><a href="/manager/financial">  Financials</a></li>
                    <li><a href="/manager/currency  ">Currency Info </a></li>
                    <li><a href="/manager/transactions">Transactions</a></li>

                </a>
                
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-id-badge"></i><span class="nav-text">Profile Info</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="/manager/dashboard/profile">Profile</a></li>
                    <li><a href="#">Edit Profile</a></li>
                </ul>
            </li>

        </ul>
    </div>
</div>
<div class="nav-header">
    <div class="brand-logo">
        <a href="{{'user.dashbord'}}">

            <b class="logo-abbr">
            </b>
            <span class="logo-compact">
            </span>
            <span class="brand-title">
            </span>
        </a>
    </div>
</div>