@vite(['resources/js/showLepelRemoveModal.js'])


{{-- {{ dd($date) }} --}}
<div class="margins-center">
    @foreach ($user->lepels as $item)
        {{-- {{ dd($item) }} --}}
        <form action="" method="GET" class="flex-horizontal flex-space-between border width-40-rem">
            @csrf
            <p>{{ $item->description }}</p>
            <p class="openThisModal" data-lepel_id={{ $item->id }}>Remove</p>
        </form>
    @endforeach
    <dialog class="removeDialog center-center border">
        <form action="{{ route('lepel.remove') }}" method="GET" class="flex-column">
            @csrf
            <input type="hidden" name='date' value={{ $item->date }}>
            <input type="hidden" name="lepelId" id="lepelTeVerwijderen">
            <p>Weet je zeker dat je deze lepel wilt verwijderen?</p>
            <div class="flex-space-between">
                <button type="submit">Verwijderen</button>
                <p class="removeCancelBtn">Cancel</p>
            </div>
        </form>
    </dialog>
</div>
