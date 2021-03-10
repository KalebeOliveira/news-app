<div class="row">
    {{--título--}}
    <div class="col-md-6">
        <strong>{{$noticia->titulo}}</strong>
    </div>

    {{--autor--}}
    <div class="col-md-3">
        {{$noticia->autor}}
    </div>

    {{--icones de gestão--}}
    <div class="col-md-3 text-right">

        {{--visibilidade--}}
        @if ($noticia->visivel == 1)
            <a href="/tornar_invisivel/{{$noticia->id_noticia}}">
                <span class="glyphicon glyphicon-eye-open" style="padding-left: 10px"></span>
            </a>
        @else
            <a href="/tornar_visivel/{{$noticia->id_noticia}}">
                <span class="glyphicon glyphicon-eye-close" style="padding-left: 10px; color: #ddd"></span>
            </a>
        @endif

        {{--editar--}}
        <a href="/editar_noticia/{{$noticia->id_noticia}}">
            <span class="glyphicon glyphicon-pencil" style="padding-left: 10px"></span>
        </a>

        {{--apagar--}}
        <a href="/apagar_noticia/{{$noticia->id_noticia}}">
            <span class="glyphicon glyphicon-trash" style="padding-left: 10px"></span>
        </a>
    </div>
</div>
