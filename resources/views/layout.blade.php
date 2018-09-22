<html>
    <head>
        <title>simpleCRUD - @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    </head>
    <body>
        <div class="container" style="text-align: center">
            <br><h2 class="text-primary"><strong>simpleCRUD</strong></h2><br>
            @section('content')
                Writable form
            @show
        </div>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/all.js') }}"></script>
        <script>
            $(document).ready(function() {
                /////
                
                /////
            });
        </script>
    </body>
</html>