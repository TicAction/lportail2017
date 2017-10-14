@extends('layouts.app')
@section('content')

    <div class="col-md-6">
        {!! Form::open(['action'=>'StudentsController@store','method'=>'POST','class'=>'form-horizontal']) !!}
        <div class="form-group">
            {!! Form::label('firstname',"Prénom de l'enfant") !!}
            {!! Form::text('firstname','',['class'=>'form-control','placeholder'=>'prénom']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('lastname',"Nom de famille de l'enfant") !!}
            {!! Form::text('lastname','',['class'=>'form-control','placeholder'=>'nom de famille']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('birthday',"Anniversaire de l'enfant") !!}
            {!! Form::text('birthday','',['class'=>'form-control','id'=>'datepicker','placeholder'=>'Date de fêtes']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('group_id',"Groupe") !!}
            {!! Form::select('group_id',$group,null,['class'=>'form-control','id'=>'datepicker']) !!}

        </div>




    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('service',"Services") !!}
            {!! Form::select('service[]',$service,null,['id' => 'service','class'=>'form-control','multiple']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('academy',"Situation académique") !!}
            {!! Form::select('academy[]',$academy,null,['id' => 'academy','class'=>'form-control','multiple']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('special',"Conditions particulières") !!}
            {!! Form::select('special[]',$special,null,['id' => 'special','class'=>'form-control','multiple']) !!}
        </div>


        {!! Form::submit('Soumettre les informations',['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>

    <hr>
    <table class="table">
        <tr>
            <th>Nom de l'enfant</th>

            <th>Anniversaire</th>
            <th>Age</th>
            <th>Action</th>
        </tr>
        @foreach(Auth::user()->students as $student)
            <tr>
                <td><a href="{{route('student.show',$student->id)}}">{{$student->fullname }}</a></td>

                <td> {{$student->birthday->format('d/m/Y')}}</td>

                <td>{{$student->age}} ans</td>
                <td>
                    <a href="{{route('student.edit',$student->id)}}">
                        <button class="btn btn-info btn-xs">Modifier la fiche</button>
                    </a>

                    {!! Form::open(['action' => ['StudentsController@destroy', $student->id],'method'=>'DELETE','style' => 'display:inline' ]) !!}

                    {!! Form::submit('Effacer', ['class' => 'btn btn-danger btn-xs']) !!}

                    {!! Form::close() !!}


                </td>
            </tr>
        @endforeach
    </table>

@endsection
