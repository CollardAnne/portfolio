{{--
   resources/views/templates/app.blade.php
   Template général
--}}

<!DOCTYPE html>
<html lang="en">
  @include('templates.partials.head')

 <body>

   @section('cache')
   @show

   <!-- Navigation -->
   @include('templates.partials.header')

   <!-- CONTENU -->
   <main id="wrapper-main" class="boite-fixe-resp">
     @section('contenu')
     @show
   </main>

   <!-- Footer -->
   @include('templates.partials.footer')

   <!-- Scripts -->
   @include('templates.partials.scripts')

 </body>
</html>
