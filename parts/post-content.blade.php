<main>
    <div class="flex flex-col gap-8">
        {{-- Post title --}}
        <div class="">
            <h1 class="text-4xl font-bold">{{ $post->title }}</h1>
        </div>

        {{-- Post meta --}}
        <div class="text-xs">
            <p>By {{ $post->author }}</p>
        </div>

        {{-- Post content --}}
        <div class="flex flex-col gap-4">
            {!! $post->content !!}
        </div>
    </div>
</main>