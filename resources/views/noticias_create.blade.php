@extends('layouts.app')

@section('conteudo')
        {{--Apresenta formulário para criação de uma nova notícia--}}
        <form method="post" action="/salvar_noticia">
            {{csrf_field()}}

            <h3>Nova notícia</h3>

            {{--Título da notícia--}}
            <div class="form-group">
                <lavel for="titulo">Título:</lavel>
                <input type="text" class="form-crontol" name="text_titulo" id="titulo" style="width: 100%" placeholder="Digite o título da nova notícia" required>
            </div>

            {{--Texto da notícia--}}
            <div class="form-group">
                <lavel for="texto">Texto:</lavel>
                <textarea class="form-control" id="texto" name="text_texto" placeholder="Digite o texto da notícia" rows="5" required></textarea>
            </div>

            {{--Autor da notícia--}}
            <div class="form-group">
                <lavel for="autor">Autor:</lavel>
                <input type="text" class="form-crontol" name="text_autor" id="autor" style="width: 100%" placeholder="Digite o autor da nova notícia" required>
            </div>

            {{-- Visibilidade da notícia --}}
            <div class="form-group text-center">
                <input type="checkbox" name="check_visivel" checked> Notícia visivel.
            </div>

            {{--Submeter o formulário--}}
            <div class="text-center">
                <button class="btn btn-primary" role="submit">Salvar</button>
            </div>
        </form>
@endsection
