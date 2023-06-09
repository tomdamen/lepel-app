<x-app-layout>
    <x-slot name="header">
        <div class="flex-horizontal flex-space-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
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


    <div class="py-12">

        <h3 class="max-w-7xl mx-auto sm:px-6 lg:px-8">Lepels voor vandaag:</h3>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            Hallo {{ $user->name }}

            <x-buttons.lepelinput usedlepels="{{ count($user->lepels) }}"
                openlepels="{{ $user->lepels_per_day - count($user->lepels) }}" userId="{{ $user->id }}" :$date />

        </div>
    </div>
    <x-lepel.lepel-list :$user :$date />





</x-app-layout>
