{{-- PÁGINA INICIAL - apresenta as notícias visíveis --}}
@extends('layouts.app')

@section('conteudo')
    @if (count($noticias) == 0)
        {{-- Não existem notícias --}}
        <div class="row">
            <div class="col-md-4 text-center col-md-offset-4">
                <p class="alert alert-danger">Não foram encontradas notícias.</p>
            </div>
        </div>

    @else
        {{--Contador de notícias visíveis--}}
        @php
            $total = 0
        @endphp

        {{-- Existem notícias --}}
        @foreach ($noticias as $noticia)

            {{-- Verifica se a nóticia está visivel e só apresenta as notícias que estão visíveis --}}
            @if ($noticia->visivel == true)

                {{-- Cabeçalho da notícia (título, autor, update-at) --}}
                <div class="row bg-info">

                    {{--Título--}}
                    <div class="col-md-9">
                        <h2>{{$noticia->titulo}}</h2>
                    </div>

                    {{-- Autor e hora da atualização --}}
                    <div class="col-md-3 text-right" style="padding-top: 15px">
                        <span class="glyphicon glyphicon-pencil"></span> {{$noticia->autor}}</br>
                        <span class="glyphicon glyphicon-time"></span> {{$noticia->updated_at->diffForHumans()}}
                    </div>
                </div>

                {{-- Corpo da notícia --}}
                <div class="row">
                    <div class="col-md-12" style="padding-top: 20px ">
                        {{$noticia->texto}}
                    </div>
                </div>

                {{--Separador entre as notícias--}}
                <hr>

                {{-- Somando total de noticias visíveis --}}
                @php
                    $total++;
                @endphp
            @endif
        @endforeach

        {{-- Apresenta o número de notícias visíveis --}}
        <div class="row">
            <div class="col-md-12 text-right">
                <p>Nº de notícias visíveis: {{$total}}</p>
            </div>
        </div>
    @endif
@endsection
