@vite(['resources/js/showSpoonEditModal.js'])
@props(['user', 'date' => date('Y-m-d'), 'spoons', 'partofday'])


<div class="margins-center">
    @foreach ($spoons as $item)
        {{-- {{ dd($item) }} --}}
        <form action="" method="GET" class="flex-horizontal flex-space-between border">
            @csrf
            <p>{{ $item->description }}</p>
            <div class="openThisModal flex-horizontal nogap" data-spoon_id={{ $item->id }}
                data-spoon_description="{{ $item->description }}" data-part_of_day="{{ $partofday }}">
                @for ($i = 0; $i < $item->spoons_for_activity; $i++)
                    <img src="./spoon.png" alt="" class="size2rem inline-block" style="opacity: 0.5">
                @endfor
                <p> Edit</p>
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
            <input name="id" id="editSpoonId">
            <select name="part_of_day" id="part_of_day">
                <option value="1">Ochtend</option>
                <option value="2">Middag</option>
                <option value="3">Avond</option>
            </select>
            <div class="flex-space-between">
                <button type="submit" formaction="{{ route('spoon.remove') }}">Verwijderen</button>
                <button type="submit" formaction="{{ route('spoon.update') }}">Edit</button>
                <p class="editCancelBtn">Cancel</p>
            </div>
        </form>
    </dialog>
</div>
