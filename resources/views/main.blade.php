<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Petfinder</title>
    <base href="{{ URL::asset('/') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ url('css/cards.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ url('css/responsive.css') }}" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>
@include('_partials.header')

@yield('content')

@include('_partials.footer')
</body>
    <script src="{{ url('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{url('js/main_jquery.js')}}"></script>
    <script src="{{url('js/pet_cards_jquery.js')}}"></script>
    <script src="{{url('js/search_pet.js')}}"></script>
</html>
