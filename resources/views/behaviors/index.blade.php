@extends('layouts.app')
@section('content')
    @foreach($observations as $observation)

        <div class="panel panel-primary">


            <div class="panel-heading">

                <h3 class="panel-title">Liste des comportements de
                    @foreach($observation->students as $student)</h3>
                <small>
                    {{$student->fullname}}
                </small>

                @endforeach
            </div>


            <div class="panel-body">
                {{$observation->observation_date->format('d-m-Y')}}
                <hr>
                {!!$observation->observation_content !!}
            </div>
            <p>
            <div class="text-right">
                <a href="{{route('observation.edit',$observation->id)}}">
                    <button class="btn btn-danger">Modifier</button>
                </a>

            </div>
            </p>


        </div>
    @endforeach

@endsection