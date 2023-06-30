@props(['usedspoons', 'openspoons', 'userId', 'partofday'])


<div class="usedSpoons inline-block">
    @if (isset($usedspoons))
        @for ($i = 0; $i < $usedspoons; $i++)
            <img src="./spoon.png" alt="" class="size2rem inline-block" style="opacity: 0.5">
        @endfor
    @endif
</div>

<div class="openSpoons inline-block" data-partOfDay={{ $partofday }}>
    @if (isset($openspoons))
        @for ($i = 0; $i < $openspoons; $i++)
            <img src="./spoon.png" alt="" class="size2rem spoon inline-block">
        @endfor
    @endif
</div>
