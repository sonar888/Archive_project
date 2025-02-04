<x-layout>
    <div class="flex flex-col w-full px-8 sm:px-12">
    
        {{-- Work Navigation Top --}}

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
                    <div class="font-serif text-3xl my-3 place-self-center ">
                        <h2>This is an awesome title</h2>
                    </div>
                    <div class="font-serif text-lg my-2 place-self-center">
                        <a href="">ACoolAuthor</a>
                    </div>
                    <div class=" pb-2">
                        <div class="font-serif text-lg my-2 border-b-2">
                            <h2>Summary</h2>
                        </div>
                        <div class="my-5">
                            <p class="my-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sem dolor, porta quis ante hendrerit, pharetra viverra felis. Ut convallis placerat lorem, sit amet rhoncus sem condimentum quis. Aliquam ac gravida nunc. Donec ut dapibus risus. Proin elementum, neque a aliquam sollicitudin, felis sapien pharetra nisi, non finibus eros mauris a mauris. Phasellus varius mollis libero. Quisque nec elit finibus ipsum vulputate dapibus. Pellentesque rutrum commodo lorem, at scelerisque mi suscipit ac. Suspendisse potenti. Maecenas tempor lacus in lectus rhoncus pellentesque. Morbi mollis dolor enim, vel euismod nisl tempor eu.</p>
                            <p class="my-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sem dolor, porta quis ante hendrerit, pharetra viverra felis. Ut convallis placerat lorem, sit amet rhoncus sem condimentum quis. Aliquam ac gravida nunc. Donec ut dapibus risus. Proin elementum, neque a aliquam sollicitudin, felis sapien pharetra nisi, non finibus eros mauris a mauris. Phasellus varius mollis libero. Quisque nec elit finibus ipsum vulputate dapibus. Pellentesque rutrum commodo lorem, at scelerisque mi suscipit ac. Suspendisse potenti. Maecenas tempor lacus in lectus rhoncus pellentesque. Morbi mollis dolor enim, vel euismod nisl tempor eu.</p>
                        </div>               
                    </div>
                    <div class=" pb-2">
                        <h2 class="font-serif text-lg my-2 border-b-2">Notes</h2>
                        <p class="my-3">These are the start notes</p>
                        <p class="mt-5 mb-2"> (See the end of the work for <a href="" class="underline">other works inspired by this one</a> ) </p> 
                        
                    </div>
                </div>
            </div>

        
        {{-- Work Chapters --}}
            <div class="mx-12 mt-6 px-2">
                <div class=" font-serif text-lg my-5  px-2 pt-2 border-t-2 ">
                    <h2 class="my-3 place-self-center">Chapter Title</h2>
                </div>
                <div>
                    <p class="my-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sem dolor, porta quis ante hendrerit, pharetra viverra felis. Ut convallis placerat lorem, sit amet rhoncus sem condimentum quis. Aliquam ac gravida nunc. Donec ut dapibus risus. Proin elementum, neque a aliquam sollicitudin, felis sapien pharetra nisi, non finibus eros mauris a mauris. Phasellus varius mollis libero. Quisque nec elit finibus ipsum vulputate dapibus. Pellentesque rutrum commodo lorem, at scelerisque mi suscipit ac. Suspendisse potenti. Maecenas tempor lacus in lectus rhoncus pellentesque. Morbi mollis dolor enim, vel euismod nisl tempor eu.</p>
                    <p class="my-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sem dolor, porta quis ante hendrerit, pharetra viverra felis. Ut convallis placerat lorem, sit amet rhoncus sem condimentum quis. Aliquam ac gravida nunc. Donec ut dapibus risus. Proin elementum, neque a aliquam sollicitudin, felis sapien pharetra nisi, non finibus eros mauris a mauris. Phasellus varius mollis libero. Quisque nec elit finibus ipsum vulputate dapibus. Pellentesque rutrum commodo lorem, at scelerisque mi suscipit ac. Suspendisse potenti. Maecenas tempor lacus in lectus rhoncus pellentesque. Morbi mollis dolor enim, vel euismod nisl tempor eu.</p>
                    <p class="my-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sem dolor, porta quis ante hendrerit, pharetra viverra felis. Ut convallis placerat lorem, sit amet rhoncus sem condimentum quis. Aliquam ac gravida nunc. Donec ut dapibus risus. Proin elementum, neque a aliquam sollicitudin, felis sapien pharetra nisi, non finibus eros mauris a mauris. Phasellus varius mollis libero. Quisque nec elit finibus ipsum vulputate dapibus. Pellentesque rutrum commodo lorem, at scelerisque mi suscipit ac. Suspendisse potenti. Maecenas tempor lacus in lectus rhoncus pellentesque. Morbi mollis dolor enim, vel euismod nisl tempor eu.</p>
                </div>

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
            <div class="flex flex-row justify-start  my-7 p-1">
                <div class="h-16 w-16 p-1">
                    <img class="object-fill" src="images/logo-the-archive.png" alt="">
                </div>
                <div class="flex flex-row flex-wrap p-1">
                    <a href="" class="unederline">AaBb</a>
                    <a href="">CcDdd</a>
                    <a href="">EEeeeeeeLove </a>
                    <p>as well as 3000 guests left kudos on this work!</p>
                </div>
            </div>

        {{-- Leave a comment --}}
            <div class="border-1 m-1">
                <form class="w-full p-2 bg-light">
                    @auth
                        <h4>Comment as Username</h4>
                    @endauth
                    @guest
                        <h4>Comment as a guest</h4>
                    @endguest
                    <p><a href="">(Plaintext with limited HTML)</a></p>
                    <textarea class="w-full min-h-48 py-2" name="" id=""></textarea>
                    <x-button class="place-self-end">Comment</x-button>
    
    
    
                </form>
            </div>

        {{-- Comments --}}


        </div>
    

    </div>
</x-layout>

{{-- https://laravel.com/docs/11.x/blade#index-components --}}