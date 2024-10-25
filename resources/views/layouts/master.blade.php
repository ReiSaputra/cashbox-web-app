<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield("title")</title>
</head>
<body>
    {{-- Apply Header --}}
    @yield("header")

    {{-- Apply Grid --}}
    <section class="grid grid-cols-[1.5fr_5fr_2fr]">
        <div class="border border-slate-500 px-6 py-3">
            <div class="border border-cyan-800">
                <p>Savings</p>
                <ul id="aside-savings" class="">
                    <li class="border">Savings a</li>
                    <li class="border">Savings b</li>
                    <li class="border">Savings c</li>
                </ul>
            </div>
            {{-- <div class="border border-cyan-800">
                <p>Savings</p>
                <ul id="aside-savings" class="">
                    <li class="border">Savings a</li>
                    <li class="border">Savings b</li>
                    <li class="border">Savings c</li>
                </ul>
            </div>
            <div class="border border-cyan-800">
                <p>Savings</p>
                <ul id="aside-savings" class="">
                    <li class="border">Savings a</li>
                    <li class="border">Savings b</li>
                    <li class="border">Savings c</li>
                </ul>
            </div> --}}
        </div>
        <div class="border border-slate-500 px-6 py-3">
            <p class="border border-cyan-800">Dashboard / Savings</p>
            <h3 class="text-xl"><strong>Saving Box</strong></h3>
            <div id="tabs-savings" class="grid grid-cols-2">
                <div class="border border-cyan-500">a</div>
                <div class="border border-cyan-500">b</div>
            </div>
        </div> 
        <div class="border border-slate-500">
            
        </div>
        @yield("main")
        @yield("aside")
    </section>

    {{-- Apply Footer --}}
    @yield("footer")
</body>
</html>