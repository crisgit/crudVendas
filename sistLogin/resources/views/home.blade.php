@extends('layout.site')

@section('titulo', 'Comércio')

@section('conteudo')
<div class="container">
    <h3 class="center">Catálogo</h3>
<div class="row">

    @foreach($bolsas as $bolsa)
    <div class="col s12 m6">
      <div class="card">
        <div class="card-image">
          <img src="{{asset($bolsa->imagem)}}">
          <span style="background-color: red;" class="card-title">R$ {{$bolsa->valor}}</span>
        </div>
        <br>
        <div class="card-content">
          <h4>{{$bolsa->tipo}}</h4>
          <p>{{$bolsa->descricao}}</p>
        </div>
        <div class="card-action">
          <a href="#">Ver mais...</a>
        </div>
      </div>
    </div>
    @endforeach

</div>

    <div style="color:white;" class="row" >

        {{$bolsas->links()}}

    </div>

</div>


@endsection

