<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="http://unpkg.com/turbolinks"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' integrity='sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk' crossorigin='anonymous'>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <section class="px-8 py-4 mb-6">
            <header class="container mx-auto ">

                <h1 class="items-center text-blue-800 text-xl font-bold">
                <a class="" href="/">
                    <img class="h-10 w-10 inline pb-2" src="/images/headbook.svg" alt="Headbook">
                        headbook
                    </a>
                </h1>

            </header>
        </section>

        {{ $slot }}

    </div>
    <script src="//code.jquery.com/jquery.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script>
    $('#flash-overlay-modal').modal();
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script>
</body>
</html>
