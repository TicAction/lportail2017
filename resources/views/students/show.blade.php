@extends('layouts.app')

@section('content')

    @if(count($kid) > 0)
        @foreach($kid->users as $user)

            @if($user->id == Auth::user()->id )

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Page du profil de {{$kid->fullname}}</h3>
                    </div>

                    <div class="panel-body">
                        Date de naissance : {{$kid->birthday->format("d-m-Y")}}
                        <div class="row">
                            <div class="col-md-6">


                                <h3>Observations académique</h3>
                                @if($kid->academies)

                                    @foreach($kid->academies as $academy)
                                        <ul class="list-unstyled">
                                            <li>  {{$academy->name}}</li>
                                        </ul>

                                    @endforeach
                                @else
                                    Aucune donnée enregistrée
                                @endif
                            </div>
                            <div class="col-md-6">
                                <h3>Services</h3>

                                @if($kid->services)
                                    @foreach($kid->services as $service)
                                        <ul class="list-unstyled">
                                            <li>  {{$service->name}}</li>
                                        </ul>

                                    @endforeach

                                @else
                                    Aucune donnée enregistrée
                                @endif

                            </div>

                        </div>

                        <div class="text-right">
                            <a href="{{route('student.edit',$kid->id)}}" class="btn btn-info">Modifier</a>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">

                                <h3>Liste des comportements</h3>
                                @if($kid->behaviors)
                                    @foreach($kid->behaviors as $behavior)
                                        <strong>{{$behavior->observation_date->format('d/m/Y')}}</strong>

                                        <div class="well">
                                        {!! $behavior->observation_content !!}
                                        <div class="text-right">
                                            <a href="{{route('observation.edit',$behavior->id)}}" class="btn btn-info btn-xs">Modifier</a>
                                        </div>
                                        </div>

                                    @endforeach
                                @else
                                @endif
                            </div>


                        </div>

                    </div>
                </div>

            @endif
        @endforeach

    @endif

@endsection