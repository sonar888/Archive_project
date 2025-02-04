<nav class="flex flex-wrap flex-row place-content-center sm:justify-between bg-dark-blue sm:h-8 w-full p-1 sm:p-0 text-white">
  <div class="flex flex-row justify-evenly sm:w-1/3">
    <div class="px-2">Fandoms</div>
    <div class="px-2">Browse</div>
    <div class="px-2">Search</div>
    <div class="px-2">About</div>
  </div>
  <div >
    <form class="flex justify-evenly gap-3 px-2" action="/search" method="GET">   
      <input class="w-36 lg:w-48 rounded-full px-2" type="text"  name="q">
      <x-button class="bg-white rounded px-3 text-dark">Search</x-button>
    </form>
  </div>
 
</nav>

{{-- <x-nav-link href="/tags" :active="request()->is('tags')">Browse</x-nav-link>
      
      <x-nav-link href="/tags" :active="request()->is('tags')">Search</x-nav-link>
      <x-nav-link type="button" href="/works" :active="request()->is('works')">Works</x-nav-link>
      
       --}}
      {{-- <x-dropdown>Fandoms</x-dropdown>
      <x-dropdown>Browse</x-dropdown>
      <x-dropdown>Search</x-dropdown>
      <x-dropdown>About</x-dropdown> --}}
      
      