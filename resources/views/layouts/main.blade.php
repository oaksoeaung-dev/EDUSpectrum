<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{ env("APP_NAME", "Laravel") }}</title>

        @vite("resources/css/app.css")

        {{-- Fav Icon --}}
        <link rel="icon" href="{{ asset("images/logo.jpg") }}" type="image/jpg" />

        {{-- Icon --}}
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.min.css" /> --}}

        {{-- Font --}}
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

        {{-- Swiper CSS1 JS1 --}}
        <link rel="stylesheet" href="{{ asset("css/swiper-bundle.min.css") }}" />
    </head>
    <body class="bg-gray-100">
        @include("layouts.header")
        <main class="mx-auto max-w-[1920px] overflow-hidden bg-white">
            @yield("content")

            @include("layouts.footer")
        </main>
    </body>

    {{-- Scroll Reveal --}}
    <script src="{{ asset("js/scrollreveal.min.js") }}"></script>

    {{-- Swiper CSS1 JS1 --}}
    <script src="{{ asset("js/swiper-bundle.min.js") }}"></script>

    {{-- Main JS --}}
    <script src="{{ asset("js/main.js") }}"></script>
</html>
