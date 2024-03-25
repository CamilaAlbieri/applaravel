<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    
    
</head>
<body class="app sidebar-mini rtl">

    <header>
        @include('layout.header')
    </header>

    <aside>
        @include('layout.sidebar')
    </aside>

    <main>
        <div class= "app-content">
            @yield('content')
        </div>
    </main>

    <script src="{{asset('js/jquery-3.7.0.min.js')  }}"></script>
    <script src="{{asset('js/js.bootstrap.min.js')  }}"></script>
    <script src="{{asset('js/main.js')  }}"></script>
</body>
</html>