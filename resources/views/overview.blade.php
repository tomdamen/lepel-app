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
    </x-slot>


    Test of the oveview page


    {{-- {{ dd($user) }} --}}



    <div class="grid-2-columns width-40-rem">

        @foreach ($user->lepels as $item)
            <span>{{ $item->date }}:</span> <a
                href={{ route('lepel.view', ['id' => $item->id]) }}>{{ $item->description }}</a>
        @endforeach
    </div>


</x-app-layout>
