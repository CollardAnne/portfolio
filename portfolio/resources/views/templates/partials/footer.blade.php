{{--
    resources/views/templates/partials/footer.blade.php
 --}}

 <!-- FOOTER -->
 <footer id="wrapper-footer">

      {{-- @if (\Request::is('projets')) --}}

        <div id="pagination" class="boite-fixe-resp xs-contenu-centre">
          {{ $projets->links()}}
        </div>


      {{-- @endif --}}



 </footer>
