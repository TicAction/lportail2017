@extends('layouts.app')
@section('content')
    @foreach($observations as $observation)
            <div class="panel panel-primary">

                    @foreach($observation->students as $student)
                <div class="panel-heading">

                    <h3 class="panel-title">Liste des comportements de {{$student->firstname}}</h3>

                </div>
                    @endforeach
                <div class="panel-body">
                    {{$observation->observation_date->format('d-m-Y')}}
                    <hr>
                    {!!$observation->observation_content !!}
                </div>


            </div>
    @endforeach

@endsection