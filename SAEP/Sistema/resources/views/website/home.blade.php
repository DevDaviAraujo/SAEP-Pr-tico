@extends('website.index')
@section('conteudo')

<head>
    <style>
        a {
           text-decoration: none; 
        }
        a:hover {
           text-decoration: none; 
        }
    </style>
</head>

<br>
<br>

<div class='container'>
    <div class='card'>
        <h3> Suas Turmas </h3>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($turmas as $valor)
                <tr>
                <th scope="row">{{$valor->id}}</th>
                <td>{{$valor->nome}}</td>
                <td>
                    
                    <a class='tex-white' href="/excluir/turma/{{$valor->id}}"><button class='btn btn-danger'>excluir</button></a>
                    <a class='tex-white' href="/visualizar/{{$valor->id}}"><button class='btn btn-warning text-white'>visualizar</button></a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

    

@endsection
