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
                        <li role="presentation"><a href="/account">Account Settings</a></li>
                        <li role="presentation" class="active"><a href="/saved_searches">Saved Searches & Alerts</a></li>
                    </ul>
                </nav>
            </div>

            <div class="hidden-sm hidden-md hidden-lg user-profile-nav-mobile">
                <button type="button" class="user-profile-menu btn-block bold" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    My Profile Menu<span><i style="margin-left: 10px"  class="fas fa-angle-down " ></i></span>
                </button>
                <ul class="dropdown-menu user-profile-dropdown">
                    <li role="presentation"><a href="user">About Me</a></li>
                    <li role="presentation"><a href="account">Account Settings</a></li>
                    <li role="presentation" class="active"><a href="saved_searches">Saved Searches & Alerts</a></li>
                </ul>
            </div>
        </div>

        <div class="fieldset-searches">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <p>You have set up 0 alerts for new pets.</p>
                <p>Pet search alerts monitor for you, so you can get a first look at any newly added pets</p>
                <br>
                <p>To set one up, choose 'SET ALERT' next to the bell icon in your search results</p>
            </div>
            <div class="col-md-12">
                <a href="#"><span class="glyphicon glyphicon-chevron-left"></span> All (0) <span class="glyphicon glyphicon-chevron-right"></span></a>
                <hr>
            </div>
        </div>
    </div>
</div>

@endsection
