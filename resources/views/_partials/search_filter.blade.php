<div class="container-fluid">
    <div class="row animalSearchHeader text-center bg-purple white">
        <div class="col-md-12 loadableContent">
            <div class="col-xs-12 col-md-2 countPetsDiv">
                <p>{{$count}} Pets</p>
            </div>
            <div class="col-xs-12 col-md-2 countPetsDiv search_pat">
                <div class="register-input select" id="search_type" >
                    <select class="register-input select" id="search_type" name="type">
                        <option>All types</option>
                        <option>Cat</option>
                        <option>Dog</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-md-2 countPetsDiv">
                <form action="">
                    <div class="form-group">
                         <input class="field-input white text-center" type="text" name="city" placeholder="Enter City">
                    </div>
                </form>
            </div>
        </div>
    </div>
 </div>

 <div class="container-fluid">
    <div class="row text-center" style="margin-left: 20px" >
        <div class="col-md-12">
            <form method="POST" action="{{route('search_pet')}}">
                @csrf
                <div class="form-group col-md-3">
                    <label class="select-label">Select Size</label>
                    <select class="select-select purple bold" id="pet_size" name="size">
                        <option value="">Choose Size</option>
                            @foreach($sizes as $value)
                                <option value="{{$value->id}}"  >{{$value->size}}</option>
                            @endforeach
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label class="select-label">Select Coat Length</label>
                    <select class="select-select purple bold"  id="pet_coat" name="coat">
                        <option value="">Choose Coat Length</option>
                        @foreach($coat__lengths as $value)
                            <option value="{{$value->id}}">{{$value->coat_length}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label class="select-label">Select Gender</label>
                    <select class="select-select purple bold" id="pet_gender" name="gender">
                        <<option value="">Choose Gender</option>
                        @foreach($genders as $value)
                            <option value="{{$value->id}}">{{$value->gender}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-2" style="margin-top: 12px">
                    <button type="submit" class="btn btn-danger center-block">Search</button>
                </div>
            </form>
        </div>
    </div>
 </div>


