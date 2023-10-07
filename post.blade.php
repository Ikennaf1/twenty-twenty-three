

{{-- {!! getPostHead($post) !!} --}}
{{-- <div></div> --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
        <link rel="stylesheet" href="/assets/css/style.css">
        <script type="text/javascript" src="/assets/css/script.js"></script>
    </head>

    <body>
        <div class="font-bold">jfkjdbfd</div>
        {{ $post }}
    </body>
</html>
