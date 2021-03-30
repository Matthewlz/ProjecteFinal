<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FormulariController extends Controller{
    public function register(){
        return  view('formularis.register');
    }
    /**
     * Funcio on li paso el request del formulari i si compleix les condicions
     * de que no estigui repetit el email a la BD i la contrasenya sigui la mateixa que la 
     * contrasenya de confirmació s'incereix a la BD
     */
    public function store(Request $request){

       $request->validate([
           'name'=>'required|min:3',
           'email'=>'required',
           'password'=>'required|min:10',
           'passwordC'=>'required|min:10'
       ]);

        $users = User::all();
        $user= new User();
        $repetit=false;
        $passwordV=false;

        $user->name= $request->name;
        $user->email= $request->email;
        $user->password= $request->password;

        if($request->password==$request->passwordC){
            $passwordV=true;
        }

        foreach($users as $usuari) { 

            if($usuari->email==$user->email){
                $repetit=true;
            } 
        }
        if($repetit==false && $passwordV==true){
            $user->save();
            return redirect()->route('home');
        }else{
            return redirect()->route('register');
        }
    

   
        
     
     
     
    }
}
