{{--
   resources/views/templates/app.blade.php
   Template général
--}}

<!DOCTYPE html>
<html lang="en">
  @include('templates.partials.head')

 <body>
   <!-- Navigation -->
   @include('templates.partials.header')

   <!-- CONTENU -->
   <main class="boite-fixe-resp grille-g">
     @section('contenu')
     @show
   </main>

   <!-- Footer -->
   @include('templates.partials.footer')

   <!-- Scripts -->
   @include('templates.partials.scripts')

 </body>
</html>
