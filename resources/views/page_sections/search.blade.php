@extends('main')

@section('content')

    @include('_partials.search_filter')

<div class="container-fluid">
    @foreach($pets->chunk(5) as $items)
        <div class="row cards">
            @foreach($items as $value)
                <div class="col-xs-2 col-sm-4 col-md-2 col-lg-2 petCard first-one">
                    <div class="petCard first-one">
                        <a href="{{URL::to('/pet_profile')}}/{{$value->name}}">
                            <div class="petCard-media">
                                @foreach ($images_pet as $image)
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
                        <div class="petCard-overlay">
                            <a href="{{URL::to('/pet_profile')}}/{{$value->name}}">
                                <div class="petCard-overlay-media">
                                    <button class="circle-for-click-open circle-for-click-open-img "></button>
                                    <div class="petCard-card-body-hover circle-img text-center">
                                        @foreach ($images_pet as $image)
                                            @if ($image->pet_id === $value->id)
                                                <img class="img-circle responsive" src="{{url($image->image)}}">
                                            @endif
                                        @endforeach
                                        <div class="circle-img-text purple">
                                            <h5 class="bold">{{$value->name}}</h5>
                                            <ul style="list-style:none; padding-inline-start: 0px;">
                                                <li>{{$value->type->type}}</li>
                                                <li>
                                                    <ul style="list-style:none; padding-inline-start: 0px;">
                                                        <li>{{$value->size->size}} <span class="dot">&#8226</span> {{$value->gender->gender}}</li>
                                                    </ul>
                                                </li>
                                                <li>{{$value->country->name}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-2 col-sm-4 col-md-2 col-lg-2 second-one">
                    <div class="petCard bg-purple">
                        <a href="{{URL::to('/pet_profile')}}/{{$value->name}}" class="pet-link">
                            <div class="petCard-second-media">
                                <button class="circle-for-click-close"><i class="fas fa-times"></i></button>
                                <div class="petCard-second-body circle-img text-center">
                                    @foreach ($images_pet as $image)
                                        @if ($image->pet_id === $value->id)
                                            <img class="img-circle responsive" src="{{url($image->image)}}">
                                        @endif
                                    @endforeach
                                    <div class="circle-img-text white">
                                        <h5 class="bold">Share {{$value->name}}</h5>
                                        <div class="social-links pading-margin color-white">
                                            <span class="social-links-icon social-link-selected"><i
                                                                class="fab fa-facebook-f icon-social"></i></span>
                                            <span class="social-links-icon"><i
                                                                    class="fab fa-twitter icon-social"></i></span>
                                            <span class="social-links-icon"><i
                                                                    class="fab fa-pinterest-p icon-social"></i></span>
                                            <span class="social-links-icon"><i
                                                                    class="fas fa-envelope icon-social"></i></span>
                                            <span class="social-links-icon"><i
                                                                    class="fas fa-link icon-social"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>

@endsection

