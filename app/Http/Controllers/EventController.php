<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function aula08(){

    // você passa para pela url algo assim :
    // e depois puxa a informação da url pelo request
     $busca = request('search');



    return view('aula08',[
                        'busca' => $busca
                        ]);

}






public function create(){
    return view('events.create');
}

public function contatos(){
    return view('contatos.contatos');


}public function produtos(){
    return view('produtos.produtos');
}


}
