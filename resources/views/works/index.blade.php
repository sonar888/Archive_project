<x-layout>

    @foreach ($works as $work )

    <h1> <a href="/works/{{ $work->id }}">{{ $work['title'] }}</a></h1>
    <p>{{ $work['body'] }}</p>
    <p>{{ $work['id'] }}</p>
        
    @endforeach
    
</x-layout>