<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <header class="py-6 px-8 mb-8" style="background: url('/images/splash.svg') 0 2px no-repeat">
                <h1>
                    <router-link to="/">
                        <img src="/images/logo.svg" alt="logo">
                    </router-link>
                </h1>
            </header>
            <div class="container px-8">
                <main class="flex">
                    <aside class="w-64 pt-8">
                        <section class="mb-10">
                            <h5 class="uppercase font-bold mb-5 text-base">The brand</h5>
                            <ul class="list-reset">
                                <li class="text-sm pb-4"><router-link class="text-black" to="/" exact>Logo</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/logo-symbol">Logo symbol</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/colors">Colors</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/typography">Typography</router-link></li>
                            </ul>
                        </section>
                        <section>
                            <h5 class="uppercase font-bold mb-5 text-base">Doodles</h5>
                            <ul class="list-reset">
                                <li class="text-sm pb-4"><router-link class="text-black" to="/mascot">Mascot</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/illustrations">Illustrations</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/loaders-animations">Loaders and Animations</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/wallpapers">Wallpapers</router-link></li>
                            </ul>
                        </section>
                    </aside>
                    <div class="primary flex-1">
                        <router-view></router-view>
                    </div>
                </main>
            </div>
            
        </div>
    </body>
    <script src="/js/app.js"></script>
</html>
