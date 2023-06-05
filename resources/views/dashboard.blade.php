<x-app-layout>
    <x-slot name="header">
        <div class="flex-horizontal flex-space-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Daily dashboard
            </h2>


            {{-- {{ dd(date('Y-m-d', strtotime($date . '-1day'))) }} --}}
            <form class="date-select" action="">

                <button value={{ date('Y-m-d', strtotime($date . '-1day')) }}>Previous</button>
                <input type="date" name="date" id="date" value={{ $date }}>
                <button type="submit">Submit</button>
                <button value={{ date('Y-m-d', strtotime($date . '+1day')) }}>Next</button>
            </form>
        </div>
    </x-slot>


    <div class="py-12">

        <h3 class="max-w-7xl mx-auto sm:px-6 lg:px-8">Lepels voor vandaag:</h3>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            Hallo {{ $user->name }}


            <x-buttons.lepelinput usedlepels="{{ count($user->lepels) }}"
                openlepels="{{ $user->lepels_per_day - count($user->lepels) }}" userId="{{ $user->id }}" />

        </div>
    </div>
    <x-lepel.lepel-list :$user date="{{ date('Y-m-d') }}" />





</x-app-layout>
