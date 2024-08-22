<x-layout>

    @foreach ($tags as $tag )

    <a href="/tags/{{ $tag->id }}">{{ $tag->name }}</a>
        
    @endforeach
    
</x-layout>