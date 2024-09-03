


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
        <x-forms.button href='/works/{{ $chapter->work_id }}/chapters'>Entire Work</x-forms.button>
        {{-- <x-forms.button href='/works/{{ $chapter->work_id }}/chapters/{{ $next_record->id }}'>Next Chapter</x-forms.button> --}}
        <x-forms.button type='forms.button'>Chapter Index</x-forms.button>
        <x-forms.button>Comments</x-forms.button>
        <x-forms.button>Share</x-forms.button>
        <x-forms.button>Download</x-forms.button>
    </div>

     {{-- Work warnings --}}

     {{-- <x-card-work>
        <x-slot:rating>{{ $work->rating[0]->name }}</x-slot:rating>
     </x-card-work> --}}

     

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

     <div class="work">
        
            <div id="preface" class="container mx-auto px-11">
                <h2>{{ $chapter->work->title }}</h2>
                <h3><a href="">{{ $chapter->work->author->name }}</a></h3>
                <div class="summary-module">
                    <h3>Summary</h3>
                    <blockquote>
                        <p>{{ $chapter->work->summary }}</p> <br/>
                    </blockquote>   
                </div>
            </div>
            

            <div class="chapters">
                <div class="chapter">
                    <div class='chapter-preface'>
                        <h3>{{ $chapter->title }}</h3>
                        <div class="notes">
                            <h3>Notes:</h3>
                            <blockquote>
                                <p>Hello all</p>
                                <p>Welcome to my first fanfiction</p>
                            </blockquote>
                            <p>See the end of the chapter for more notes</p>

                        </div>
                    </div>

                </div>
                <div class="container px-1 mx-auto">
                    <p>{{ $chapter->body }}</p>

                </div>

            </div>

            
        

     </div>

     {{-- Work naviguation bottom --}}

     <div class="flex justify-end">
        <x-forms.button>Top</x-forms.button>
        <x-forms.button>Next Chapter</x-forms.button>
        <x-forms.button type="forms.button" form='kudos'>Kudos</x-forms.button>
        <x-forms.button type="forms.button" onclick="displayComments()">Comments</x-forms.button>
    </div>

    <form id="kudos" class="hidden" action="/works/{{ $chapter->work_id }}/chapters/kudos" method="POST">
        @csrf
    </form>

    {{-- Kudos section and comment section  --}}

    <div>A lot of user names</div>

    {{-- Comment section  --}}

    {{-- <form action="/works/{{ $chapter->work_id }}/chapters/{{ $chapter->id }}/comments" method="POST">
        <x-forms.input>Guest name</x-forms.input>
        <x-forms.input>Guest email</x-forms.input>
        @csrf
    
        <x-forms.input name='comment'>Comment</x-forms.input>
    
        <forms.button type='submit'>Comment</forms.button>
    </form> --}}

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