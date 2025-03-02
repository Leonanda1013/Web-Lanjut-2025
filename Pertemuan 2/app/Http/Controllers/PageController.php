<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function lala()
   {
    return 'Selamat Datang';
   }

   public function about(){
    return 'Vincentius Leonanda 2341720149';
   }

   public function articles($id){
    return 'Halaman Artikel dengan ID '.$id;
   } 
}
