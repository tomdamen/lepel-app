@props(['align' => 'right', 'width' => '48', 'contentClasses' => ''])

<div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div class="position-absolute fs-500" x-show="open" style="display: none;">
        <div>
            {{ $content }}
        </div>
    </div>
</div>
