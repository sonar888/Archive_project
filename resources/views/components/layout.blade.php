<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Grey+Qo&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />



        <style>
          @import url('https://fonts.googleapis.com/css2?family=Grey+Qo&display=swap');
          </style>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        <script src="https://kit.fontawesome.com/7c9183587f.js" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
        
    </head>
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
  <body class=" bg-white">
    <div class="min-h-full w-full  flex flex-col "> <!-- lg:w-2/3 lg:mx-auto -->
      <x-header>The Archive</x-header>  
      <main class="pt-[7px] pb-[49px] px-[27px]">{{ $slot }}</main>
      <x-footer></x-footer>
    </div>     
  </body>
</html>
