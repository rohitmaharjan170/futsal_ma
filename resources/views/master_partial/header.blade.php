
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title> Futsal_ma | @yeild('title') </title>    

    <!-- css  -->
    <!-- nav bar ko css -->
    <link href="{{ asset('css/app_nav.css') }}" rel="stylesheet">

    <!-- body ko css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    

    <!-- bootstrap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->

    <!-- icon pack -->
    <script src="https://kit.fontawesome.com/4925793b17.js" crossorigin="rohitmaharjan"></script>


    <!-- mobile view burger navbar -->
    <script src="{{ asset('js/app_nav.js') }}" defer></script>
    

</head>


