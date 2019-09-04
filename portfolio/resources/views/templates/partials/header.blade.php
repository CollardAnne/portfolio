{{--
    resources/views/templates/partials/header.blade.php
 --}}

 <!-- HEADER -->
   <header id="header" class="boite-fixe-resp boite-clearfix">
     <div id="wrapper-header">
       <!-- Entete -->
       <div id="nom" class="boite-flottante-gauche">
         <h1 class="boite-marge-nulle xs-contenu-s">anne collard</h1>
         <h2 class="boite-marge-nulle xs-contenu-s typewriter">web developer_</h2>
       </div>

       <!-- MENU -->
       <!-- Menu hamburger -->
       <div id="menu" class="boite-flottante-droite menu-hamburger anim-menu-hamburger">
         <div class="top"></div>
         <div class="center"></div>
         <div class="bottom"></div>
       </div>
     </div>

     <!-- Menu cover -->
     <div class="menu-cover xs-cache">

       <div id="about" class="boite-fixe-resp grille-g">
         <div class="nom xs-contenu-gauche xs-contenu-s">Anne Collard</div>
         <div class="web xs-contenu-gauche xs-contenu-l">Web Developer & Web Designer</div>
         <div class="cv xs6 compte ">
           <div class="titre">Etudes & Formation</div>
           <div class="date">2017 - 2019 : <span class="detail">BES - Web Developer & de Web designer à l’Institut d'Enseignement de Promotion Sociale de Fléron.</span></div>
           <div class="date">1999 - 2002 : <span class="detail">BAC court - Décoration et architecture d'intérieur à l’École supérieure des arts Saint-Luc de Liège.</span></div>
           <div class="titre">Mes comptes</div>
           <a href="https://github.com/CollardAnne">
             <i class="fab fa-github"></i>
           </a>
           <a href="https://bitbucket.org/%7B51b1a787-e44b-4bea-8849-9c2f0205d4ff%7D/">
             <i class="fab fa-bitbucket"></i>
           </a>
         </div>
         <div class="xs6 menu">
           <a class="lien" href="{{ route('projets') }}">Mes projets</a>
           <a class="lien" href="#">Mon cv</a>
         </div>

         <div class="contact">
           Si vous voulez en savoir plus sur moi, mon travail n'hésitez pas à me contacter à <a href="#">collard.anne.j@gmail.com</a>
         </div>
       </div>


     </div>

   </header>
