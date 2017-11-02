
@extends("layouts.app")


@section('content')


    @if(count($students) >0)
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Liste des élèves</h3>
            </div>
            <div class="panel-body">
                <table class="table table-hover">
                    <tr>
                        <th>Nom de l'enfant</th>

                        <th>Anniversaire</th>
                        <th>Âge</th>
                        <th>Groupe</th>

                        <th>Action</th>
                    </tr>

                    @foreach(Auth::user()->students as $student)
                        <tr>
                            <td> <a href="{{route('student.show',$student->id)}}">{{$student->fullname }}</a></td>

                            <td> {{$student->birthday->format('d/m/Y')}}</td>

                            <td>{{$student->age}} ans</td>


                            <td>{{$student->group->group_name}}</td>

                            <td>
                                <a href="{{route('student.edit',$student->id)}}"><button class="btn btn-info btn-xs">Modifier la fiche</button> </a>

                                {!! Form::open(['action' => ['StudentsController@destroy', $student->id],'method'=>'DELETE','style' => 'display:inline' ]) !!}

                                {!! Form::submit('Effacer', ['class' => 'btn btn-danger btn-xs']) !!}

                                {!! Form::close() !!}


                            </td>
                        </tr>
                    @endforeach
                </table>
                @else
                    <div class="alert alert-warning">
                        <p class="text-center text-uppercase">
                           Aucun élève enregistrer pour votre classe
                        </p>
                        <p class="text-center text-uppercase">
                           Avant vous devez créer un groupe dans la section profil de l'enseignant
                        </p>
                    </div>


                @endif
            </div>
        </div>





@endsection

