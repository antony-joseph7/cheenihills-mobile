@props([
    'actions' => [],
    'size' => 'sm',
    'variant' => 'outline',
    'gap' => '1',
    'class' => ''
])

@php
    $sizeClass = match($size) {
        'xs' => 'btn-xs',
        'sm' => 'btn-sm',
        'lg' => 'btn-lg',
        default => ''
    };
    
    $gapClass = 'gap-' . $gap;
@endphp

<div class="btn-group {{ $gapClass }} {{ $class }}" role="group">
    @foreach($actions as $action)
        @php
            $actionType = $action['type'] ?? 'button';
            $color = $action['color'] ?? 'secondary';
            $icon = $action['icon'] ?? '';
            $tooltip = $action['tooltip'] ?? $action['text'] ?? '';
            $url = $action['url'] ?? '#';
            $attributes = $action['attributes'] ?? [];
            $btnClass = $variant === 'solid' ? "btn-{$color}" : "btn-outline-{$color}";
        @endphp
        
        @if($actionType === 'link')
            <a 
                href="{{ $url }}" 
                class="btn {{ $btnClass }} {{ $sizeClass }} {{ $action['class'] ?? '' }}"
                title="{{ $tooltip }}"
                @foreach($attributes as $attr => $value)
                    {{ $attr }}="{{ $value }}"
                @endforeach
            >
                @if($icon)
                    <i class="{{ $icon }}" @if(isset($action['text'])) style="margin-right: 0.25rem;" @endif></i>
                @endif
                {{ $action['text'] ?? '' }}
            </a>
        @else
            <button 
                type="button" 
                class="btn {{ $btnClass }} {{ $sizeClass }} {{ $action['class'] ?? '' }}"
                title="{{ $tooltip }}"
                @if(isset($action['onclick'])) onclick="{{ $action['onclick'] }}" @endif
                @if(isset($action['data-href'])) data-href="{{ $action['data-href'] }}" @endif
                @foreach($attributes as $attr => $value)
                    {{ $attr }}="{{ $value }}"
                @endforeach
            >
                @if($icon)
                    <i class="{{ $icon }}" @if(isset($action['text'])) style="margin-right: 0.25rem;" @endif></i>
                @endif
                {{ $action['text'] ?? '' }}
            </button>
        @endif
    @endforeach
</div>