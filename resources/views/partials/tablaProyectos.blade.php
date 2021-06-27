<table class="table text-left table-hover">
    @foreach ($grupo->fichas as $ficha)
    @foreach($ficha->plataformas as $plataforma)
        <tr>
            @if($loop->first)
                <td rowspan="{{count($ficha->plataformas)}}" class="align-middle p-3">
                    <a href="{{route('ficha.show', $ficha->url)}}">
                        {{$ficha->nombre}}
                    </a>
                </td>
                @endif
                <td class="p-2">
                    <img src="{{$plataforma->imagen}}" style="width:20px; height:20px" title="{{$plataforma->nombre}}" /> {{$plataforma->nombre}}
                </td>
                <td class="p-2 text-center">
                    <span class="badge {{getStatusBadge($plataforma->pivot->estado)}} p-1">{{$plataforma->pivot->estado}}</span>
                </td>
                @if($loop->first)
                    <td rowspan="{{count($ficha->plataformas)}}" class="p-3 text-center">
                        Actualizada el {{getUpdatedAtAttribute($ficha->updated_at)}}
                    </td>
                    @endif
        </tr>
        @endforeach
        @endforeach
</table>