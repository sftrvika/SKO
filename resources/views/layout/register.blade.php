@extends('../layout/base')

@section('body')

<body class="register">
    @yield('content')

    <!-- BEGIN: JS Assets-->
    <script src="/dist/js/script.js"></script>
    <!-- END: JS Assets-->

    @yield('script')
</body>
@endsection