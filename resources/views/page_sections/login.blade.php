<div class="modal fade modal_bgColorPrimary" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="Login_Modal_Header">
    <div class="modal-dialog" role="document">
        <div class="modal-content login u-posRealtive bg-purple">
            <div class="modal-header u-posTopRight">
                <button class="close" data-dismiss="modal" aria-label="Close"">
                    <span class="modal-closeBtn"></spans>
                </button>
            </div>
            <div class="row login-bd bg-white">
                <div class="col-xs-12 col-sm-12 col-md-12 login-bd-inner">
                    <h2 class="bold">Log in</h2>
                    <form class="login-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <input type="hidden" name="loginform" value="1">
                        <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                            <label for="email" class="field-label">Email</label>
                            <input type="email" class="bold field-input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @if ($errors->has('email') && old('loginform'))
                                <span class="invalid-feedback red" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                            <label for="password" class="field-label">Password</label>
                            <input type="password" class="bold field-input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="current-password">
                            @if ($errors->has('password') && old('loginform')))
                                <span class="invalid-feedback red" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <button type="submit" name="login-submit" class="btn btn-block text-center white bold">LOG IN</button>
                        <a href="https://www.facebook.com/" class="btn btn-block text-center white bold"><i class="fab fa-facebook-f white"></i><span class="white"> SIGN IN WITH FACEBOOK</span></a>

                    </form>
                    <div class="col-xs-12 col-sm-12 col-md-12 forgot_pass text-center">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">FORGOT PASSWORD?</a>
                        @endif
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 register text-center ">
                        <p class="text-uppercase bold">Don't have an account?</p>
                         <button type="button" class="btn btn-block text-center white bold" data-toggle="modal" data-target="#registerModal" data-dismiss="modal">REGISTER NOW</button>
                    </div>
                </div>
            </div>
            <div class="row login-ft">
                <div class="col-xs-12 col-sm-12 col-md-12 login-ft-inner white">
                    <h3 class="text-capitalize bold">We make adoption easier</h3>
                    <ul class="list">
                        <li>Create and save your adopter profile.</li>
                        <li>Same and manage your pet searches and email communications.</li>
                        <li>Learn helpful pet care tips and receive expert advice.</li>
                        <li>Get involved and help promote adoptable pets in your area.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@include('page_sections.register')


