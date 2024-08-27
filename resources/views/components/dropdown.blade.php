<div class="p-10">
    <div class="dropdown inline-block relative">
      <button class="hover:bg-dark text-white font-semibold py-2 px-4  inline-flex items-center">
        <span class="mr-1">{{ $slot }}</span>
      </button>
      <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
        <li class=""><x-nav-link></x-nav-link></li>
        <li class=""><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Two</a></li>
        <li class=""><a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Three is the magic number</a></li>
      </ul>
    </div>
  </div>