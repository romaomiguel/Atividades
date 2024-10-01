<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos</title>
</head>
<body>
    <h1>Lista de Alunos</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <ul>
        @foreach($alunos as $aluno)
            <li>{{ $aluno->nome }} - {{ $aluno->email }} - {{ $aluno->data_nascimento }}</li>
        @endforeach
    </ul>

    <a href="{{ route('alunos.create') }}">Cadastrar Novo Aluno</a>
</body>
</html>
