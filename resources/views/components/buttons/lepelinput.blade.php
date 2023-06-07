@vite(['resources/js/showLepelModal.js'])
<div class="usedLepels inline-block">
    @if (isset($usedlepels))
        @for ($i = 0; $i < $usedlepels; $i++)
            <img src="./lepel.png" alt="" class="size2rem inline-block" style="opacity: 0.5">
        @endfor
    @endif
</div>

<div class="openLepels inline-block">
    @if (isset($openlepels))
        @for ($i = 0; $i < $openlepels; $i++)
            <img src="./lepel.png" alt="" class="size2rem lepel inline-block">
        @endfor
    @endif
</div>



<dialog class="dialogopen center-center border">
    <form action="{{ route('lepel.create') }}" class="flex-column">
        <label for="description">Description</label>
        <input type="hidden" name="user_id" value="{{ $userId }}">
        <input type="hidden" name="date" value="{{ $date }}">
        <textarea id="description" name="description" type="text"></textarea>
        <div class="flex-space-between">
            <button type="submit">Submit</button>
            <p class="cancelBtn">Cancel</p>
        </div>
    </form>
</dialog>
