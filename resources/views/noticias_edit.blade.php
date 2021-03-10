@extends('layouts.app')

@section('conteudo')
    {{--Apresenta formulário para edição de uma nova notícia--}}

    <form method="post" action="/atualizar_noticia/{{$noticia->id_noticia}}">
        {{csrf_field()}}

        <h3>Editar notícia</h3>

        {{--Título da notícia--}}
        <div class="form-group">
            <lavel for="titulo">Título:</lavel>
            <input type="text" class="form-crontol" name="text_titulo" id="titulo" style="width: 100%" value="{{$noticia->titulo}}" required>
        </div>

        {{--Texto da notícia--}}
        <div class="form-group">
            <lavel for="texto">Texto:</lavel>
            <textarea class="form-control" id="texto" name="text_texto" rows="5" required>{{$noticia->texto}}</textarea>
        </div>

        {{--Autor da notícia--}}
        <div class="form-group">
            <lavel for="autor">Autor:</lavel>
            <input type="text" class="form-crontol" name="text_autor" id="autor" style="width: 100%" value="{{$noticia->autor}}" required>
        </div>

        {{-- Visibilidade da notícia --}}
        <div class="form-group text-center">
            @if ($noticia->visivel == 1)
                    <input type="checkbox" name="check_visivel" checked> Notícia visivel.
            @else
                    <input type="checkbox" name="check_visivel"> Notícia visivel.
            @endif
        </div>

        {{--atualizar o formulário--}}
        <div class="text-center">
            <button class="btn btn-primary" role="submit">Atualizar</button>
        </div>
    </form>
@endsection
