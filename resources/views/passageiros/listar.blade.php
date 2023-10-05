<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Listar Passageiros</title>
</head>
<body>
    <div class="container">
        <h3>Listagem de Passageiros</h3>
        <a href="{{ route('passageiros.novo') }}" class="btn btn-success">Incluir +</a>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>CPF</th>
                    <th>Passporte</th>
                </tr>   
            </thead>
            <tbody>
                <!-- LAÇO DE REPETIÇÃO PARA EXIBIR OS REGISTROS DO BANCO --> 
                @foreach ($dados as $linha)
                <tr>
                    <td>{{ $linha->id }}</td>
                    <td>{{ $linha->nome }}</td>
                    <td>{{ $linha->sobrenome }}</td>
                    <td>{{ $linha->cpf }}</td>
                    <td>{{ $linha->passaporte }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>