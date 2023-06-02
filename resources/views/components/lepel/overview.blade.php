<div>
    <p>Test</p>
    {{-- {{ dd($lepels) }} --}}

    @foreach ($lepels as $item)
        <p>{{ $item->description }}</p>
    @endforeach
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
</div>
