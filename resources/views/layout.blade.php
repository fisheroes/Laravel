<html>
    <head>
        <title>simpleCRUD - @yield('title')</title>
        <link rel="stylesheet" href="{{ secure_asset(asset('css/app.css')) }}">
        <link rel="stylesheet" href="{{ secure_asset(asset('css/all.css')) }}">
    </head>
    <body>
        <div class="container" style="text-align: center">
            <br><h2 class="text-primary"><strong>simpleCRUD</strong></h2><br>
            @section('content')
                Writable form
            @show
        </div>
        <script type="text/javascript" src="{{ secure_asset(asset('js/app.js')) }}"></script>
        <script type="text/javascript" src="{{ secure_asset(asset('js/all.js')) }}"></script>
        <script>
            $(document).ready(function() {
                /////
                var email = document.getElementById("email");
                
                email.addEventListener("invalid", function (event) {
                    var message = this.value + 'Email Tidak Boleh Kosong !';
                    email.setCustomValidity(message);
                });

                email.addEventListener("input", function (event) {
                    if (email.validity.typeMismatch){
                        email.setCustomValidity("Format Email salah !");
                    } else {
                        email.setCustomValidity("");
                    }
                });
                
                
                /////
            });
        </script>
    </body>
</html>