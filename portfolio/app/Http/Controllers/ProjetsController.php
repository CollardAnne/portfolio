<?php
       namespace App\Http\Controllers;
       use App\Projet as ProjetsMdl; // Fait appel au modèle projet
       // use App\Http\Models\Projet as ProjetsMdl; // Fait appel au modèle projet
       use Illuminate\Support\Facades\View;

       class ProjetsController extends Controller {

         // public function index(){
         //   $projets = ProjetsMdl::paginate(1);
         //   $NbrProjets = ProjetsMdl::count();
         //   return View::make('projets.index', ['projets' => $projets, 'NbrProjets' => $NbrProjets ]);
         // }
         public function index(){
           $projets = ProjetsMdl::get();
           $NbrProjets = ProjetsMdl::count();
           return View::make('projets.index', ['projets' => $projets, 'NbrProjets' => $NbrProjets ]);
         }


       }
