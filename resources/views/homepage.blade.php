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
                        <h2 class="font-serif text-lg my-2 border-b-2">Notes:</h2>
                        <blockquote class="m-3">
                            <p class="my-3">These are the start notes</p>
                        </blockquote>
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

        {{-- End Notes and related works --}}
            <div class="mx-12 mt-6 px-2 border-t-2">
                <div class="px-3 pt-3">
                    <h2 class="font-serif text-lg my-3 border-b-2">Notes:</h2>
                    <blockquote class="m-3">
                        <p class="my-3">These are the end notes</p>
                        <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sem dolor, porta quis ante hendrerit, pharetra viverra felis. Ut convallis placerat lorem, sit amet rhoncus sem condimentum quis. Aliquam ac gravida nunc. Donec ut dapibus risus. Proin elementum, neque a aliquam sollicitudin, felis sapien pharetra nisi, non finibus eros mauris a mauris. Phasellus varius mollis libero. Quisque nec elit finibus ipsum vulputate dapibus. Pellentesque rutrum commodo lorem, at scelerisque mi suscipit ac. Suspendisse potenti. Maecenas tempor lacus in lectus rhoncus pellentesque. Morbi mollis dolor enim, vel euismod nisl tempor eu.</p>
                    </blockquote>
                </div>
            </div>
            <div class="mx-12 mt-6 px-2">
                <div class="pb-[9px]">
                    <h4 class="font-serif text-md my-[10px]">Works inspired by this one:</h4>
                    <p class="my-[10px]"> <a href="">Another awesome work</a> by <a href="">This_other_super_cool_author</a></p>
                </div>

                <div class="pb-[9px]">
                    <h4 class="font-serif text-md my-[10px]">Series this work belongs to:</h4>
                    <p > Part 1 of <a class="underline" href="">This awesome Series</a> * <span><a class="underline" href="">Next Work --></a></span>  </p> 
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
                <div class="border relative">
                    <div class="absolute top-0 left-0"><img src="https://picsum.photos/100" alt=""></div>
                    <div class=" bg-light flex flex-row justify-between p-[4px] ">  
                        <div class="font-serif pl-[105px]">
                            <a class="underline" href="">ACool_nickname</a> on <a href="">chapter one</a>
                        </div>
                        <div>
                            Sat 20 Mar 2021 07:28AM UTC
                        </div>
                    </div>
                    <div>
                        
                        <blockquote>
                            <p class="my-5">This is one short paragraph to tell you how great you are doing kudos to you </p>
                            <p class="my-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sem dolor, porta quis ante hendrerit, pharetra viverra felis. Ut convallis placerat lorem, sit amet rhoncus sem condimentum quis. Aliquam ac gravida nunc. Donec ut dapibus risus. Proin elementum, neque a aliquam sollicitudin, felis sapien pharetra nisi, non finibus eros mauris a mauris. Phasellus varius mollis libero. Quisque nec elit finibus ipsum vulputate dapibus. Pellentesque rutrum commodo lorem, at scelerisque mi suscipit ac. Suspendisse potenti. Maecenas tempor lacus in lectus rhoncus pellentesque. Morbi mollis dolor enim, vel euismod nisl tempor eu.</p>
                        </blockquote>

                        <div class="flex flex-row flex-wrap gap-1 justify-end my-2 pr-1">
                            <x-button>Reply</x-button>
                            <x-button>Thread</x-button>
                            <x-button>Parent Thread</x-button>
                            <x-button>Block</x-button> 
                        </div>
                    
                    </div>
                </div>

            </div>

            <div class="my-[9px] place-self-center"> 
                <-- Navigation links -->
            </div>


        </div>
    

    </div>
</x-layout>

{{-- https://laravel.com/docs/11.x/blade#index-components --}}