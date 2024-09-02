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

        <p>{{ $rating }}</p>

        

        {{-- <div>
            
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
        </div> --}}

    </div>

 </div>