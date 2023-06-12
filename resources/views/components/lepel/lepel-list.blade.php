@vite(['resources/js/showLepelEditModal.js'])
@props(['user', 'date' => date('Y-m-d'), 'lepels', 'afternoon'])

{{-- {{ dd($lepels) }} --}}

<div class="margins-center">
    @foreach ($lepels as $item)
        <form action="" method="GET" class="flex-horizontal flex-space-between border width-40-rem">
            @csrf
            <p>{{ $item->description }}</p>
            <p class="openThisModal" data-lepel_id={{ $item->id }} data-lepel_description="{{ $item->description }}"
                data-afternoon="{{ $afternoon }}">
                Edit</p>
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
                <label for="editLepelDescription">Description</label>
                <textarea name="description" id="editLepelDescription" class="text-align-right"></textarea>
            </div>
            <input type="hidden" name="id" id="editLepelId">
            <input type="hidden" name="afternoon" id="afternoon">
            <div class="flex-space-between">
                <button type="submit" formaction="{{ route('lepel.remove') }}">Verwijderen</button>
                <button type="submit" formaction="{{ route('lepel.update') }}">Edit</button>
                <p class="editCancelBtn">Cancel</p>
            </div>
        </form>
    </dialog>
</div>
