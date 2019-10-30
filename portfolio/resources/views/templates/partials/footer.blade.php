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

      <ul class="nav">
        @foreach ($projets as $projet)
          <li><a href="#slide{{ $projet->id }}">Projet {{ $projet->id }} </a></li>
        @endforeach
      </ul>

 </footer>
