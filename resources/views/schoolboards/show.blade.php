@extends('layouts.app')
@section('content')

    <h3>{{$schoolboard->schoolboard_name}}</h3>

    <address>
        {{$schoolboard->schoolboard_city}}<br>
        {{$schoolboard->schoolboard_adress}}<br>
        {{$schoolboard->schoolboard_phone}}<br>
        {{$schoolboard->schoolboard_email}}<br>
        {{$schoolboard->schoolboard_url}}
    </address>
@endsection