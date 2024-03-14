@php
    $widgets = loadWidgets('right-sidebar');
@endphp

<div class="sidebar-container">
    <div class="sticky top-40">
        @if (!empty($widgets))
            @foreach ($widgets as $widget)
                <div class="flex flex-col gap-1">
                    <div class="widget-title">
                        {{ getWidgetTitle('right-sidebar', 'Recent posts') }}
                    </div>
                    <div class="widget-body">
                        {!! getWidgetBody($widget) !!}
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
