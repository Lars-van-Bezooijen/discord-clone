<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? "Discord" }}</title>

     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.bunny.net">
     <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- All -->
    <div id="fullPage" class="h-screen w-screen flex text-white">
        @yield('content')
    </div>
    
</body>
</html>
