<x-app-layout>
    <x-slot name="header">

        <h2>
            Lepel details
        </h2>

    </x-slot>
    {{ $spoon }}


    <form>

        <div class="margins-center">

            <input type="hidden" name="id" id="id" value={{ $spoon->id }}>
            <input type="hidden" name="user_id" id="user_id" value={{ $spoon->user_id }}>

            <label for="description">Description</label>
            <textarea name="description" id="description"> {{ $spoon->description }}</textarea>

            <label for="date">Date</label>
            <input type="date" name="date" id="date" value={{ $spoon->date }}>

            <p>{{ $spoon->date }}</p>
            <label for="private_activity">Privé activiteit?</label>
            <input type="checkbox" name="private_activity" @if ($spoon->private == 1) checked @endif>
            <p>{{ $spoon->description }}</p>

            <button formaction="{{ route('spoon.update') }}">Edit</button>
            <button formaction="{{ route('spoon.remove') }}">Remove</button>
        </div>
    </form>
</x-app-layout>
