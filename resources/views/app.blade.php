<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <header class="py-6 mb-8">
                <h1 class="font-sans">Laracasts</h1>
            </header>
            <main class="flex">
                <aside class="w-1/5">
                    <section class="mb-8">
                        <h5 class="uppercase font-bold mb-4">The Brand</h5>
                        <ul class="list-reset">
                            <li class="text-sm pb-4"><router-link class="text-black" to="/">Home</router-link></li>
                            <li class="text-sm pb-4"><router-link class="text-black" to="/about">About</router-link></li>
                        </ul>
                    </section>
                    <section>
                        <h5 class="uppercase font-bold mb-4">Doodles</h5>
                        <ul class="list-reset">
                            <li class="text-sm pb-4"><router-link class="text-black" to="/">Home</router-link></li>
                            <li class="text-sm pb-4"><router-link class="text-black" to="/about">About</router-link></li>
                        </ul>
                    </section>
                </aside>
                <div class="primary flex-1">
                    <router-view></router-view>
                </div>
            </main>
            
        </div>
    </body>
    <script src="/js/app.js"></script>
</html>
