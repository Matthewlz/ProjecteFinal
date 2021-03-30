<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivitatController extends Controller{

    public function home(){
        return  view('activitats.home');
    }

    public function tennis(){
        return  view('activitats.tennis');
    }

    public function pàdel(){
        return  view('activitats.pàdel');
    }

    public function casal(){
        return  view('activitats.casal');
    }

    public function calendari(){
        return  view('activitats.calendari');
    }
    public function torneig(){
        return  view('activitats.torneig');
    }
}   
