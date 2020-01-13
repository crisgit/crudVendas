@extends('layout.site')

@section('titulo', 'Bolsas')

@section('conteudo')
<div class="container">
    <h3 class="center">Editar Registros de Vendas</h3>
        <div class="row">

        <form class="" action="{{route('admin.bolsas.atualizar', $registro->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            @include('admin.bolsasAll._form')

            <button class="btn deep-purple">Atualizar</button>

        </form>

        </div>

</div>


@endsection

