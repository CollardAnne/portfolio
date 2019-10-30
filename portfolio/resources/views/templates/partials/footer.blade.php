{{--
    resources/views/templates/partials/footer.blade.php
 --}}

 <!-- FOOTER -->
 <footer id="wrapper-footer">

      {{-- @if (\Request::is('projets'))
        <div id="pagination" class="boite-fixe-resp">
          {{ $projets->links()}}
        </div>
      @endif --}}

      <ul class="nav-slide">
        @foreach ($projets as $projet)
          <li><a href="#">{{ $projet->id }}</a></li>
        @endforeach
      </ul>

 </footer>
