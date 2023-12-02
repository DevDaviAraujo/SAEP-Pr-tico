@extends('website.index')
@section('conteudo')

<br>
<br>
<center>
<div class='container'>
    <div class='card' style='width: 300px;'> <br>
        
        <h3> Cadastrar Atividade </h3>
        <form action="/cadastrar/atividade" method='post'>

            Nome: <br>
            <input type="text" name='nome' required > <br> <br>

            Descrição: <br>
            <textarea name="descricao" id="" cols="30" rows="10"></textarea> <br> <br>

            Turma: <br>
            <select name='idTurmas'>
                @foreach($turmas as $valor)
                <option value="{{$valor->id}}">{{$valor->nome}}</option>
                @endforeach
            </select> <br> <br>
            
            {!! csrf_field() !!}

            <input type="submit" class='btn btn-primary'><br> <br>

        </form>
    
    </div>

</div>
</center>
    

@endsection