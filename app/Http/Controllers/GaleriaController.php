<?php

namespace App\Http\Controllers;

use App\Models\Galerie;
use Illuminate\Http\Request;

class GaleriaController extends Controller{
    public function galeries(){
        $imatges= Galerie::paginate();
      

        return  view('galeria.galeria',compact('imatges'));
    }
}
