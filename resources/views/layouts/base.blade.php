<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Shibaji Debnath" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        {{-- <meta http-equiv="x-pjax-version" content="{{
            URL::asset( $assetLink . '/css/bootstrap.min.css')
            .URL::asset( $assetLink . '/css/bootstrap-dark.min.css')
            .URL::asset( $assetLink . '/css/jquery-ui.min.css')
            .URL::asset( $assetLink . '/css/icons.min.css')
            .URL::asset( $assetLink . '/css/metisMenu.min.css')
            .URL::asset( $assetLink . '/css/app.min.css')
            .URL::asset( $assetLink . '/css/app-dark.min.css')
            .URL::asset( $assetLink . '/js/jquery.min.js')
            .URL::asset( $assetLink . '/js/jquery-ui.min.js')
            .URL::asset( $assetLink . '/js/bootstrap.bundle.min.js')
            .URL::asset( $assetLink . '/js/metismenu.min.js')
            .URL::asset( $assetLink . '/js/waves.js')
            .URL::asset( $assetLink . '/js/feather.min.js')
            .URL::asset( $assetLink . '/js/jquery.slimscroll.min.js')
            .URL::asset( $assetLink . '/js/js.cookie.min.js')
            .URL::asset( $assetLink . '/js/js.osColorMode.js')
            .URL::asset( $assetLink . '/plugins/apexcharts/apexcharts.min.js')
            .URL::asset( $assetLink . '/plugins/datatables/dataTables.bootstrap4.min.css')
            .URL::asset( $assetLink . '/plugins/datatables/buttons.bootstrap4.min.css')
            .URL::asset( $assetLink . '/plugins/footable/css/footable.bootstrap.css')
            .URL::asset( $assetLink . '/plugins/datatables/jquery.dataTables.min.js')
            .URL::asset( $assetLink . '/plugins/datatables/dataTables.bootstrap4.min.js')
            .URL::asset( $assetLink . '/plugins/datatables/dataTables.buttons.min.js')
            .URL::asset( $assetLink . '/plugins/datatables/buttons.bootstrap4.min.js')
            .URL::asset( $assetLink . '/plugins/datatables/jszip.min.js')
            .URL::asset( $assetLink . '/plugins/datatables/pdfmake.min.js')
            .URL::asset( $assetLink . '/plugins/datatables/vfs_fonts.js')
            .URL::asset( $assetLink . '/plugins/datatables/buttons.html5.min.js')
            .URL::asset( $assetLink . '/plugins/datatables/buttons.print.min.js')
            .URL::asset( $assetLink . '/plugins/datatables/buttons.colVis.min.js')
            }}">
            --}}

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ URL::asset( $assetLink . '/images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{ URL::asset( $assetLink . '/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset( $assetLink . '/css/jquery-ui.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset( $assetLink . '/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset( $assetLink . '/css/metisMenu.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset( $assetLink . '/css/app.css')}}" rel="stylesheet" type="text/css" />
        @yield('headerStyle')
        <link href="{{ URL::asset('css/app.css')}}" rel="stylesheet" type="text/css" />
    </head>
@section('body')
@show
    <body class="account-body">

        <!-- content -->
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
        <script src="{{ URL::asset('js/app.js') }}"></script>
    </body>

</html>
