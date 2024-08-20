<nav class="bg-dark-blue px-6">
  <div class="flex h-16 items-center justify-between">
    <div class="flex gap-5">
      <x-nav-link type="button" href="/works" :active="request()->is('works')">Works</x-nav-link>
      <x-nav-link href="/tags" :active="request()->is('tags')">Tags</x-nav-link>
  
    </div>
    <div>
      <form action="GET">
        <input type="text" placeholder="searchbar">
        <button class="bg-black">Search</button>
      </form>
    </div>

  </div>
   

   
    
  </nav>