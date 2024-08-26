<x-layout>

    <h1>{{ $work->id }}</h1>

    @foreach ($work->chapters as $chapter )

    <h1>{{ $chapter->title }}</h1>
    <p>{{ $chapter->body }}</p>
    <x-button href='/works/{{ $work->id }}/chapters/{{ $chapter->id }}'>Show chapter</x-button>
        
    @endforeach

    
    
    <x-button href='/works/{{ $work->id }}/chapters/create'>Add a chapter</x-button>
    
</x-layout>