@extends('layout.site')

@section('titulo', 'Bolsas')

@section('conteudo')
<div class="container">
    <h3 class="center">Adicionar Venda</h3>
        <div class="row">

        <form class="" action="{{route('admin.bolsas.salvar')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include('admin.bolsasAll._form')

            <button class="btn deep-purple">Salvar</button>

        </form>

        </div>

</div>


@endsection

