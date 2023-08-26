@extends('Admin/layout/base')

@section('body')
    <body class="app">
        @yield('content')

        <!-- BEGIN: JS Assets-->
        <script src="{{ asset('dist/js/app.js') }}"></script>
        <!-- END: JS Assets-->
    </body>
@endsection