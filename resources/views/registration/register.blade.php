<!DOCTYPE html>
<html class="h-100" lang="en">

@include('head.head', ['title' => 'Registration | E-Banking System'])

<body class="h-100">

    <style>
        .alert-danger {
            text-align: center;
        }
    </style>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->





    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">

                                <a class="text-center" href="{{ route('registration.register')}}">
                                    <h4>Sign-in</h4>
                                </a>

                                <form method="post" class="mt-5 mb-5 login-input">

                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="user_name" value="{{old('user_name')}}"
                                            class="form-control" {{old('')}} placeholder="User Name" required>
                                    </div>
                                    {{-- errors --}}
                                    <div class="alert-danger mb-4">{{$errors -> first('user_name')}}</div>
                                    {{-- errors end --}}

                                    <div class="form-group">
                                        <input type="text" value="{{old('phone_number')}}" name="phone_number"
                                            class="form-control" placeholder="Phone Number" required>
                                    </div>
                                    {{-- errors --}}
                                    <div class="alert-danger mb-4">{{$errors -> first('phone_number')}}</div>
                                    {{-- errors end --}}

                                    <div class="form-group">
                                        <input type="email" value="{{old('email')}}" name="email" class="form-control"
                                            placeholder="Email" required>
                                    </div>
                                    {{-- errors --}}
                                    <div class="alert-danger mb-4">{{$errors -> first('email')}}</div>
                                    {{-- errors end --}}
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Password" required>
                                    </div>
                                    {{-- errors --}}
                                    <div class="alert-danger mb-4">{{$errors -> first('password')}}</div>
                                    {{-- errors end --}}
                                    <div class="form-group">
                                        <input type="password" name="con_password" class="form-control"
                                            placeholder="Confirm password" required>
                                    </div>
                                    {{-- errors --}}
                                    <div class="alert-danger mb-4">{{$errors -> first('con_password')}}</div>
                                    {{-- errors end --}}
                                    <div class="form-group">
                                        <input type="text" name="address" value="{{old('address')}}"
                                            class="form-control" placeholder="Address" required>
                                    </div>
                                    {{-- errors --}}
                                    <div class="alert-danger mb-4">{{$errors -> first('address')}}</div>
                                    {{-- errors end --}}
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-skill">User Type <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <select class="form-control" id="val-skill" name="user_type">
                                                <option value="">User Type</option>
                                                <option value="clients">Clients</option>
                                                <option value="bank_manager">Bank Manager</option>
                                                <option value="noney_exchange_officer">Money exchange officer</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="alert-danger mb-4">{{$errors -> first('user_type')}}</div>
                                    <button class="btn login-form__btn submit w-100">Sign in</button>
                                </form>
                                <p class="mt-5 login-form__footer">Have account <a href="{{ route('login.login')  }}"
                                        class="text-primary">Sign in
                                    </a>
                                    now</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>




    <!--**********************************
        Scripts
    ***********************************-->
    @include('scripts.scripts')
</body>

</html>