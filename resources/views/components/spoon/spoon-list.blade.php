@vite(['resources/js/showSpoonEditModal.js'])
@props(['user', 'date' => date('Y-m-d'), 'spoons', 'partofday'])

{{-- {{ dd($lepels) }} --}}

<div class="margins-center">
    @foreach ($spoons as $item)
        <form action="" method="GET" class="flex-horizontal flex-space-between border width-40-rem">
            @csrf
            <p>{{ $item->description }}</p>
            <div class="openThisModal flex-horizontal nogap">
                {{-- {{ dd($item) }} --}}
                @for ($i = 0; $i < $item->spoons_for_activity; $i++)
                    <img src="./spoon.png" alt="" class="size2rem inline-block" style="opacity: 0.5">
                @endfor
                <p data-spoon_id={{ $item->id }} data-spoon_description="{{ $item->description }}"
                    data-partofday="{{ $partofday }}">
                    Edit</p>
            </div>
        </form>
    @endforeach

    <dialog class="editDialog center-center border">
        <form method="GET" class="flex-column">
            @csrf
            <div class="border flex-space-between flex-align-center">
                <label for="date">Date</label>
                <input type="date" name='date' value={{ $date }} class="text-align-right">
            </div>
            <div class="border flex-space-between flex-align-center">
                <label for="editSpoonDescription">Description</label>
                <textarea name="description" id="editSpoonDescription" class="text-align-right"></textarea>
            </div>
            <input type="hidden" name="id" id="editSpoonId">
            <input type="hidden" name="afternoon" id="afternoon">
            <div class="flex-space-between">
                <button type="submit" formaction="{{ route('spoon.remove') }}">Verwijderen</button>
                <button type="submit" formaction="{{ route('spoon.update') }}">Edit</button>
                <p class="editCancelBtn">Cancel</p>
            </div>
        </form>
    </dialog>
</div>
