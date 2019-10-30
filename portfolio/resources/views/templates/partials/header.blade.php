{{--
    resources/views/templates/partials/header.blade.php
 --}}

 <!-- HEADER -->
   <header id="header" class="boite-fixe-resp">
     <div id="wrapper-header" class="grille-g">
       <!-- Entete -->
       <div id="nom" class="xs6">
         <h1 class="boite-marge-nulle xs-contenu-s contenu-fin">anne collard</h1>
         <h2 class="boite-marge-nulle typewriter">web developer_</h2>
       </div>

       <!-- MENU -->
       <!-- Menu hamburger -->
       <div id="menu" class="xs6 menu-toggle xs-contenu-xs">
         <div class="profil active">profil</div>
         <div class="projet">projets</div>
       </div>
     </div>

     <!-- Menu cover -->
     <div class="menu-cover xs-cache">

       <div id="about" class="boite-fixe-resp grille-g">
         <div class="nom xs-contenu-gauche xs-contenu-s">Anne Collard</div>
         <div class="web xs-contenu-gauche xs-contenu-l contenu-gras">Web Developer | Web Designer</div>

         <div class="xs4 boite">
           {{-- <i class="fas fa-pencil-alt"></i> --}}
           <div class="titre"><i class="fas fa-pencil-alt"></i> Designer</div>
           <div class="contenu-gras padd1">Ce que j'aime concevoir:</div>
           <div class="contenu-fin xs-contenu-s padd2">UX, UI, Web, Mobile, Applications, Logos</div>
           <div class="contenu-gras padd1">Outils de conception:</div>
           <div class="contenu-fin xs-contenu-s padd2">Photoshop, Illustrator, InDesign, AdobeXD</div>
         </div>
         <div class="xs4 boite">
           {{-- <i class="fas fa-code"></i> --}}
           <div class="titre"><i class="fas fa-code"></i> Developer</div>
           <div class="contenu-gras padd1">Compétences:</div>
           <div class="contenu-fin xs-contenu-s padd2">HTML5, CSS3 (SASS), JQUERY, PHP/MySQL, SQL, POO, FRAMEWORKS, AJAX, WordPress, Responsive Layouts ...</div>
           <div class="contenu-gras padd1">Outils de conception:</div>
           <div class="contenu-fin xs-contenu-s padd2">Atom, Bitbucket, Github, ...</div>
         </div>
         <div class="xs1"></div>
         <div class="xs3 menu">
           <a class="lien" href="#">Github</a>
           <a class="lien" href="#"> Bitbucket</a>
           <div class="contact">
             <a href="#">Télécharger mon cv</a>
             <a href="#">Contactez-moi</a>
           </div>
         </div>

       </div>


     </div>

   </header>
