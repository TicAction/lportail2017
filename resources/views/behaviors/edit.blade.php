@extends('layouts.app')
@section('content')

    <h3>Modifier un comportement</h3>

    <hr>


    {!! Form::model($behavior,['route'=>['observation.update',$behavior->id],'class'=>'form-horizontal']) !!}
    {!! Form::hidden('_method','PUT') !!}
    <div class="form-group">
        {!! Form::label('student',"Élève") !!}
        {!! Form::select('student[]',$students,$behavior->students,['id'=>'student','multiple','class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('observation_date',"Date de l'observation") !!}
        {!! Form::text('observation_date',$behavior->observation_date,['class'=>'form-control','id'=>'datepicker','placeholder'=>'Date de l\'observation']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('observation_content',"Écrire votre observation") !!}
        {!! Form::textarea('observation_content',$behavior->observation_content,['class'=>'form-control ckeditor','placeholder'=>'Observation']) !!}
    </div>



    {!! Form::submit('Soumettre les informations',['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}
@endsection