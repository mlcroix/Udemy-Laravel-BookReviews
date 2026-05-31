<div>
    @if ($rating)
        @for ($i = 1; $i <= 5; $i++)
            {{ $i <= round($rating) ? '★' : '☆' }}
        @endfor
    @else
        <p class="text-sm text-gray-500">No rating yet</p>
    @endif
</div>