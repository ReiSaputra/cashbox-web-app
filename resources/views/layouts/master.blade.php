<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>

<body class="h-screen border border-blue-900 overflow-y-auto">

    <section class="border border-red-600 h-full">
        {{-- Apply Header --}}
        
        {{-- Apply Grid --}}
        <section id="grid-parent-section" class="grid grid-cols-[1.5fr_5fr_2fr] grid-rows-[80px_1fr] h-full">
            @yield('header')
            @yield('aside-one')
            @yield('main')
            @yield('aside-two')
        </section>

        {{-- Apply Footer --}}
        {{-- @yield('footer') --}}
    </section>
    @vite('resources/js/dashboard/dashboard.js')
</body>

</html>
