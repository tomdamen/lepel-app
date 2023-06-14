<x-app-layout>
    @vite(['resources/js/showLepelModal.js'])
    <x-slot name="header">
        <div class="flex-horizontal flex-space-between">
            <h2 class="">
                Daily dashboard
            </h2>


            <div id='date-selection' class="date-select flex-horizontal flex-align-center">
                <form class="date-select" action="">
                    <input type="hidden" name="date" id="date"
                        value={{ date('Y-m-d', strtotime($date . '-1day')) }}>
                    <button type='submit'>Previous day</button>
                </form>
                <form class="date-select" action="">
                    <input type="date" name="date" id="date" value={{ $date }}>
                    <button type="submit">Submit</button>
                </form>
                <form class="date-select" action="">
                    <input type="hidden" name="date" id="date"
                        value={{ date('Y-m-d', strtotime($date . '+1day')) }}>
                    <button type='submit'>Next day</button>
                </form>
                <form class="date-select" action="">
                    <input type="hidden" name="date" id="date" value={{ date('Y-m-d') }}>
                    <button type='submit'>Today</button>
                </form>
            </div>
        </div>
    </x-slot>
    <h3 class="subtitle"> Hallo {{ $user->name }}</h3>

    {{-- {{ dd($lepelsMorning) }} --}}

    <div class="flex-horizontal flex-space-around">
        <div>

            <h3>Lepels voor de ochtend:</h3>
            <div>

                <div class="margins-center">
                    <x-buttons.lepelinput usedlepels="{{ count($lepelsMorning) }}"
                        openlepels="{{ $user->lepels_per_morning - count($lepelsMorning) }}"
                        userId="{{ $user->id }}" :$date afternoon=0 />
                </div>
            </div>
            <x-lepel.lepel-list :$user :$date :lepels="$lepelsMorning" afternoon=0 />
        </div>

        <div>

            <h3>Lepels voor de middag:</h3>
            <div class="margins-center">

                <x-buttons.lepelinput usedlepels="{{ count($lepelsAfternoon) }}"
                    openlepels="{{ $user->lepels_per_afternoon - count($lepelsAfternoon) }}"
                    userId="{{ $user->id }}" :$date afternoon=1 />

            </div>
            <x-lepel.lepel-list :$user :$date :lepels="$lepelsAfternoon" afternoon=1 />
        </div>

    </div>

    <dialog class="dialogopen center-center border">
        <form action="{{ route('lepel.create') }}" class="flex-column">
            <label for="description">Description</label>
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <input type="hidden" name="date" value="{{ $date }}">
            <input type="hidden" name="afternoon" id="inputAfternoon">
            <textarea id="description" name="description" type="text" class="border"></textarea>
            <div class="flex-space-between">
                <button type="submit">Submit</button>
                <p class="cancelBtn">Cancel</p>
            </div>
        </form>
    </dialog>



</x-app-layout>
