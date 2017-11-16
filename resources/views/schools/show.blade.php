@extends('layouts.app')

@section('content')

    <h3>{{$school->school_name}} <small><a href="{{route('cs.show',$school->schoolboard->id)}}">{{$school->schoolboard->schoolboard_name}}</a></small></h3>

    <address>

        Adresse : {{$school->school_adress}}<br>
        Téléphone : {{$school->school_phone}}<br>
        Courriel : {{$school->school_email}}<br>

    </address>

@endsection
