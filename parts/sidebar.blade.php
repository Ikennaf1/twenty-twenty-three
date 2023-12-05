@php
    $widgets = loadWidgets('right-sidebar');
@endphp

<div class="sidebar-container">
    <div class="sticky top-40 border-l">
        @if (!empty($widgets))
            @foreach ($widgets as $widget)
                <div class="flex flex-col gap-1">
                    <div class="sidebar-widget-title font-bold border-l border-l-4 border-l-primary-color pl-2 py-1 bg-gray-200">
                        {{ getWidgetTitle($widget) }}
                    </div>
                    <div class="sidebar-widget-body pl-3">
                        {!! getWidgetBody($widget) !!}
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    
</div>
