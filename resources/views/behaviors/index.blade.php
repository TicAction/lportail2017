@extends('layouts.app')
@section('content')
<h1>Je suis un comportement</h1>
@foreach($observations as $observation)


    @foreach($observation->students as $student)

        <h4>{{$student->firstname}}</h4>

    @endforeach
    <br>
    {{$observation->observation_content}}
    <hr>
    @endforeach

@endsection