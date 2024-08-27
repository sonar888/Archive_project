<x-layout>

    <h1>{{ $work['title'] }}</h1>

    <h1>{{ $work->author->name }}</h1>

    <p>Work tags</p>

    <p>Chapters {{ $work['chapter_count'] }}</p>

    <div>
        {{ $work['summary'] }}
    </div>

    

    <form action='/works/{{ $work->id }}' method="POST">
        @csrf
        @method('DELETE')
        <button>Delete Work</button>
    </form>

    
    <x-button href="/works/{{ $work->id }}/edit">Edit Work</x-button>

    <x-button href="/works/{{ $work->id }}/chapters">Show chapters</x-button>



</x-layout>


