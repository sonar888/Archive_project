{{-- <x-layout>

    @foreach ($works as $work )

    <h1> <a href="/works/{{ $work->id }}">{{ $work['title'] }}</a></h1>
    <p>{{ $work['summary'] }}</p>
    <p>{{ $work['id'] }}</p>
        
    @endforeach
    
</x-layout> --}}


<x-layout>

    @foreach ($works as $work )

    <div class="card container p-10">

        {{-- The header --}}
        <div class="flex justify-between">
        <div class="flex">
            <div>
                <img src="https://picsum.photos/30" alt="">
            </div>
  
            <div>
              <div class="flex gap-1">
                <h3><a href="/works/{{ $work->id }}">{{ $work->title }}</a></h3><span>by</span><p><a href="/author_id">author</a></p>
              </div>
              <div>
                <p><a href="">The fandom tags</a></p>
              </div>
            </div>
            
        </div>
          

        <div>
            <span>28 Feb 2024</span>
        </div>
          
        </div>

        {{-- The tags and warnings --}}

        <div class="tags">
          {{-- for each tag --}}
          <span><a href="tags">Tags</a></span> <span><a href="tags">Tags</a></span><span><a href="tags">Tags</a></span><span><a href="tags">Tags</a></span>
        </div>

        {{-- The summary --}}

        <div class="">
          <p>{{ $work->summary }}</p>

        </div>

        {{-- The footer --}}

        <div class="flex gap-1 justify-end">
          <p>Language: English</p>
          <p>Words: 10 025</p>
          <p>Chapters: 1/10</p>
          <p>Hits: 20</p>

        </div>



      </div>
        
    @endforeach
</x-layout>