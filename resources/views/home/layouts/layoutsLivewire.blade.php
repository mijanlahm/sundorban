<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    @include('home.layouts.cssLink')
    @livewireStyles


    <title>QuickCart || Details</title>
  </head>

  <body>

    <!-- Header -->
    @include('home.layouts.header')


    <!-- main contents -->
    <main>
      
        <div>
          {{ $slot }}
        </div>

    </main>
    

    <!-- footer -->
    @include('home.layouts.footer')


    <!-- jquery Script-->
    @include('home.layouts.jqueryscript')
    @livewireScripts


  </body>

</html>