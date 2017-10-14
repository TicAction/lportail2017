@extends('layouts.app')
@section('content')
    {!! Form::open(['action'=>'ProfilsController@store','method'=>'POST','class'=>'form-horizontal']) !!}
    <div class="form-group">
        {!! Form::label('special',"Conditions particulières") !!}
        {!! Form::select('special',$group,null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('french',"Situation académique français") !!}
        {!! Form::select('french',$group,null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('math',"Situation académique mathématique") !!}
        {!! Form::select('math',$group,null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('seervice',"Services") !!}
        {!! Form::select('service',$group,null,['class'=>'form-control']) !!}
    </div>

    {!! Form::submit('Soumettre les informations',['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}



@endsection