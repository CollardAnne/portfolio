{{--
    resources/views/templates/partials/footer.blade.php
 --}}

 <!-- FOOTER -->
 <footer>

    <div class="boite-fixe-resp xs-cache m-visible" style="opacity : 0">
      <div id="pagination">
        <ul class="nav-slide">
          @foreach ($projets as $projet)
            <li>
              <a href="#">
                <div class="page-num">{{sprintf('%02d', $projet->id)}}</div>
              </a>
            </li>
          @endforeach
        </ul>
      </div>
    </div>

      <div id="pagine" class="m-cache" style="opacity : 0">
        <div class="prev"><i class="fas fa-chevron-left"></i></div>
        <div class="next"><i class="fas fa-chevron-right"></i></div>
      </div>


 </footer>
