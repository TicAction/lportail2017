
@extends("layouts.app")

@section('content')



        <h3>Liste de mes groupes</h3>
        </hr>


        @if(count('groups') > 0)

        <table class="table">
            <tr>
                <th>Nom du groupe</th>


                <th>Enseignant(e)</th>
                <th>Action</th>
            </tr>



            @foreach(Auth::user()->groups as $group)
                <tr>
                    <td> {{$group->group_name }}</td>
                    <td>
                        @foreach($group->users as $user)
                       {{$user->name}}
                            @endforeach
                    </td>

                    <td>
                        <a href="{{route('group.edit',$group->id)}}"><button class="btn btn-primary btn-xs"> Editer le groupe</button></a>
                        <a href="{{route('group.show',$group->id)}}"><button class="btn btn-success btn-xs"> Voir la fiche</button></a>

                        {!! Form::open(['action' => ['GroupsController@destroy', $group->id],'method'=>'DELETE','style' => 'display:inline' ]) !!}

                        {!! Form::submit('Effacer', ['class' => 'btn btn-danger btn-xs']) !!}

                        {!! Form::close() !!}


                    </td>
                </tr>
            @endforeach

        </table>
        @else
            <h3>Aucun groupe inscrit</h3>
    @endif
@endsection

