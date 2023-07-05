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
    <div class="margins-center">
        <p class="">Lepels voor vandaag:</p>
        <x-buttons.spooninput usedspoons="{{ $usedSpoonsDay }}"
            openspoons="{{ $user->settings->spoons_per_day - $usedSpoonsDay }}" userId="{{ $user->id }}" :$date
            partofday='0' />
    </div>

    <div class="flex-horizontal flex-space-around">
        <div>

            <h3>Lepels voor de ochtend:</h3>
            <div>

                <div class="margins-center">
                    <x-buttons.spooninput usedspoons="{{ $usedSpoonsMorning }}"
                        openspoons="{{ $user->settings->default_spoons_per_morning - $usedSpoonsMorning }}" userId="{{ $user->id }}"
                        :$date partofday='1' />
                </div>
            </div>
            <x-spoon.spoon-list :$user :$date :spoons="$spoonsMorning" partofday='1' />
        </div>

        <div>

            <h3>Lepels voor de middag:</h3>
            <div class="margins-center">

                <x-buttons.spooninput usedspoons="{{ $usedSpoonsAfternoon }}"
                    openspoons="{{ $user->settings->default_spoons_per_afternoon - $usedSpoonsAfternoon }}" userId="{{ $user->id }}"
                    :$date :partofday='2' />

            </div>
            <x-spoon.spoon-list :$user :$date :spoons="$spoonsAfternoon" partofday='2' />
        </div>


        <div>

            <h3>Lepels voor de avond:</h3>
            <div class="margins-center">

                <x-buttons.spooninput usedspoons="{{ $usedSpoonsEvening }}"
                    openspoons="{{ $user->settings->default_spoons_per_evening - $usedSpoonsEvening }}" userId="{{ $user->id }}"
                    :$date partofday='3' />

            </div>
            <x-spoon.spoon-list :$user :$date :spoons="$spoonsEvening" partofday='3' />
        </div>

    </div>

    <dialog class="dialogopen center-center border">
        <form action="{{ route('spoon.create') }}" class="flex-column">
            <label for="description">Description</label>
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <input type="hidden" name="date" value="{{ $date }}">
            <textarea id="description" name="description" type="text" class="border" required></textarea>
            <label for="spoons_for_activity">Aantal lepels voor activiteit:</label>
            <input type="number" name="spoons_for_activity" id="spoons_for_activity" value="1">
            <label for="part_of_day">Kies een dagdeel:</label>
            <select name="part_of_day" id="inputPartOfDay" required>
                <option value="1">Ochtend</option>
                <option value="2">Middag</option>
                <option value="3">Avond</option>
            </select>
            <div class="flex-space-between">
                <button type="submit">Submit</button>
                <p class="cancelBtn">Cancel</p>
            </div>
        </form>
    </dialog>



</x-app-layout>
