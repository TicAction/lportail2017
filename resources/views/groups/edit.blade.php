@extends('layouts.app')
@section('content')

    <h1>Modifier le nom du groupe</h1>
    <hr>
    {!! Form::model($group,['route'=>['group.update',$group->id],'class'=>'form-horizontal']) !!}
    {!! Form::hidden('_method','PUT') !!}

    <div class="form-group">
        {!! Form::label('group_name',"Nom du groupe") !!}
        {!! Form::text('group_name',$group->group_name,['class'=>'form-control','placeholder'=>'Nom du groupe']) !!}
    </div>


    {!! Form::submit('Somettre les informations',['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}
@endsection