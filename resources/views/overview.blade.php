<x-app-layout>
    <x-slot name="header">
        <div class="flex-horizontal flex-space-between">
            <h2>
                Overview of the last {{ $timePeriod }} days
            </h2>

            <div class="timePeriodSelect">
                <form action="">
                    @csrf
                    <input type="number" name="timePeriod" value="{{ $timePeriod }}" class="border">
                    <button class="border">Submit</button>
                </form>
            </div>
        </div>
        <div class="lowerBar"></div>
    </x-slot>







    <h2>Vandaag:</h2>

    <div class="grid-2-columns width-40-rem">

        @foreach ($user->spoons as $item)
            <span>{{ $item->date }}:</span> <a
                href={{ route('spoon.view', ['id' => $item->id]) }}>{{ $item->description }}</a>
        @endforeach
    </div>

    <h2>Gisteren:</h2>


</x-app-layout>
