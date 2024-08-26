<x-layout>

    <h1>{{ $chapter['title'] }}</h1>

    <h1></h1>

    <p>chapter tags</p>

    

    <div>
        {{ $chapter['body'] }}
    </div>

    

    <form action='/works/{{ $chapter->work_id }}/chapters/{{ $chapter->id }}' method="POST">
        @csrf
        @method('DELETE')
        <x-button>Delete chapter</x-button>
    </form>

    <x-button href="/works/{{ $chapter->work_id }}/chapters/{{ $chapter->id }}/edit">Edit</x-button>



</x-layout>