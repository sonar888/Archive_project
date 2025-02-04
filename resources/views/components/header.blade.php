<header>
  <div class="w-full bg-white flex flex-col sm:flex-row sm:justify-between">
    <div class="h-12 flex flex-row px-2">
      <div><img class="h-full" src="images/logo-the-archive.png" alt=""></div>
      <div class="font-archive text-5xl text-dark px-2">The Archive</div>
    
    </div>
    <div class="w-full sm:w-1/3 xl:w-1/4 flex flex-row justify-end gap-2 p-2">

      @guest
        <div>Register</div>
        <div>Login</div>
      @endguest

      @auth
        <div>Hi, Username!</div>
        <div>Post</div>
        <div>Logout</div>
      @endauth
      
    </div>
  </div>

  <x-nav></x-nav>
</header>