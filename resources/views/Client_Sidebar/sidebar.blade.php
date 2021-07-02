<div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('client.index')}}"><i class="fa fa-lock"></i>{{session('user_name')}}</a></li>
                            <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                        </ul>
                    </li>


                    <li>
                        <a href="{{route('Withdraw')}}" aria-expanded="false">
                            <i class="fa fa-minus-circle"></i><span class="nav-text">Withdraw Money</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('Send_Money')}}" aria-expanded="false">
                            <i class="fa fa-paper-plane"></i><span class="nav-text">Send Money</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('Transaction')}}" aria-expanded="false">
                            <i class="fa fa-tablet"></i><span class="nav-text">Transaction</span>
                        </a>

                    </li>

                    <li>
                        <a href="{{route('Exchange_Currency')}}" aria-expanded="false">
                            <i class="fab fa-stack-exchange"></i><span class="nav-text">Exchange Currency</span>
                        </a>
                    

                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Paying Bills</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('Electricity')}}">Electricity</a></li>
                            <li><a href="{{route('Gas')}}">Gas</a></li>
                            <li><a href="{{route('Water')}}">Water</a></li>
                            <li><a href="{{route('Internet')}}">Internet</a></li>
                            <li><a href="{{route('Telephone')}}">Telephone</a></li>
                            <li><a href="{{route('Education')}}">Education</a></li>
                            <li><a href="{{route('Credit_Card')}}">Credit Card</a></li>
                            <li><a href="{{route('Recharge_money')}}">Recharge Money</a></li>
                            

                        </ul>
                    <li>
                        <a href="{{route('Apply')}}" aria-expanded="false">
                            <i class="fa fa-tablet"></i><span class="nav-text">Apply</span>
                        </a>

                    </li>
                    
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-id-badge"></i><span class="nav-text">My Info</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('Profile')}}">Profile</a></li>
                            <li><a href="{{route('Edit_Profile')}}">Edit Profile</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{route('Contact')}}" aria-expanded="false">
                            <i class="fa fa-address-book"></i><span class="nav-text">Contact</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
       