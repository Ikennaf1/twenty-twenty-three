<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
        <link rel="stylesheet" href="./assets/css/style.css">
        <script type="text/javascript" src="./assets/js/script.js" defer></script>
    </head>

    <body>
        <div class="">
            {{-- Nav --}}
            <div>
                @include('front.parts.nav')
            </div>

            <div class="flex flex-col gap-16">
                {{-- Main section --}}
                <div class="body-margin">
                    <div class="flex flex-wrap gap-16 justify-between mt-16">
                        {{-- Post content --}}
                        <div class="post-content">
                            @include('front.parts.post-content')
                        </div>

                        {{-- Sidebar --}}
                        <div class="sidebar">
                            @include('front.parts.sidebar')
                        </div>
                    </div>
                </div>

                {{-- Footer --}}
                <div>
                    @include('front.parts.footer')
                </div>
            </div>
        </div>
    </body>
</html>
