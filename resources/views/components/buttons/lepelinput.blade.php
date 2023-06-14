@props(['usedlepels', 'openlepels', 'userId', 'afternoon'])

<div class="usedLepels inline-block">
    @if (isset($usedlepels))
        @for ($i = 0; $i < $usedlepels; $i++)
            <img src="./lepel.png" alt="" class="size2rem inline-block" style="opacity: 0.5">
        @endfor
    @endif
</div>

<div class="openLepels inline-block" data-afternoon={{ $afternoon }}>
    @if (isset($openlepels))
        @for ($i = 0; $i < $openlepels; $i++)
            <img src="./lepel.png" alt="" class="size2rem lepel inline-block">
        @endfor
    @endif
</div>
