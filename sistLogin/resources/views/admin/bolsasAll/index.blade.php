@extends('layout.site')

@section('titulo', 'Comércio')

@section('conteudo')
<div class="container">
    <h3 class="center">Lista de Vendas</h3>
        <div class="row">
            <table>
                <thead style="background-color: #cccccc;">
                <tr>
                <th>Id</th>
                <th>Tipo</th>
                <th>Descrição</th>
                <th>Valor</th>
                </tr>
            </thead>

            <tbody>
            @foreach($registros as $registro)
                <tr>
                <td> {{ $registro->id }}</td>
                <td> {{ $registro->tipo }}</td>
                <td> {{ $registro->descricao }}</td>
                <td> R$ {{ $registro->valor }}</td>
                </tr>
            @endforeach
            </tbody>
            </table>


            <table>
            <thead style="background-color: #cccccc;">
                <tr>
                <th>Id</th>
                <th>Imagem</th>
                <th>Publicado</th>
                <th>Ação</th>
                </tr>
            </thead>

            <tbody>
            @foreach($registros as $registro)
            <tr>
                <td> {{ $registro->id }}</td>
                <td><img width="100" height="50" src="{{asset($registro->imagem)}}" alt="{{ $registro->tipo }}" /></td>
                <td> {{ $registro->publicado }}</td>
                <td>
                <a class="btn deep-purple" href="{{route('admin.bolsas.editar', $registro->id)}}">Editar</a>
                <br><br>
                <a class="btn red" href="{{route('admin.bolsas.deletar', $registro->id)}}">Deletar</a>
                </td>
            </tr>
            @endforeach
            </tbody>
            </table>

        </div>

        <div class="row">
        <a style="margin: 20px;" class="btn blue" href="{{ route('admin.bolsas.adicionar') }}">Adicionar</a>
        </div>

</div>


@endsection

