
@extends("layouts.app")


@section('content')


    @if(count($schools) >0)
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Liste de mes écoles</h3>
            </div>
            <div class="panel-body">
                <table class="table table-hover">
                    <tr>
                        <th>Nom de l'école</th>

                        <th>Adresse</th>
                        <th>Téléphone</th>
                        <th>Courriel</th>
                        <th>Commission scolaire</th>
                        <th>Action</th>
                    </tr>

                    @foreach($schools as $school)
                        <tr>
                            <td> <a href="{{route('ecole.show',$school->id)}}">{{$school->school_name }}</a></td>


                            <td> {{$school->school_adress}}</td>

                            <td>{{$school->school_phone}}</td>


                            <td>{{$school->school_email}}</td>

                            <td><a href="{{route('cs.show',$school->schoolboard->id)}}">{{$school->schoolboard->schoolboard_name}}</a></td>

                            <td>
                                <a href="{{route('ecole.edit',$school->id)}}"><button class="btn btn-info btn-xs">Modifier la fiche</button> </a>

                                {!! Form::open(['action' => ['SchoolsController@destroy', $school->id],'method'=>'DELETE','style' => 'display:inline' ]) !!}

                                {!! Form::submit('Effacer', ['class' => 'btn btn-danger btn-xs']) !!}

                                {!! Form::close() !!}


                            </td>
                        </tr>
                    @endforeach
                </table>
                @else
                    <div class="alert alert-warning">

                        <p class="text-center text-uppercase">
                            Vous devez créer votre profil dans la section de l'enseignant
                        </p>
                    </div>


                @endif
            </div>
        </div>





@endsection

