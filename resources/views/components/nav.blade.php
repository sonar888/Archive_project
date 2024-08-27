<nav class="bg-dark-blue px-6">
  <div class="flex h-16 items-center justify-between">
    <div class="flex gap-5">
      {{-- <x-nav-link type="button" href="/works" :active="request()->is('works')">Fandoms</x-nav-link> --}}
      <x-nav-link href="/tags" :active="request()->is('tags')">Browse</x-nav-link>
      
      <x-nav-link href="/tags" :active="request()->is('tags')">Search</x-nav-link>
      <x-nav-link type="button" href="/works" :active="request()->is('works')">Works</x-nav-link>
      
      
      {{-- <x-dropdown>Fandoms</x-dropdown>
      <x-dropdown>Browse</x-dropdown>
      <x-dropdown>Search</x-dropdown>
      <x-dropdown>About</x-dropdown> --}}
      
      
  
    </div>
    <div>
      <form action="GET">
        <input class="rounded px-1" type="text" placeholder="searchbar">
        <button class="bg-blue rounded "> search</button>
      </form>
    </div>

  </div>
 
</nav>