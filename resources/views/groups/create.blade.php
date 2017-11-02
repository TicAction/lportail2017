@extends('layouts.app')
@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">
            Créer un nouveau groupe
        </h3>
    </div>
    <div class="panel-body">
        <div class="col-md-12">
            {!! Form::open(['action'=>'GroupsController@store','method'=>'POST','class'=>'form-horizontal']) !!}
            <div class="form-group">
                {!! Form::label('group_name',"Nom du groupe") !!}
                {!! Form::text('group_name','',['class'=>'form-control','placeholder'=>'Nom du groupe']) !!}
            </div>


            {!! Form::submit('Soumettre les informations',['class'=>'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>




    </div>
</div>


@endsection