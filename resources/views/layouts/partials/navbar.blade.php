

<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            @if(Auth::user())
            <a class="navbar-brand" href="{{ url('/eleve') }}">
                {{ config('app.name', 'Laravel') }}
            </a>




            @endif

        </div>
        @if(Auth::user())
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Élèves
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        {{--<li><a href="{{route('student.index')}}">Liste</a></li>--}}
                        <li><a href="{{route('student.create')}}">Ajouter</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profil enseignant
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('group.index')}}">Liste des groupe</a></li>
                        <li><a href="{{route('group.create')}}">Ajouter un groupe</a></li>
                        <li><a href="{{route('group.index')}}">Voir mon profil</a></li>
                        <li><a href="{{route('group.create')}}">Compléter mon profil</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Observation
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('observation.create')}}">Ajouter</a></li>
                        <li><a href="#">autres</a></li>
                        <li><a href="#">autres</a></li>
                    </ul>
                </li>

                @foreach(Auth::user()->groups as $group)


                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> {{$group->group_name}}
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        {{--<li><a href="{{route('student.index')}}">Élèves de la classe</a></li>--}}
                        <li><a href="#">Devoir de la classe</a></li>
                        <li><a href="#">Liste des comportement</a></li>
                    </ul>
                </li>
                @endforeach
            </ul>

        @endif
        <div>
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Connexion</a></li>
                    <li><a href="{{ route('register') }}">S'enregistrer</a></li>
                @else

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Déconnexion
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>


                @endif
            </ul>
        </div>
    </div>
</nav>