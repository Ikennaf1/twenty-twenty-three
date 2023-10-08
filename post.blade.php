
{{-- {{ $post }} --}}
{{-- {!! getPostHead($post) !!} --}}
{{-- <div></div> --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
        <link rel="stylesheet" href="/assets/css/style.css">
        <script type="text/javascript" src="/assets/js/script.js" defer></script>
    </head>

    <body>
        <div class="">
            {{-- Nav --}}
            <div>
                @include('front.parts.nav')
            </div>

            <div class="flex flex-col gap-16">
                {{-- Content --}}
                <div>ljgh</div>

                {{-- Footer --}}
                <div>
                    @include('front.parts.footer')
                </div>
            </div>
        </div>
    </body>
</html>
