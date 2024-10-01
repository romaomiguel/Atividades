<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos</title>
</head>
<body>
    <h1>Lista de Alunos</h1>
    <ul>
        @foreach($alunos as $aluno)
            <li>{{ $aluno->nome }}</li> <!-- Substitua 'nome' pelo campo desejado -->
        @endforeach
    </ul>
</body>
</html>
