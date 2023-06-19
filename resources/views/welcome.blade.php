<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

</head>

<body class="antialiased">
    <div class="">
        @if (Route::has('login'))
            <div class="">
                @auth
                    <a href="{{ url('/dashboard') }}" class="">
                        Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="">


            <div class="">
                <div class="grid-2-columns">
                    <a href="https://laravel.com/docs" class="">
                        <div>


                            <h2 class="">Documentation</h2>

                            <p class="">
                                Laravel has wonderful documentation covering every aspect of the framework. Whether you
                                are a newcomer or have prior experience with Laravel, we recommend reading our
                                documentation from beginning to end.
                            </p>
                        </div>


                    </a>

                    <a href="https://laracasts.com" class="">
                        <div>


                            <h2 class="">Laracasts</h2>

                            <p class="">
                                Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript
                                development. Check them out, see for yourself, and massively level up your development
                                skills in the process.
                            </p>
                        </div>

                    </a>

                    <a href="https://laravel-news.com" class="">
                        <div>
                            <h2 class="">Laravel News</h2>

                            <p class="">
                                Laravel News is a community driven portal and newsletter aggregating all of the latest
                                and most important news in the Laravel ecosystem, including new package releases and
                                tutorials.
                            </p>
                        </div>


                    </a>

                    <div class="">
                        <div>

                            <h2 class="">Vibrant Ecosystem</h2>

                            <p class="">
                                Laravel's robust library of first-party tools and libraries, such as <a
                                    href="https://forge.laravel.com" class="">Forge</a>,
                                <a href="https://vapor.laravel.com" class="">Vapor</a>,
                                <a href="https://nova.laravel.com" class="">Nova</a>,
                                and <a href="https://envoyer.io" class="">Envoyer</a>
                                help you take your projects to the next level. Pair them with powerful open source
                                libraries like <a href="https://laravel.com/docs/billing" class="">Cashier</a>,
                                <a href="https://laravel.com/docs/dusk" class="">Dusk</a>,
                                <a href="https://laravel.com/docs/broadcasting" class="">Echo</a>,
                                <a href="https://laravel.com/docs/horizon" class="">Horizon</a>,
                                <a href="https://laravel.com/docs/sanctum" class="">Sanctum</a>,
                                <a href="https://laravel.com/docs/telescope" class="">Telescope</a>,
                                and more.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-space-between">
                <div class="">
                    <div class="">
                        <a href="https://github.com/sponsors/taylorotwell" class="">

                            Sponsor
                        </a>
                    </div>
                </div>

                <div class="">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </div>
</body>

</html>
