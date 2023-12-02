@extends('website.index')
@section('conteudo')

<br>
<br>

<div class='container'>
    <div class='card'>
        <h3> Suas Atividades da turma {{$turma->nome}} </h3>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                </tr>
            </thead>
            <tbody>
                @foreach($atividades as $valor)
                <tr>
                <th scope="row">{{$valor->id}}</th>
                <td>{{$valor->nome}}</td>
                <td>{{$valor->descricao}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

    

@endsection