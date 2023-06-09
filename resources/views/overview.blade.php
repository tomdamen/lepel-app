<x-app-layout>
    <x-slot name="header">
        <div class="flex-horizontal flex-space-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Overview of the last {{ $timePeriod }} days
            </h2>
            <div class="timePeriodSelect">
                <form action="">
                    @csrf
                    <input type="number" name="timePeriod" value="{{ $timePeriod }}">
                    <button>Submit</button>
                </form>
            </div>
        </div>
    </x-slot>


    Test of the oveview page


    {{-- {{ dd($user) }} --}}





    @foreach ($user->lepels as $item)
        <p>{{ $item }}</p>
    @endforeach



</x-app-layout>
