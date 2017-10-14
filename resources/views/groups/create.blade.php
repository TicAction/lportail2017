@extends('layouts.app')
@section('content')

    <h1>Créer un nouveau groupe</h1>
    </hr>
    {!! Form::open(['action'=>'GroupsController@store','method'=>'POST','class'=>'form-horizontal']) !!}
    <div class="form-group">
        {!! Form::label('group_name',"Nom du groupe") !!}
        {!! Form::text('group_name','',['class'=>'form-control','placeholder'=>'Nom du groupe']) !!}
    </div>


    {!! Form::submit('Soumettre les informations',['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}
@endsection