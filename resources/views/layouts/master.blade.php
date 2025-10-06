<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - SisEscolar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap');

        * {
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        body {
            font-feature-settings: 'cv11', 'ss01';
        }
    </style>
</head>

<body class="bg-zinc-950 text-zinc-300">
    <div class="flex min-h-screen">
        @include('includes.sidebar')
        <main class="flex-1 ml-64">
            @yield('content')
        </main>
    </div>
</body>

</html>
