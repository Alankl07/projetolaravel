<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro de Departamento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/stilo.css')}}" rel="stylesheet">
    <link href="{{asset('css/margem.css')}}" rel="stylesheet">
    <link href="{{asset('css/img.css')}}" rel="stylesheet">
</head>
<body background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQijKKa9dmhq75YRKJSb63j1HPUQWVpqvUiQZ7mCVdWhy_b7BBJQ">
    <div class="row">
        <div class = "col-md-4"></div>
        <div class = "col-md-4">
        <form>
            <h1>Cadastrar Departamento</h1>
            <div class="margem">
                <label for="nome">Nome do Departamento</label>
                <input class="form-control" type="text" id="nome" size=30 >
                <label for="cordenador"> Nome do Cordenador</label>
                <input class="form-control" type="text" id="cordenador" size=30>
                <label for="sala">Sala de Funcionamento</label>
                <input class="form-control" type="text" id="sala" size=30>
                <button class="margemb" type="button">Salvar</button>
            </div>
        </form>
    </div>
    
</body>
</html>