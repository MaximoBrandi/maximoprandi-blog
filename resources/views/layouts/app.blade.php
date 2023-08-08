<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." />

    <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}" />
    <meta property="og:site_name" content="Maximo Prandi Blog" />

    @if (isset($post))
        <meta property='og:title' content='{{$post->title}}'/>
        <meta property='og:image' content='https://blog.maximoprandi.tech/assets/img/logo.png'/>
        <meta property='og:description' content='{{$post->subtitle}}'/>
        <meta property='og:url' content='{{Request::url()}}' />
    @else
        <meta property="og:title" content="Maximo Prandi Blog" />
        <meta property="og:image" content="https://blog.maximoprandi.tech/assets/img/logo.png" />
        <meta property="og:url" content="https://blog.maximoprandi.tech/" />
    @endif



    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@tailwindmade" />

    <link rel="canonical" href="https://atlas.tailwindmade.com/" />
    <link rel="icon" type="image/png" href="/assets/img/favicon.png" />
    <link crossorigin="crossorigin" href="https://fonts.gstatic.com" rel="preconnect" />
    <link as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="preload" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
    <link crossorigin="anonymous" href="/assets/styles/main.min.css" media="screen" rel="stylesheet" />
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.5.0/styles/atom-one-dark.min.css" />

    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.5.0/highlight.min.js"></script>

    <script>
        hljs.initHighlightingOnLoad();
    </script>

    <!--Alpine Js V3-->
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body x-data="global()" x-init="themeInit()"
    :class="isMobileMenuOpen ? 'max-h-screen overflow-hidden relative' : ''" class="dark:bg-primary">
    <div id="app">
        <nav>
            <div class="container mx-auto">
                <div class="flex items-center justify-between pt-6 lg:pt-10">
                    <a href="/" class="flex items-center">
                        <span href="/" class="mr-2">
                            <img src="/assets/img/logo.png" height="=50px" width="50px" alt="logo" />
                        </span>
                        <p class="hidden font-body text-2xl font-bold text-primary dark:text-white lg:block">
                            M&P
                        </p>
                    </a>
                    <div class="flex items-center lg:hidden">
                        <i class="bx mr-8 cursor-pointer text-3xl text-primary dark:text-white" @click="themeSwitch()"
                            :class="isDarkMode ? 'bxs-sun' : 'bxs-moon'"></i>
                    </div>
                    <div class="hidden lg:block">
                        <ul class="flex items-center">
                            <li>
                                <i class="bx cursor-pointer text-3xl text-primary dark:text-white"
                                    @click="themeSwitch()" :class="isDarkMode ? 'bxs-sun' : 'bxs-moon'"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <div class="container mx-auto">
            <div
                class="flex flex-col items-center justify-between border-t border-grey-lighter py-10 sm:flex-row sm:py-12">
                <div class="mr-auto flex flex-col items-center sm:flex-row">
                    <a href="/" class="mr-auto sm:mr-6">
                        <img src="/assets/img/logo.png" height="=50px" width="50px" alt="logo" />
                    </a>
                    <p class="pt-5 font-body font-light text-primary dark:text-white sm:pt-0">
                        2023 <a class="text-lg font-semibold hover:text-green transition-colors"
                            href="https://maximoprandi.tech">M&P</a>
                    </p>
                </div>
                <div class="mr-auto flex items-center pt-5 sm:mr-0 sm:pt-0">

                    <a href="https://github.com/MaximoBrandi " target="_blank">
                        <i
                            class="text-4xl text-primary dark:text-white pl-5 hover:text-secondary dark:hover:text-secondary transition-colors bx bxl-github"></i>
                    </a>

                    <a href="https://www.linkedin.com/in/maximo-prandi/" target="_blank">
                        <i
                            class="text-4xl text-primary dark:text-white pl-5 hover:text-secondary dark:hover:text-secondary transition-colors bx bxl-linkedin"></i>
                    </a>

                </div>
            </div>
        </div>
    </div>
</body>
<script src="/assets/js/main.js"></script>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v17.0"
    nonce="MrNV4Zox"></script>

</html>
