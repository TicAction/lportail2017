@extends('layouts.app')
@section('content')
    @foreach($group->users as $user)

    @if(Auth::user()->id == $user->id)

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                Modifier le nom du groupe
            </h3>
        </div>
        <div class="panel-body">
            <div class="col-md-12">
                {!! Form::model($group,['route'=>['group.update',$group->id],'class'=>'form-horizontal']) !!}
                {!! Form::hidden('_method','PUT') !!}

                <div class="form-group">
                    {!! Form::label('group_name',"Nom du groupe") !!}
                    {!! Form::text('group_name',$group->group_name,['class'=>'form-control','placeholder'=>'Nom du groupe']) !!}
                </div>


                {!! Form::submit('Somettre les informations',['class'=>'btn btn-primary']) !!}

                {!! Form::close() !!}
            </div>

        </div>
    </div>

   @else
        <h3 class="alert alert-danger text-center text-uppercase">Vous n'êtes pas autorisé de voir cette page</h3>
    @endif
  @endforeach
@endsection