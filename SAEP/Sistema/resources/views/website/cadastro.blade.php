<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body class='bg-dark'>

<br><br><br>

<div class='container'>
    <center>
        <div class='card' style='height: 300px; width: 400px;'> <br>

            <h3>Cadastro</h3>

            <form action="/cadastrar/professor" method='post'>

            E-mail: <br>
            <input type="text" name='email' required > <br>

            Senha: <br>
            <input type="text" name='password' required> <br><br>

            {!! csrf_field() !!}

            <input type="submit" class='btn btn-primary'><br> <br>
            <a href="/login"> Voltar </a>
            </form>

        </div>  
    </center>
</div>


    
</body>
</html>