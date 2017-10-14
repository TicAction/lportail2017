<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    {{--<!-- Styles -->--}}
    {{--<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">--}}
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}">--}}
    <link href="{{asset('css/app.css')}}" rel="stylesheet">




    <script> $(document).foundation();</script>
</head>
<body>
<div class="jumbotron">
    <div class="col-md-offset-6">
        <div class="text-center">
            <h1>Portail des profs</h1>
            <div class="col-me-6">
                <a href="login"><button class=" btn btn-danger btn-lg">Je veux me connecter</button></a>

                <a href="register"><button class=" btn btn-danger btn-lg">Je veux m'enregistrer</button></a>
            </div>

        </div>
    </div>

</div>



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
