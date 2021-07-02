<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text"> <strong>Welcome
                            {{session('user_name')}}</span></strong>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('user.dashbord')}}"><i class="fa fa-lock"></i>Admin</a></li>
                    <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                </ul>
            </li>
            <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Manage Users</span>
                </a>
                <ul aria-expanded="false">

                    <li><a href="{{route('user.add_user')}}">Add users</a></li>
                    <li><a href="{{route('user.user_list')}}">Users List</a></li>
                    {{-- <li><a href="{{route('user.services')}}">Users Services</a>
            </li> --}}
            <li><a href="{{route('user.delete_user')}}">Delete Users</a></li>
            <li><a href="{{route('user.edit_user')}}">Edit Users</a></li>
            <li><a href="{{route('user.block_user')}}">Block Users</a></li>
            <li><a href="{{route('user.pending_user')}}">Pending Users</a></li>
            <li><a href="{{route('user.unblock_user')}}">Unblock Users</a></li>

            {{-- <li><a href="#">Users List</a></li>
                    <li><a href="#">Users Services</a></li>
                    <li><a href="#">Add users</a></li>
                    <li><a href="#">Delete Users</a></li>
                    <li><a href="#">Edit Users</a></li>
                    <li><a href="#">Block Users</a></li>
                    <li><a href="#">Pending Users</a></li>
                    <li><a href="#">Unblock Users</a></li>  --}}

        </ul>
        </li>
        <li class="nav-label"><strong>Manage Banking Works</strong> </li>
        <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="fa fa-th-list"></i></i> <span class="nav-text">Banking Works</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{route('user.client_req')}}">Clients Requests</a></li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="fa fa-id-badge"></i><span class="nav-text">My Info</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{route('user.profile')}}">Profile</a></li>
            </ul>
        </li>


        <li>
            <a href="{{route('user.postNotices')}}" aria-expanded="false">
                <i class="fa fa-plus"></i><span class="nav-text">Post Notice</span>
            </a>
        </li>
        </ul>
    </div>
</div>