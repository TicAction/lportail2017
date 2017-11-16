<div class="navbar navbar-fixed-bottom navbar-default" style="color:white">
    <div class="container">

        @foreach(Auth::user()->schools as $school)


                    <h3>{{$school->school_name}}
                        <small>
                            <a href="{{route('cs.show',$school->schoolboard->id)}}">{{$school->schoolboard->schoolboard_name}}</a>
                        </small>
                    </h3>

                    <address>

                        Adresse : {{$school->school_adress}}<br>
                        Téléphone : {{$school->school_phone}}<br>
                        Courriel : {{$school->school_email}}<br>

                    </address>


        @endforeach

    </div>
</div>

