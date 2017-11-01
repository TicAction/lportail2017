@extends('layouts.app')
@section('content')

    @foreach($student->users as $user)

        @if($user->id == Auth::user()->id )
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Informations personnelles</h3>
                </div>
                <div class="panel-body">

                    <div class="col-md-6">


                        {!! Form::model($student,['route'=>['student.update',$student->id],'class'=>'form-horizontal']) !!}
                        {!! Form::hidden('_method','PUT') !!}


                        <div class="form-group">
                            {!! Form::label('firstname',"Prénom de l'enfant") !!}
                            {!! Form::text('firstname',$student->firstname,['class'=>'form-control','placeholder'=>'prénom']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('lastname',"Nom de famille de l'enfant") !!}
                            {!! Form::text('lastname',$student->lastname,['class'=>'form-control','placeholder'=>'nom de famille']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('birthday',"Anniversaire de l'enfant") !!}
                            {!! Form::text('birthday',$student->birthday->format('Y-m-d'),['class'=>'form-control','id'=>'datepicker','placeholder'=>'Date de fêtes']) !!}
                        </div>

                        <div class="form-group">
                            {{--{!! Form::label('group_id',"Groupe") !!}--}}

                            {!! Form::hidden('group_id',$student->groups,['class'=>'form-control','id'=>'datepicker','placeholder'=>'Vous devez créer un groupe']) !!}

                        </div>


                            {!! Form::submit('Modifier',['class'=>'btn btn-primary']) !!}
                    </div>


                    <div class="col-md-6">


                        <div class="form-group">
                            {!! Form::label('service_list',"Services") !!}
                            {!! Form::select('service_list[]',$service,null,['id' => 'service','class'=>'form-control','multiple']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('academy_list',"Situation académique") !!}
                            {!! Form::select('academy_list[]',$academy,null,['id' => 'academy','class'=>'form-control','multiple']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('special_list',"Conditions particulières") !!}
                            {!! Form::select('special_list[]',$special,null,['id' => 'special','class'=>'form-control','multiple']) !!}
                        </div>


                        {!! Form::close() !!}
                    </div>
                </div>
            </div>


        @else
            <h3>Vous n'êtes pas autorisé à accéder à cette page</h3>

        @endif

    @endforeach
@endsection