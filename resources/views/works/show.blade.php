<x-layout>

    <h1>{{ $work['title'] }}</h1>

    <p>Work tags</p>

    <p>Chapters {{ $work['chapters'] }}</p>

    <div>
        {{ $work['body'] }}
    </div>

    

    <form action='/works/{{ $work->id }}' method="POST">
        @csrf
        @method('DELETE')
        <button>Delete Work</button>
    </form>

    <button><a href="/works/{{ $work->id }}/edit">Eddit</a></button>



</x-layout>