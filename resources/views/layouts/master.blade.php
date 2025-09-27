<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-950 text-gray-100">
    <div class="flex min-h-screen">
        @include('includes.sidebar')
        <main class="flex-1 p-8 bg-gray-900 ml-64 overflow-y-auto h-screen">
            @yield('content')
        </main>
    </div>
</body>
</html>