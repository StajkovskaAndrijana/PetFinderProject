@extends('main')

@section('content')

<div class="container-fluid user-profile">
    <div class="row profile-main">
        <div class="profile-header col-md-12">
            <h1 class="profile bold">My profile</h1>
            <div class="hidden-xs col-sm-12 col-md-12 col-lg-12 user-profile-nav">
                <nav>
                    <ul class="nav nav-tabs">
                        <li role="presentation"><a href="user">About me</a></li>
                        <li role="presentation" class="active"><a href="/account">Account Settings</a></li>
                        <li role="presentation"><a href="/saved_searches">Saved Searches & Alerts</a></li>
                    </ul>
                </nav>
            </div>

            <div class="hidden-sm hidden-md hidden-lg user-profile-nav-mobile">
                <button type="button" class="user-profile-menu btn-block bold" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    My Profile Menu<span><i style="margin-left: 10px"  class="fas fa-angle-down " ></i></span>
                </button>
                <ul class="dropdown-menu user-profile-dropdown">
                    <li role="presentation"><a href="user">About Me</a></li>
                    <li role="presentation" class="active"><a href="account">Account Settings</a></li>
                    <li role="presentation"><a href="saved_searches">Saved Searches & Alerts</a></li>
                </ul>
            </div>
        </div>

        <div class="fieldset">
            <div class="col-md-12 fieldset-title">
                <span class="text-uppercase bold">Email</span>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 pl-0">
                <span>{{$user->email}}</span>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 change-email">
                <button id="emailBtn" type="button" class="purple bold">Change</button>
            </div>
        </div>

        <form action="" method="POST" id="emailForm">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="col-md-12 pl-0">
            <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                <label class="field-label">New Email</label>
                <input type="email" class="bold field-input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="" required autocomplete="email" autofocus>
                @if ($errors->has('email'))
                    <span class="invalid-feedback red" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 pl-0">
                <button type="submit" class="btn btn-block text-center white bold update-pass-btn">UPDATE EMAIL</button>
            </div>
            @csrf
        </form>

        <form action="{{ route('password.update') }}" method="POST" class="user-form">
            <div class="fieldset-change-pass">
                <div class="col-md-12 fieldset-title">
                    <span class="text-uppercase bold">Change password</span>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 pl-0 pr-0">
                    <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                        <label class="field-label">Current password</label>
                        <input type="password" class="field-input bold" name="password" value="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 pl-0 pr-0">
                    <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                        <label class="field-label">New password</label>
                        <input type="password" class="field-input bold" name="password" value="" required autocomplete="new-password">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 pl-0 pr-0">
                    <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                        <label class="field-label">Confirm password</label>
                        <input type="password" class="field-input bold" name="password_confirmation" required autocomplete="new-password" value="">
                    </div>
                </div>
            </div>
            <div class="fieldset">
                <div class="col-xs-12 col-sm-12 col-md-6 pl-0">
                    <button type="submit" class="btn btn-block text-center white bold update-pass-btn">UPDATE PASSWORD</button>
                </div>
            </div>
            @csrf
        </form>
    </div>
</div>

@endsection
