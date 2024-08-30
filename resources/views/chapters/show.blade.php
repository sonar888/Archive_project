


<x-layout>

    @php

    //chapter_id

    
//objects in array, id in the object is the chapter id

//based on the chaperid, I want to find the index in the array so that i can increment




// $previous = $post->comments->orderBy('updated_at', 'DESC')->take(1)->where('updated_at', '<', $comment->updated_at)->first();

// $next = $post->comments->orderBy('updated_at', 'ASC')->where('updated_at', '>', $comment->updated_at)->first();
        

        

    
        


       
    @endphp

    {{-- Work navigation Top --}}
    <div class="flex justify-end">
        <x-button href='/works/{{ $chapter->work->id }}/chapters'>Entire Work</x-button>
        <x-button href='/works/{{ $chapter->work->id }}/chapters/{{ $next_record->id }}'>Next Chapter</x-button>
        <x-button type='button'>Chapter Index</x-button>
        <x-button>Comments</x-button>
        <x-button>Share</x-button>
        <x-button>Download</x-button>
    </div>

     {{-- Work warnings --}}

     <div class="container p-11">
        <div class="flex gap-6">

            <div>
                <p>Rating</p>
                <p>Archive Warnings</p>
                <p>Category</p>
                <p>Fandom</p>
                <p>Relationship</p>
                <p>Characters</p>
                <p>Additional Tags</p>
                <p>Language</p>
                <p>Stats</p>
            </div>

            

            <div>
                <p>{{ $work->rating[0]->name }}</p>
                <p>
                    @foreach ($work->warnings as $warning )
                        <span>{{ $warning->name }},</span>   
                    @endforeach

                </p>

                <p>
                    @foreach ($work->categories as $category )
                        <span>{{ $category->name }},</span>   
                    @endforeach
                </p>
                

                

                <p>Harry Potter</p>
                <p>Harry Potter/Ginny Weasley</p>
                <p>Harry Potter, Ginny Weasley</p>
                <p>Alternate Universe - No Voldemort</p>
                <p>English</p>
                <p>Published:{{ $chapter->work->created_at }} Updated:{{ $chapter->work->updated_at }} Words:41,903 Chapters:{{ count($work->chapters) }}/{{ $work->chapter_count }} Comments:{{ count($work->comments) }} Kudos:{{ $work->kudos }}</p>
            </div>

        </div>

     </div>

     {{-- Work  --}}

     <div class="container">
        <div class="">
            <h1>{{ $chapter->work->title }}</h1>
            <p><a href="">{{ $chapter->work->author->name }}</a></p>
    
            <p>{{ $chapter->work->summary }}</p> <br/>

            <h2>{{ $chapter->title }}</h2>

            <p>{{ $chapter->body }}</p>

            <p></p>
    
    
         </div>

     </div>

     {{-- Work naviguation bottom --}}

     <div class="flex justify-end">
        <x-button>Top</x-button>
        <x-button>Next Chapter</x-button>
        <x-button type="button" form='kudos'>Kudos</x-button>
        <x-button type="button" onclick="displayComments()">Comments</x-button>
    </div>

    <form id="kudos" class="hidden" action="/works/{{ $chapter->work_id }}/chapters/kudos" method="POST">
        @csrf
    </form>

    {{-- Kudos section and comment section  --}}

    <div>A lot of user names</div>

    {{-- Comment section  --}}

    <form action="/works/{{ $chapter->work_id }}/chapters/{{ $chapter->id }}/comments" method="POST">
        <x-input>Guest name</x-input>
        <x-input>Guest email</x-input>
        @csrf
    
        <x-input name='comment'>Comment</x-input>
    
        <button type='submit'>Comment</button>
    </form>

    <div>The pagination links for the comments</div>

    <div class="container" id="comment_section">
        <p>thecomments</p>

        @foreach ($chapter->comments as $comment)

        <div>
            <img src="" alt="">
        </div>

        <div>
            <div>
                <p>{{ $comment->author_id }}</p>
            </div>
            <div>
                <p>{{ $comment->comment }}</p>
            </div>
        </div>
            
        @endforeach

        

    </div>

    

    <script>
        function displayComments() {
            var x = document.getElementById("comment_section");
            if (x.style.display === "none") {
            x.style.display = "block";
            } else {
            x.style.display = "none";
            }
        }
    </script> 

</x-layout>