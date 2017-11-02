@extends('layouts.app')
@section('content')

    @foreach($profils as $profil)
      {{$profil->service}}

        {{$profil->student->firstname}}
    @endforeach

@endsectiongro