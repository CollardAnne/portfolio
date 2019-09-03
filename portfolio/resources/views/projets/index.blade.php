{{--
      resources/views/projets/index.blade.php
      Variables disponibles :
        $projet: Projets(id, nom, description, image, site, lien, created_at, updated_at )
 --}}

 @extends('templates.app')
 @section('contenu')

   @foreach ($projets as $projet)

     <!-- image projets -->
     <figure id="imgProjet" class="xs6">
       <div class="imgHover pulse">
         <a href="{{ $projet->site }}" target="_blank">
           <img src="{{asset('storage/'.$projet->image) }}" alt="{{ $projet->nom }}">
         </a>
       </div>
       <figcaption class="xs-cache">{{ $projet->nom }}</figcaption>
     </figure>

     <!-- détails projets -->
     <div id="detailProjet" class="xs6">
       <h1 class="nomProjet xs-contenu-xl" style="color:{{ $projet->couleur }}">{{ $projet->nom }}</h1>
       <div class="nombreProjet xs-contenu-s">{{ $projet->id }}/{{ $NbrProjets }}</div>
       <p class="description xs-contenu-s">{!! $projet->description !!}</p>
       <div class="bouton">
         <a href="{{ $projet->site }}" target="_blank" >Voir le site</a>
       </div>

     </div>

   @endforeach

 @stop
