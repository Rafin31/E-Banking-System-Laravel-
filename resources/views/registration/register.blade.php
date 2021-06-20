<!DOCTYPE html>
<html class="h-100" lang="en">

@include('head.head', ['title' => 'Registration | E-Banking System'])

<body class="h-100">

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
                                        <input type="text" class="form-control" placeholder="User Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone Number" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Confirm password" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Address" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-skill">User Type <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <select class="form-control" id="val-skill" name="val-skill">
                                                <option value="">User Type</option>
                                                <option value="html">Clients</option>
                                                <option value="html">Bank Manager</option>
                                                <option value="css">Money exchange officer</option>
                                                <option value="javascript">Customer care</option>
                                            </select>
                                        </div>
                                    </div>
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