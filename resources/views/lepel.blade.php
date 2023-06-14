<x-app-layout>
    <x-slot name="header">

        <h2>
            Lepel details
        </h2>

    </x-slot>
    {{ $lepel }}


    <form>

        <div class="margins-center">

            <input type="hidden" name="id" id="id" value={{ $lepel->id }}>
            <input type="hidden" name="user_id" id="user_id" value={{ $lepel->user_id }}>

            <label for="description">Description</label>
            <textarea name="description" id="description"> {{ $lepel->description }}</textarea>

            <label for="date">Date</label>
            <input type="date" name="date" id="date" value={{ $lepel->date }}>

            <p>{{ $lepel->date }}</p>
            <p>{{ $lepel->description }}</p>
            <button formaction="{{ route('lepel.update') }}">Edit</button>
            <button formaction="{{ route('lepel.remove') }}">Remove</button>
        </div>
    </form>
</x-app-layout>
