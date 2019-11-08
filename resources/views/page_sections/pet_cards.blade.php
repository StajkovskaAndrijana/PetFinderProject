<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 cards-title text-center">
             <h1 class="purple">Pets waiting for adoption</h1>
        </div>
    </div>

    <div class="row cards text-center ">
        @foreach ($pets as $pet)
        <div class="col-xs-2 col-sm-4 col-md-2 col-lg-2 petCard first-one">
            <div class="petCard first-one">
                <a href="{{URL::to('/pet_profile')}}/{{$pet->name}}" target="_blank">
                    <div class="petCard-media">
                        @foreach ($images_pet as $image)
                            @if ($image->pet_id === $pet->id)
                                <img class="petCard-media-img" src="{{url($image->image)}}">
                            @endif
                        @endforeach
                    </div>
                    <div class="petCard-body">
                        <div class="petCard-body-details">
                            <span class="purple bold" style="letter-spacing:1px">{{$pet->name}}</span>
                        </div>
                    </div>
                </a>
                <div class="petCard-overlay">
                    <a href="{{URL::to('/pet_profile')}}/{{$pet->name}}" target="_blank">
                        <div class="petCard-overlay-media">
                            <button class="circle-for-click-open circle-for-click-open-img "></button>
                            <div class="petCard-card-body-hover circle-img text-center">
                                @foreach ($images_pet as $image)
                                    @if ($image->pet_id === $pet->id)
                                        <img class="img-circle responsive" src="{{url($image->image)}}">
                                    @endif
                                @endforeach
                                <div class="circle-img-text purple">
                                    <h5 class="bold">{{$pet->name}}</h5>
                                    <ul style="list-style:none; padding-inline-start: 0px;">
                                        <li>{{$pet->type->type}}</li>
                                        <li>
                                            <ul style="list-style:none; padding-inline-start: 0px;">
                                                <li>{{$pet->size->size}} <span class="dot">&#8226</span> {{$pet->gender->gender}}</li>
                                            </ul>
                                        </li>
                                        <li>{{$pet->country->name}}</li>
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
                <a href="{{URL::to('/pet_profile')}}/{{$pet->name}}" class="pet-link">
                    <div class="petCard-second-media">
                        <button class="circle-for-click-close"><i class="fas fa-times"></i></button>
                        <div class="petCard-second-body circle-img text-center">
                            @foreach ($images_pet as $image)
                                @if ($image->pet_id === $pet->id)
                                    <img class="img-circle responsive" src="{{url($image->image)}}">
                                @endif
                            @endforeach
                            <div class="circle-img-text white">
                                <h5 class="bold">Share {{$pet->name}}</h5>
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

        <div class="col-xs-2 col-sm-4 col-md-2 col-lg-2">
            <div class="actionCard">
                <div class="actionCard-overlay">
                    <a class="actionCard-overlay" href="{{ route('search')}}" target="_blank"></a>
                </div>
                <div class="actionCard-body text-center white">
                    <div class="actionCard-body-icon text-center">
                        <i class="fas fa-paw"></i>
                    </div>
                    <p>{{$count}} more pets <br> available</p>
                </div>
                <div class="actionCard-footer white">
                    <div class="actionCard-footer-cta">
                        <span class="text-uppercase"><strong>Meet them</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
