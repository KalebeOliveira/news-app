<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticias;
class noticiasController extends Controller
{
    public function index()
    {
        // Vai buscar todas as notícias

        $noticias = noticias::all();
        return view('noticias_index', compact('noticias'));
    }

    public function create()
    {
        // Apresentar o formulário para criar uma nova notícia
        return view('noticias_create');
    }

    public function store(Request $request)
    {
        // Gravação de uma nova notícia na base de dados
        $noticia = new noticias;
        $noticia->titulo = $request->text_titulo;
        $noticia->texto = $request->text_texto;
        $noticia->autor = $request->text_autor;

        // visibilidade
        if (isset($request->check_visivel)){
            $noticia->visivel = 1;
        }
        else
            $noticia->visivel = 0;

        // salvando notícia
        $noticia->save();

        return redirect('/');

    }

    public function show($id)
    {
        //
    }

    public function edit($id_noticia)
    {
        // Apresentar um formulário com a notícia que se quer editar
        $noticia = noticias::find($id_noticia);

        return view('noticias_edit', compact('noticia'));
    }

    public function update(Request $request, $id_noticia)
    {
        // Atualização dos dados da notícia na base de dados
        $noticia = noticias::find($id_noticia);

        //atualizar os campos da base de dados
        $noticia->titulo = $request->text_titulo;
        $noticia->texto = $request->text_texto;
        $noticia->autor = $request->text_autor;

        // Visibilidade
        if (isset($request->check_visivel))
            $noticia->visivel = 1;
        else
            $noticia->visivel = 0;

        // Atualizando os dados da notícia
        $noticia->save();

        return redirect('/gerir_noticias');
    }

    public function destroy($id_noticia)
    {
        // Deletar notícia na base de dados
        noticias::destroy($id_noticia);
        return redirect('/gerir_noticias');
    }

    public function apresentarTabelaGestao()
    {
        // Devolve todas as notícias visíveis e não visíveis
        $noticias = noticias::all();

        return view('noticias_gestao', compact('noticias'));
    }

    public function tornarVisivel ($id_noticia){
        // Vai tornar visivel a notícia que está invisivel
        $noticia = noticias::find($id_noticia);
        $noticia->visivel = 1;
        $noticia->save();

        return redirect('/gerir_noticias');
    }

    public function tornarInvisivel ($id_noticia){
        // Vai tornar invisivel a notícia que está visivel
        $noticia = noticias::find($id_noticia);
        $noticia->visivel = 0;
        $noticia->save();

        return redirect('/gerir_noticias');
    }
}

