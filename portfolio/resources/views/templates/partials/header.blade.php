{{--
    resources/views/templates/partials/header.blade.php
 --}}

 <!-- HEADER -->
   <header id="header" class="boite-fixe-resp">
     <div id="wrapper-header" class="grille-g">
       <!-- Entete -->
       <div id="nom" class="xs6">
         <h1 class="boite-marge-nulle xs-contenu-s contenu-fin">anne collard</h1>
         <h2 class="boite-marge-nulle xs-contenu-s s-contenu-s typewriter">web developer_</h2>
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
         <div class="nom xs-contenu-gauche xs-contenu-s">anne collard</div>
         <div class="web xs-contenu-gauche xs-contenu-xs s-contenu-m m-contenu-l contenu-gras">Web Developer | Web Designer</div>

         <div class="xs12 m4 boite">

           {{-- <div class="xs-contenu-centre dev">
             <i class="fas fa-code"></i>
           </div> --}}
           <div class="titre xs-contenu-xs s-contenu-s contenu-gras">Developpement</div>
           <div class=" padd1">Compétences:</div>
           <div class="contenu-fin xs-contenu-xs s-contenu-s padd2">HTML5, CSS3 (SASS), JQUERY, PHP/MySQL, SQL, POO, FRAMEWORKS, AJAX, WordPress, Responsive Layouts ...</div>
           <div class=" padd1">Outils de conception:</div>
           <div class="contenu-fin xs-contenu-xs s-contenu-s padd2">Atom, Bitbucket, Github, ...</div>
         </div>

         <div class="xs12 m4 boite">
           {{-- <div class="xs-contenu-centre des">
             <i class="fas fa-pencil-alt"></i>
           </div> --}}
           <div class="titre xs-contenu-xs s-contenu-s contenu-gras">Design</div>
           <div class=" padd1">Ce que j'aime concevoir:</div>
           <div class="contenu-fin xs-contenu-xs s-contenu-s padd2">UX, UI, Web, Mobile, Applications, Logos</div>
           <div class=" padd1">Outils de conception:</div>
           <div class="contenu-fin xs-contenu-xs s-contenu-s padd2">Photoshop, Illustrator, InDesign, AdobeXD</div>
         </div>


         <div class="xs12 m4">
           <div class="menu">
             <a class="lien xs-contenu-xs s-contenu-m" href="https://github.com/CollardAnne" target="_blank">Github</a>
             <a class="lien xs-contenu-xs s-contenu-m" href="https://bitbucket.org/%7B51b1a787-e44b-4bea-8849-9c2f0205d4ff%7D/" target="_blank"> Bitbucket</a>
             <div class="contact xs-contenu-xs s-contenu-s">
               <a href="{{ asset('doc/anneCollard_CV.pdf')}}" target="_blank">Téléchargez mon cv</a>
               <a href="mailto:anne.collard.dev@gmail.com">Contactez-moi</a>
             </div>
           </div>

         </div>

         <div class="xs12 m8 boite">
           <div class="contenu-fin xs-contenu-xs s-contenu-s">Etudiante en web développement et webdesign à l’IEPS de Fléron.</div>
           <div class="contenu-fin xs-contenu-xs s-contenu-s"><span class="contenu-gras">Je recherche un stage</span> de 6 à 8 semaines (200 heures) en web développement.</div>
         </div>

       </div>


     </div>

   </header>
