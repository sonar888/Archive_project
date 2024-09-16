<x-layout>

    <div class="grid grid-cols-6 gap-2"> <!-- Whole page layout -->

        <div class="col-start-1 col-span-1"> <!-- Side naviguation bar -->
            <div class="flex-col  divide-y ">
                <section class="flex-col p-2 ml-2 items-end ">
                    <div class="py-4">Dashboard</div>
                    <div>Profile</div>
                    <div>Preferences</div>
                    <div>Skin</div>
                </section>
        
                <section class="flex">
                    <div>Dashboard</div>
                    <div>Profile</div>
                    <div>Preferences</div>
                    <div>Skin</div>
                </section>
    
            </div>
            
        </div>
    
        <div class="user col-start-2 col-span-5"> <!-- User info and works -->
    
            <div class="flex-row"> <!-- User header -->
                <div class="">
                    <img src="https://picsum.photos/30" alt="">
                </div>
                <div class="flex-col">
                    <div><h1>Username</h1></div>
                    <div class="flex-row">
                        <div class="py-4">Dashboard</div>
                        <div class="py-4">Dashboard</div>
                        
                    </div>
                </div>
            </div>
    
            <div class="work">
                <div>
                    <h2>My works</h2>
                </div>
    
                <div>
                    
                </div>
    
    
            </div>
    
        </div>

    </div>
    
</x-layout>