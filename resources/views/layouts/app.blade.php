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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/css/all.min.css">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css" rel="stylesheet" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"></script>
    
</head>

<body class="p-0 m-0">
    <div id="app">
        @include('partials.nav')
        <main>
            @if (Route::current()->uri() != '/')
                <nav aria-label="breadcrumb" style="background: #F7F7F7 !important;padding: 0px 40px;">
                    <ol class="breadcrumb">
                        @for($i = 0; $i <= count(Request::segments()); $i++)
                            <li class="breadcrumb-item"><a href="#">{{Str::upper(Request::segment($i))}}</a></li>
                        @endfor
                    </ol>
                </nav>
            @endif
            <x-alerta />
            @yield('content')
            {{-- <toast /> --}}
        </main>
        @unless(isset($footer))
            @include('partials.footer')
        @endunless
    </div>
</body>



</html>
