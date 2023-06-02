<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <h3 class="max-w-7xl mx-auto sm:px-6 lg:px-8">Lepels voor vandaag:</h3>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div> --}}


            Hallo {{ $user->name }}

            <x-buttons.lepelinput usedlepels="{{ count($lepels) }}"
                openlepels="{{ $user->lepels_per_day - count($lepels) }}" userId="{{ $user->id }}" />
            {{-- </x-buttons.lepelinput> --}}

        </div>
    </div>
    <x-lepel.overview :lepels="$lepels" />





</x-app-layout>
