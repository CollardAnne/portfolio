{{--
      resources/views/projets/index.blade.php
      Variables disponibles :
        $projet: Projets(id, nom, description, image, site, lien, created_at, updated_at )
 --}}

 @extends('templates.app')
 @section('contenu')

   <div id="slider">
    <ul id="slide-container">

   @foreach ($projets as $projet)

     <li id="slide{{ $projet->id }}" class="slide grille-g">
       <!-- image projets -->
       <figure  class="xs12 m6 pulse imgProjet">
         <a href="{{ $projet->site }}" target="_blank">
           <img src="{{asset('storage/'.$projet->image) }}" alt="{{ $projet->nom }}" >
         </a>
         <figcaption class="xs-cache">{{ $projet->nom }}</figcaption>
       </figure>

       <!-- détails projets -->
       <div id="detailProjet" class="xs12 m6">
         <h1 class="nomProjet xs-contenu-xl s-contenu-xxl m-contenu-xl l-contenu-xxl" style="color:{{ $projet->couleur }}">{{ $projet->nom }}</h1>
         <div class="nombreProjet xs-contenu-s">{{ $projet->id }}/{{ $NbrProjets }}</div>
         <div class="description xs-contenu-xs s-contenu-s m-contenu-xs l-contenu-s">{!! $projet->description !!}</div>
         <div class="bouton">
           <a href="{{ $projet->site }}" target="_blank" >Voir le site</a>
         </div>
       </div>
     </li>

   @endforeach

 </ul>
</div>


 @stop
