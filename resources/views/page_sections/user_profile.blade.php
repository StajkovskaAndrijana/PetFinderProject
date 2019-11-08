@extends('main')

@section('content')

<div class="container-fluid user-profile">
    <div class="row profile-main">
        <div class="profile-header col-md-12">
            <h1 class="profile purple bold">My profile</h1>
            <div class="hidden-xs col-sm-12 col-md-12 col-lg-12 user-profile-nav">
                <nav>
                    <ul class="nav nav-tabs">
                        <li role="presentation" class="active"><a href="user">About Me</a></li>
                        <li role="presentation"><a href="account">Account Settings</a></li>
                        <li role="presentation"><a href="saved_searches">Saved Searches & Alerts</a></li>
                    </ul>
                </nav>
            </div>

            <div class="hidden-sm hidden-md hidden-lg user-profile-nav-mobile">
                <button type="button" class="user-profile-menu btn-block bold" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    My Profile Menu<span><i style="margin-left: 10px"  class="fas fa-angle-down " ></i></span>
                </button>
                <ul class="dropdown-menu user-profile-dropdown">
                    <li role="presentation" class="active"><a href="user">About Me</a></li>
                    <li role="presentation"><a href="account">Account Settings</a></li>
                    <li role="presentation"><a href="saved_searches">Saved Searches & Alerts</a></li>
                </ul>
            </div>
        </div>

        <form action="{{route('user_update')}}" method="POST" class="col-md-12 pl-0">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="fieldset">
                <div class="col-md-12 fieldset-title">
                    <span class="text-uppercase bold">What is your name?</span>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                    <label class="field-label">First Name</label>
                    <input type="text" class="bold field-input" name="first_name" value="{{$user->first_name}}">
                    @if ($errors->has('first_name'))
                        <span class="invalid-feedback red" role="alert">
                            <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class=" col-xs-12 col-sm-12 col-md-6 form-group">
                    <label class="field-label">Last Name</label>
                    <input type="text" class="bold field-input" name="last_name" value="{{$user->last_name}}">
                    @if ($errors->has('last_name'))
                        <span class="invalid-feedback red" role="alert">
                            <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="fieldset">
                <div class="col-md-12 fieldset-title">
                    <span class="text-uppercase bold">How can you be reached?</span>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                    <label class="field-label">Phone number</label>
                    <input type="number" class="bold field-input" name="phone_number" value="{{ old('phone_number') }}">
                    @if ($errors->has('phone_number'))
                        <span class="invalid-feedback red" role="alert">
                            <strong>{{ $errors->first('phone_number') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="fieldset">
                <div class="col-md-12 fieldset-title">
                    <span class="text-uppercase bold">Where do you live?</span>
                </div>
                <div class="col-md-12 pl-0">
                    <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                        <label class="select-label">Country(required)</label>
                        <select class="select-select purple bold" name="country">
                            <option selected value="{{$user->country->id}}">{{$user->country->name}}</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}">{{$country->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                    <label class="field-label">Street address</label>
                    <input type="text" class="bold field-input" name="street_address" value="{{ old('street_address') }}">
                    @if ($errors->has('street_address'))
                        <span class="invalid-feedback red" role="alert">
                            <strong>{{ $errors->first('street_address') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                    <label class="field-label">Street address (continued)</label>
                    <input type="text" class="bold field-input" name="street_address_continued" value="{{ old('street_address_continued') }}">
                    @if ($errors->has('street_address_continued'))
                        <span class="invalid-feedback red" role="alert">
                            <strong>{{ $errors->first('street_address_continued') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-12 pl-0 pr-0">
                    <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                        <label class="field-label">City/Town</label>
                        <input type="text" class="bold field-input" name="city" value="{{ old('city') }}">
                        @if ($errors->has('city'))
                            <span class="invalid-feedback red" role="alert">
                                <strong>{{ $errors->first('city') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-12 pl-0 pr-0">
                    <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                        <label class="field-label">ZIP code</label>
                        <input type="text" class="bold field-input" name="postal_code" value="{{$user->postal_code}}">
                        @if ($errors->has('postal_code'))
                            <span class="invalid-feedback red" role="alert">
                                <strong>{{ $errors->first('postal_code') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="fieldset">
                <div class="col-md-12 fieldset-title">
                    <span class="text-uppercase bold">Your current pets</span>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 pl-0">
                    <a href="#section2">
                        <button id="Mybtn" type="button" class="btn btn-block text-center white bold add-pet-btn" id="upload">ADD A PET</button>
                    </a>
                </div>
            </div>
            <div class="fieldset">
                <div class="col-xs-12 col-sm-6 col-md-6 pl-0">
                    <button type="submit" class=" btn btn-block text-center white bold user-update-btn">UPDATE PROFILE</button>
                </div>
            </div>
            @csrf
        </form>

        <form id="MyForm" action="{{route('pet_save')}}" method="POST" enctype="multipart/form-data" class="myform col-md-12 pl-0">
            <div class="fieldset">
                <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                    <label class="field-label">Pet Name</label>
                    <input type="text" class="bold field-input" name="name" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <span class="invalid-feedback red" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class=" col-xs-12 col-sm-12 col-md-6 form-group">
                    <label class="select-label">Type</label>
                    <select class="select-select purple bold" name="type">
                        <option value="">Choose...</option>
                        @foreach ($types as $value)
                            <option value="{{$value->id}}" {{(old('value')==$value->id)? 'selected':''}}>{{$value->type}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('type'))
                        <span class="invalid-feedback red" role="alert">
                            <strong>{{ $errors->first('type') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="fieldset">
                <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                    <label class="select-label">Location</label>
                    <select class="select-select purple bold" name="country">
                        <option value="">Choose a location</option>
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
            </div>
            <div class="fieldset">
                <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                    <label class="field-label">Image</label>
                    <div class="input-group input-file">
                        <div class="form-control uploadPhotos ph">
                            <p>You can upload your photos to our website by clicking here <span class="glyphicon glyphicon-arrow-right"></span><br>
                                    It supports images of <b>JPEG</b> format.</p>
                        </div>
                        <span class="input-group-addon">
                            <a class='btn bg-purple' href='javascript:;'>
                                <input class="uploadimage" type="file" name="image[]" multiple onchange="$(this).parent().parent().parent().find('.form-control').html($(this).val());">
                            </a>
                        </span>
                    </div>
                    @if ($errors->has('image'))
                        <span class="invalid-feedback red" role="alert">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="fieldset">
                <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                    <label class="field-label">Short Description</label>
                    <input type="text" class="bold field-input" name="short_description" value="{{ old('short_description') }}"">
                    @if ($errors->has('short_description'))
                        <span class="invalid-feedback red" role="alert">
                            <strong>{{ $errors->first('short_description') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="fieldset">
                <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                    <label class="field-label">Characteristics</label>
                    <input type="text" class="bold field-input" name="characteristics" value="{{ old('characteristics') }}">
                    @if ($errors->has('characteristics'))
                        <span class="invalid-feedback red" role="alert">
                            <strong>{{ $errors->first('characteristics') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                    <label class="select-label">Coat Length</label>
                    <select class="select-select purple bold" name="coat">
                        <option value="">Choose...</option>
                        @foreach($coats as $coat)
                            <option value="{{$coat->id}}" {{(old('coat')==$coat->id)? 'selected':''}}>{{$coat->coat_length}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('coat'))
                        <span class="invalid-feedback red" role="alert">
                            <strong>{{ $errors->first('coat') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="fieldset">
                <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                    <label class="select-label">House trained</label>
                    <select class="select-select purple bold" name="trained">
                        <option value="">Choose...</option>
                        @foreach($traineds as $train)
                            <option value="{{$train->id}}" {{(old('train')==$train->id)? 'selected':''}}>{{$train->trained}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('trained'))
                        <span class="invalid-feedback red" role="alert">
                            <strong>{{ $errors->first('trained') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                    <label class="field-label">Good in home with</label>
                    <input type="text" class="bold field-input" name="good_with" value="{{ old('good_with') }}">
                    @if ($errors->has('good_with'))
                        <span class="invalid-feedback red" role="alert">
                            <strong>{{ $errors->first('good_with') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="fieldset">
                <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                    <label class="select-label">Size</label>
                    <select class="select-select purple bold" name="size">
                        <option value="">Choose...</option>
                        @foreach($sizes as $value)
                            <option value="{{$value->id}}" {{(old('value')==$value->id)? 'selected':''}}>{{$value->size}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('size'))
                        <span class="invalid-feedback red" role="alert">
                            <strong>{{ $errors->first('size') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                    <label class="select-label">Gender</label>
                    <select class="select-select purple bold" name="gender">
                        <option value="">Choose...</option>
                        @foreach($genders as $value)
                            <option value="{{$value->id}}" {{(old('value')==$value->id)? 'selected':''}}>{{$value->gender}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('gender'))
                        <span class="invalid-feedback red" role="alert">
                            <strong>{{ $errors->first('gender') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="fieldset">
                <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                    <label class="field-label">Long description</label>
                    <textarea name="long_description" rows="5" class="bold field-input"></textarea>
                    @if ($errors->has('long_description'))
                        <span class="invalid-feedback red" role="alert">
                            <strong>{{ $errors->first('long_description') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="fieldset">
                <div class="col-md-12 pl-0">
                    <button id="Mybtn" type="submit" class="btn btn-block text-center white bold add-pet-btn">ADD A PET</button>
                </div>
            </div>
            @csrf
        </form>

        <div class="col-md-12 text-center fieldset-title">
            <p class="bold">You may <a href="{{ route('homepage') }}">search our database</a> of thousands of pets looking for forever homes.</p>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row added-pet">
        <div class="col-md-12 added-pet-main">
            <h2 class="text-center purple bold">Your Pets</h2>

        @foreach($pet->chunk(4) as $items)
            <div class="row cards bg-grey">
                @foreach ($items as $value)
                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 petCard first-one">
                        <div class="petCard first-one">
                            <a href="{{URL::to('/pet_profile')}}/{{$value->name}}" target="_blank">
                                <div class="petCard-media">
                                    @foreach ($images as $image)
                                        @if ($image->pet_id === $value->id)
                                            <img class="petCard-media-img" src="{{url($image->image)}}">
                                        @endif
                                    @endforeach
                                </div>
                                <div class="petCard-body">
                                    <div class="petCard-body-details">
                                        <span class="purple bold" style="letter-spacing:1px">{{$value->name}}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="delete-pet">
                            <button class="btn center-block"><i class="fas fa-trash-alt fa-2x"></i><a href="{{URL::to('/delete/pet')}}/{{$value->id}}"> Delete {{$value->name}}</a></button>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
        </div>
    </div>
</div>

@endsection
