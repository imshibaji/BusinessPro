<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module User</title>

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ URL::asset( $assetLink . '/images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{ URL::asset( $assetLink . '/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset( $assetLink . '/css/jquery-ui.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset( $assetLink . '/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset( $assetLink . '/css/metisMenu.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset( $assetLink . '/css/app.css')}}" rel="stylesheet" type="text/css" />

       {{-- Laravel Mix - CSS File --}}
       <link rel="stylesheet" href="{{ mix('css/user.css') }}">

    </head>
    <body>
        @yield('content')

        <!-- jQuery  -->
        <script src="{{ URL::asset( $assetLink . '/js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset( $assetLink . '/js/jquery-ui.min.js') }}"></script>
        <script src="{{ URL::asset( $assetLink . '/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ URL::asset( $assetLink . '/js/metismenu.min.js') }}"></script>
        <script src="{{ URL::asset( $assetLink . '/js/waves.js') }}"></script>
        <script src="{{ URL::asset( $assetLink . '/js/feather.min.js') }}"></script>
        <script src="{{ URL::asset( $assetLink . '/js/jquery.slimscroll.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ URL::asset( $assetLink . '/js/app.js') }}"></script>
        {{-- Laravel Mix - JS File --}}
        <script src="{{ mix('js/user.js') }}"></script>
    </body>
</html>
