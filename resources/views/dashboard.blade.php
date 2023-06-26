<x-app-layout>
    @vite(['resources/js/showSpoonModal.js'])
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

    <p class="margins-center">Lepels voor vandaag:</p>
    <x-buttons.spooninput usedspoons="{{ count($spoons) }}"
        openspoons="{{ $user->spoons_per_morning - count($spoonsMorning) }}" userId="{{ $user->id }}" :$date
        afternoon=0 />


    <div class="flex-horizontal flex-space-around">
        <div>

            <h3>Lepels voor de ochtend:</h3>
            <div>

                <div class="margins-center">
                    <x-buttons.spooninput usedspoons="{{ count($spoonsMorning) }}"
                        openspoons="{{ $user->spoons_per_morning - count($spoonsMorning) }}"
                        userId="{{ $user->id }}" :$date afternoon=0 />
                </div>
            </div>
            <x-spoon.spoon-list :$user :$date :spoons="$spoonsMorning" afternoon=0 />
        </div>

        <div>

            <h3>Lepels voor de middag:</h3>
            <div class="margins-center">

                <x-buttons.spooninput usedspoons="{{ count($spoonsAfternoon) }}"
                    openspoons="{{ $user->spoons_per_afternoon - count($spoonsAfternoon) }}"
                    userId="{{ $user->id }}" :$date afternoon=1 />

            </div>
            <x-spoon.spoon-list :$user :$date :spoons="$spoonsAfternoon" afternoon=1 />
        </div>

    </div>

    <dialog class="dialogopen center-center border">
        <form action="{{ route('spoon.create') }}" class="flex-column">
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
