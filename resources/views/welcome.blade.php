<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Cashbox - Kelola Keuangan Anda dengan Mudah</title>
</head>

<body class="">
    <header class="maxh">
        <nav class="border border-blue-700 flex px-5 py-6">
            <img id="header-logo" class="border border-blue-700" src="" alt="Cashbox Logo Image">
            <ul class="border border-blue-700 flex flex-1 justify-center gap-5">
                <li class="border border-blue-700">About</li>
                <li class="border border-blue-700">Feature</li>
                <li class="border border-blue-700">Blog</li>
                <li class="border border-blue-700">Pricing</li> 
                <li class="border border-blue-700">Support</li>
            </ul>
            <div id="cta-buttons" class="border border-blue-700 flex gap-2">
                <a class="w-32 border border-blue-700" href="">Sign up</a>
                <a class="w-32 border border-blue-700" href="">Sign in</a>
            </div>
        </nav>
    </header>
    <main>

    </main>
</body>
</html>
