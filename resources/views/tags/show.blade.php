<x-layout>

    <p>{{ $tag->name }}</p>

    

    <form action='/tags/{{ $tag->id }}' method="POST">
        @csrf
        @method('DELETE')
        <button>Delete tag</button>
    </form>

    <button><a href="/tags/{{ $tag->id }}/edit">Edit</a></button>



</x-layout>