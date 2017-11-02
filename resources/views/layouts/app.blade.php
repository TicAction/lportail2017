@include('layouts.partials.header')

<body>
@include('layouts.partials.navbar')

@if (Auth::guest())

    @yield('content')

@else

    <div class="container-fluid">

        @include('errors.messages')
        <div class="text-center">
            @include('errors.form')
        </div>
        <div class="col-md-3">

            @include('partials.sidebar')


        </div>
        <div class="col-md-9 ">

            @yield('content')

        </div>

    </div>

@endif



<!-- Scripts -->

@include("layouts.partials.footer")

</body>
</html>