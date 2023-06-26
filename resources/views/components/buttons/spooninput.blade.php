@props(['usedspoons', 'openspoons', 'userId', 'afternoon'])

<div class="usedSpoons inline-block">
    @if (isset($usedspoons))
        @for ($i = 0; $i < $usedspoons; $i++)
            <img src="./spoon.png" alt="" class="size2rem inline-block" style="opacity: 0.5">
        @endfor
    @endif
</div>

<div class="openSpoons inline-block" data-afternoon={{ $afternoon }}>
    @if (isset($openspoons))
        @for ($i = 0; $i < $openspoons; $i++)
            <img src="./spoon.png" alt="" class="size2rem spoon inline-block">
        @endfor
    @endif
</div>
