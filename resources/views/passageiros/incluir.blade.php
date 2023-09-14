<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Cadastro de Passageiros</title>
</head>
<body>
    <div class="container">
        <h3>Cadastro de Passageiros</h3>

        @if (session('mensagem') !== null)
            <div class="alert alert-success">
                <p style="color:green;">{{ session('mensagem') }} - Id: {{ session('id') }}</p>
            </div>
        @endif
        <form action="{{ route('passageiros.incluir') }}" method="post" class="form form-control">
            @csrf
            <label for="">Nome</label><br>
            <input type="text" name="nome" id="" class="form-control"><br>

            <label for="">Sobrenome</label><br>
            <input type="text" name="sobrenome" id="" class="form-control"><br>

            <label for="">CPF</label><br>
            <input type="text" name="cpf" id="" class="form-control"><br>

            <label for="">Passaporte</label><br>
            <input type="text" name="passaporte" id="" class="form-control"><br>

            <input type="submit" value="Salvar" class="btn btn-success">
        </form>
    </div>
</body>
</html>