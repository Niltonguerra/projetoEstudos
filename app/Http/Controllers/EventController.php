<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//conecta o model com o controller
use App\Models\Event;


class EventController extends Controller
{
    //
    public function aula08(){

    // você passa para pela url algo assim :
    // e depois puxa a informação da url pelo request
    $busca = request('search');
    $events = Event::all();


    return view('aula08',[
                        'busca' => $busca,
                        'events' => $events

                        ]);

}


public function aula15(){
    return view('aulas.aula15');
}







//botão cadastrar informações no banco
public function store(request $request){
//o formulario é armazenado dentro desse request

//instaciando o model
    $event = new Event();

    //enviado as informações do formulário para as variáveis do model
    $event->title = $request->title;
    $event->city = $request->city;
    $event->private = $request->private;
    $event->description = $request->description;


    //tratamento de imagem
    if($request->hasFile('image') && $request->file('image')->isValid()){
        //extanciando o variavel apenas para escrever menos código
        $requestImage = $request->image;

        // verifica a extensão do arquivo
        $extension = $requestImage->extension();

        // codificar o nome do arquivo
        $imageName =md5($requestImage->getClientOriginalName().strtotime("now")) . "." .$extension;

        // salva a imagem no servidor no diretório img/events
        $requestImage->move(public_path('img/events'), $imageName);

        //setando a variavel para enviar para o servidor
        $event->image = $imageName;
    }


    //enviando as informações para o banco de dados
    $event ->save();

    return redirect('/aula15')->with('msg',"Evento cadastrado com sucesso");

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
