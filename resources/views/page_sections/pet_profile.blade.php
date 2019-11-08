@extends('main')

@section('content')

<div class="container-fluid petCarousel">
    <div id="carousel-example-generic" class="carousel slide petCarousel" data-ride="carousel">
        <div class="carousel-inner petCarousel-body text-center" role="listbox">
            @foreach ($images_pet as $key => $image)
                <div class="item{{$key == 0 ? ' active' : '' }}">
                    <img class="petCarousel-image center-block" src="{{url($image->image)}}" alt="">
                </div>
            @endforeach
        </div>

        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fas fa-chevron-left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container petProfile-main">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-7 petInfo">
            <div class="col-md-12 col-sm-12 col-xs-12  petProfileStyle">
                <h1>{{$pet->name}}</h1>
                <ul class="list list-inline black">
                    <li>{{$pet->type->type}}</li>
                    <li>{{$pet->country->name}}</li>
                </ul>
                <hr class="grey">
                <ul class="list list-inline black">
                    <li>{{$pet->gender->gender}}</li>
                    <li>{{$pet->size->size}}</li>
                </ul>
                <hr class="grey">
                <h2>About</h2>
                <h4 class="bold">Coat Length</h4>
                <p>{{$pet->coatLength->coat_length}}</p>
                <br>
                <h4 class="bold">House Trained</h4>
                <p>{{$pet->trained->trained}}</p>
                <br>
                <h4 class="bold">Short Description About {{$pet->name}}</h4>
                <p>{{$pet->short_description}}</p>
                <br>
                <h4 class="bold">Good in a home with</h4>
                <p>{{$pet->good_with}}</p>
                <br>
                <hr class="grey">
                <h2>Meet {{$pet->name}} </h2>
                <br>
                <h5> {{$pet->long_description}}</h5>
            </div>
        </div>

        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-1 askAbout bg-purple text-center">
            <div class="askAbout-body text-center">
                <a href="#ask_about_pet" class="btn bold text-uppercase"> Ask about {{$pet->name}}</a>
            </div>
            <div class="askAbout-footer">
                <button class="btn-share-pet bold text-center">
                    <i class="fas fa-share"></i>
                    <span class="text-uppercase">Share</span>
                </button>
                <button class="btn-share-pet bold text-center">
                    <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                    <span class="text-uppercase">Print</span>
                </button>
            </div>
        </div>
    </div>
</div>

<div id="ask_about_pet" class="mg-1 white container-fluid bg-purple">
    <div class="row AskAboutPet">
        <div class="col-md-2 col-sm-2 col-xs-2 col-md-offset-1">
            <img src="{{$image->image}}" class="image_dog" alt="">
        </div>
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-xs-7 col-xs-offset-2">
            <h2>Ask About {{$pet->name}}</h2>
            <ul class="desc-pet">
                <li>{{$pet->gender->gender}}</li>
                <li class="coath">{{$pet->coatLength->coat_length}}</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-sm-10 col-xs-10 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
        <hr>
        <h4><b>TO</b></h4>
        @if (Auth::user())
            <p>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</p>
        @endif
    </div>
</div>
</div>

<div class="container-fluid sendMessage bg-white">
    <div class="row SignIn">
        <div class="col-md-5 col-md-offset-1 col-sm-12 col-xs-12">
            <p class="bold">Have an account?<a href="{{route('login')}}" class="purple"> Sign in</a></p>
            <h5 class="bold">OR INQUIRE AS A GUEST</h5>
            <div class="fieldset ">
                <div class="col-xs-12 col-sm-12 col-md-6 form-group ">
                    <input type="text" class="field-input GuestForm" name="name" placeholder="First Name" value="">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                    <input type="text" class="field-input GuestForm" name="last_name" placeholder="Last name" value="">
                </div>
            </div>
            <div class="fieldset">
                <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                    <input type="email" class="field-input GuestForm" name="email" placeholder="Email" value="">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                    <input type="text" class="field-input GuestForm" name="number" placeholder="Phone number" value="">
                </div>
            </div>
            <div class="fieldset">
                <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                    <select class="select-select GuestForm " name="country">
                        <option value="">Choose a location</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}">{{$country->name}}</option>
                        @endforeach
                    </select>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                <input type="text" class="field-input GuestForm" name="postal_code" placeholder="Postal Code" value="">
            </div>
        </div>
    </div>
    <div class="col-md-5 col-sm-12 col-xs-12 mg-1">
        <form action="">
            <div class="form-group">
                <label class="bold">YOUR MESSAGE (5000 CHARACTER LIMIT)<i class="text-muted">Additional Comments for the Shelter/Rescue</i></label>
                <textarea name="" id="" cols="60" rows="10" class="form-control">I'm wondering if {{$pet->name}} is...</textarea>
                <a href=""><button class="btn form-control messageBtn">SEND MESSAGE</button></a>
            </div>
        </form>
    </div>
</div>
</div>

@include('page_sections.articles')

<div class="container-fluid bg-white dogImageBellow hidden-xs hidden-sm">
    <div class="row">
        <div class="col-md-1 ">
            <img src="{{$image->image}}" class="image_dog_bellow" alt="">
        </div>
        <div class="col-md-4">
            <h4 class="purple">{{$pet->name}}</h4>
            <ul class="list list-inline">
                <li>{{$pet->name}}</li>
                <li>{{$pet->type->type}}</li>
                <li>{{$pet->gender->gender}}</li>
            </ul>
        </div>
        <div class="col-md-2 col-md-offset-3">
            <a href=""><button class="btn btn-default messageBtn"><b class="text-uppercase">ASK ABOUT {{$pet->name}}</b></button></a>
        </div>
        <div class="col-md-2" style="margin-top:10px;">
            <a href="" class="shareBellow"><i class="fas fa-share"></i></span></a>
        </div>
    </div>
</div>

@endsection
