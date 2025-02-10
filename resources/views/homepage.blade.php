<x-layout>
    <div class="flex flex-col w-full px-8 sm:px-12">
    
        {{-- Navigation Top --}}

            <div class="flex flex-row flex-wrap gap-1 justify-end my-2 pr-1">
                <x-button>Entire Work</x-button>
                <x-button>Next Chapter</x-button>
                <x-button>Bookmark</x-button>
                <x-button>Mark For Later</x-button>
                <x-button>Comments</x-button>
                <x-button>Share</x-button>
                <x-button>Subscribe</x-button>
                <x-button>Download</x-button>
            </div>

        {{-- Work Meta --}}
        
            
            <div class="border py-4 px-2">
                <div class="flex flex-row">
                    <div class="w-1/2">Rating</div>
                    <div class="w-1/2">Not Rated</div>
                </div>
            </div>
        

        {{-- Work --}}
            <div class="flex flex-col mx-7 px-1 ">

                {{-- Work Summary and Notes--}}
                <div class="mx-12 mt-6 px-2">
                    <div class="">
                        <x-work.title title="work">This is an awesome title from another component</x-work.title>
                        <x-work.author>A cool author but different</x-work.author>
                        <x-work.summary></x-work.summary>
                        <x-work.notes notes="start"></x-work.notes>
                    </div>
                </div>

            
            {{-- Work Chapters --}}
                <div class="mx-12 mt-6 px-2">
                    <x-work.work></x-work.work>
                </div>

            {{-- End Notes and related works --}}
                <div class="mx-12 mt-6 px-2 border-t-2">
                    <x-work.notes notes="end"></x-work.notes>
                </div>

                <div class="mx-12 mt-6 px-2">
                    <x-work.inspired></x-work.inspired>
                    <x-work.series></x-work.series>
                </div>
            </div>

        
        

    
    {{-- Feedback --}}
            <div>

            {{-- Navigation Bottom --}}
                <div class="flex flex-row flex-wrap gap-1 justify-end my-2 pr-1">
                    <x-button>Top</x-button>
                    <x-button>Next Chapter</x-button>
                    <x-button>Kudos</x-button>
                    <x-button>Bookmark</x-button>
                    <x-button>Comments</x-button>    
                </div>

            {{-- Kudos --}}
                <x-work.feedback.kudos>
                    <a href="" class="unederline">SOmanykudos</a>
                    <a href="">CcDdd</a>
                    <a href="">EEeeeeeeLove </a>
                </x-work.feedback.kudos>

            {{-- Leave a comment --}}
                <div class="border border-double m-1">
                    <form class="w-full p-3 bg-light">
                        <div class="flex flex-col">

                            <div class="font-serif my-2">
                                @auth
                                <h4 class="">Comment as Username</h4>
                                @endauth
                                @guest
                                    <h4>Comment as a guest</h4>
                            @endguest

                            </div>
                            
                            <p class="text-[10px] p-[6px] place-self-end"><a href="">(Plaintext with limited HTML)</a></p>
                            <div class="w-full py-2">
                                <textarea class="w-full min-h-48 " name="" id=""></textarea>
                            </div>
                            <x-button class="place-self-end">Comment</x-button>
                        </div>
                        
                    </form>
                </div>

            {{-- Comments --}}

                <div class="my-[9px] place-self-center"> 
                    <-- Navigation links -->
                </div>

                <div> {{-- 35 comments per page --}}


                    {{-- Each Comment --}}

                    <x-work.feedback.comments></x-work.feedback.comments>
                    

                </div>

                <div class="my-[9px] place-self-center"> 
                    <-- Navigation links -->
                </div>


            </div>
    

    </div>
</x-layout>

{{-- https://laravel.com/docs/11.x/blade#index-components --}}