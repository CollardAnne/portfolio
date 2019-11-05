{{--
      resources/views/projets/index.blade.php
      Variables disponibles :
        $projet: Projets(id, nom, description, image, site, lien, created_at, updated_at )
 --}}

 @extends('templates.app')
 @section('contenu')

   <div id="slider" class="xs-cache">
     {{-- <div class="xs-cache"> --}}
       <ul>

          @foreach ($projets as $projet)

            <li class="slide grille-g">
              <!-- image projets -->
              <figure  class="xs12 m6 pulse imgProjet">

                  <img src="{{asset('storage/'.$projet->image) }}" alt="{{ $projet->nom }}" >

                <figcaption class="xs-cache">{{ $projet->nom }}</figcaption>
              </figure>

              <!-- détails projets -->
              <div id="detailProjet" class="xs12 m6">
                <h1 class="nomProjet xs-contenu-xl s-contenu-xxl m-contenu-xl l-contenu-xxl" style="color:{{ $projet->couleur }}">{{ $projet->nom }}</h1>

                {{-- <div id="progress">
                  <div id="bar" style="background-color: {{ $projet->couleur }}"></div>
                </div> --}}
                <div class="bar" style="background-color: {{ $projet->couleur }}"></div>
                <div class="nombreProjet xs-contenu-xs"><span class="contenu-gras">{{sprintf('%02d', $projet->id)}}</span>/{{sprintf('%02d', $NbrProjets)}}</div>

                <div class="description xs-contenu-xs s-contenu-s m-contenu-xs l-contenu-s">{!! $projet->description !!}</div>
                <div class="detail xs-contenu-s">{!! $projet->detail !!}</div>
                @if ($projet->lien != $projet->version )
                  <div class="version xs-contenu-s"><a href="{{ $projet->lien }}" style="color:{{ $projet->couleur }}" target="_blank">{!! $projet->version !!}</a></div>
                @endif
                <div class="bouton">
                  <a href="{{ $projet->site }}" target="_blank">Voir le site</a>
                </div>
              </div>
            </li>

          @endforeach

        </ul>
     {{-- </div> --}}
   </div>

 @stop
