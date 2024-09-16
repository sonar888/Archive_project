<header class=''>
  <div class="bg-light shadow flex justify-between align-middle py-5 px-6">
    <div class="flex gap-3">
      <div>
        <img src="https://picsum.photos/30" alt="">
      </div>
      <div>
        <a href="/"><h1 class="text-3xl font-archive bold  text-dark">The archive</h1></a>
      </div>  
    </div>
    <div>
      @auth
      <form method="POST" action="/logout">
        @csrf
        <button type='submit' class="hover-text-light">Logout</button> 
      </form>   
      @endauth

      @guest
        <div>
          <a href="/login" class="hover-text-light">Login</a> 
        </div>
      
        <div>
          <a href="/register" class="hover-text-light">Register</a> 
        </div>
        
      @endguest

      
      <div>
        <x-nav-link href="/works/create">+</x-nav-link>
      </div>
    </div>
  </div>

  <x-nav></x-nav>
  
</header>