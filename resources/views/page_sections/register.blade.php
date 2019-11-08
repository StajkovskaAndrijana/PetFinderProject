<div class="modal fade modal_bgColorPrimary" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="Register_Modal_Header">
    <div class="modal-dialog" role="document">
        <div class="modal-content u-posRealtive bg-white">
            <div class="modal-header u-posTopRight">
                <button class="close" data-dismiss="modal" aria-label="Close"">
                    <span class="modal-closeBtn"></spans>
                </button>
            </div>

            <div class="row register-bd">
                <h2 class="bold">Register</h2>
                    <form class="register-form" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                        <label class="field-label">First Name</label>
                        <input type="text" class="bold field-input{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                        @if ($errors->has('first_name'))
                            <span class="invalid-feedback red" role="alert">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                        <label class="field-label">Last Name</label>
                        <input type="text" class="bold field-input{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                        @if ($errors->has('last_name'))
                            <span class="invalid-feedback red" role="alert">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                        <label class="select-label">Country</label>
                        <select class="select-select purple bold" name="country">
                            <option value="">Choose Country</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}" {{(old('country')==$country->id)? 'selected':''}}>{{$country->name}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('country'))
                            <span class="invalid-feedback red" role="alert">
                                <strong>{{ $errors->first('country') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                        <label class="field-label">Postal Code</label>
                        <input type="number" class="bold field-input{{ $errors->has('postal_code') ? ' is-invalid' : '' }}" name="postal_code" value="{{ old('postal_code') }}" required autocomplete="postal_code">
                        @if ($errors->has('postal_code'))
                            <span class="invalid-feedback red" role="alert">
                                <strong>{{ $errors->first('postal_code') }}</strong>
                            </span>
                    @endif
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                        <label class="field-label">Email</label>
                        <input type="email" class="bold field-input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @if ($errors->has('email') && !old('loginform'))
                        <span class="invalid-feedback red" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 italic">
                        <i>You will use your email<br> address to log in</i>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                        <label class="field-label">Password</label>
                        <input type="password" class="bold field-input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="new-password">
                        @if ($errors->has('password') && !old('loginform'))
                        <span class="invalid-feedback red" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                        <label class="field-label">Confirm Password</label>
                        <input type="password" class="bold field-input{{ $errors->has('confirm_password') ? ' is-invalid' : '' }}" name="confirm_password" required autocomplete="new-password">
                        @if ($errors->has('confirm_password'))
                        <span class="invalid-feedback red" role="alert">
                            <strong>{{ $errors->first('confirm_password') }}</strong>
                        </span>
                    @endif
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 register-button">
                        <button type="submit" name="register-submit" class=" btn btn-block text-center white bold">REGISTER</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




