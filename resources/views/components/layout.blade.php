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
        
    </head>
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
  <body class="h-full">
    <div class="min-h-full flex-col">
      <x-header>The Archive</x-header>
        
      
        
      <main class="my-5">
       {{ $slot }}

        













    </main>
    </div>
      
      
  </body>
</html>
