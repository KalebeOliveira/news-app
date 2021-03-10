@extends('layouts.app')

@section('conteudo')

    {{--  verifica se existem notícias--}}
    @if (count($noticias) == 0)
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
                <p class="alert alert-danger">Não foram encontradas notícias</p>
            </div>
        </div>
    @else
        @foreach($noticias as $noticia)
            @include('inc.linha_noticia')
        @endforeach
    @endif
@endsection
