@extends('layouts.app')
@section('content')

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Ajouter une école</h3>
        </div>
        <div class="panel-body">
            <div class="col-md-12">
                {!! Form::open(['action'=>'SchoolsController@store','class'=>'form-horizontal']) !!}
                <div class="form-group">
                    {!! Form::label('school_name',"Nom de l'école") !!}
                    {!! Form::text('school_name','',['class'=>'form-control','placeholder'=>"Nom de l'école"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('school_email',"Adresse courriel") !!}
                    {!! Form::text('school_email','',['class'=>'form-control','placeholder'=>'ecole@ecole.com']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('school_phone',"Numéro de téléphone") !!}
                    {!! Form::text('school_phone','',['class'=>'form-control','placeholder'=>'(xxx)xxx-xxxx']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('school_adress',"Adresse de l'établissement") !!}
                    {!! Form::text('school_adress','',['class'=>'form-control','placeholder'=>'Adresse compléte']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('schoolboard_id',"Commission scolaire") !!}

                    {!! Form::select('schoolboard_id',$schoolboards,'',['class'=>'form-control','id'=>'service','multiple']) !!}

                </div>


                {!! Form::submit('Soumettre',['class'=>'btn btn-primary btn-block']) !!}

            </div>



        </div>
    </div>




@endsection
