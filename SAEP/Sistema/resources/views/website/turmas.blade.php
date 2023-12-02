@extends('website.index')
@section('conteudo')

<br>
<br>
<center>
<div class='container'>
    <div class='card' style='width: 300px;'> <br>
        
        <h3> Cadastrar Turmas </h3>
        <form action="/cadastrar/turma" method='post'>

            Nome: <br>
            <input type="text" name='nome' required > <br> <br>

            {!! csrf_field() !!}

            <input type="submit" class='btn btn-primary'><br> <br>

        </form>
    
    </div>

</div>
</center>
    

@endsection