<html lang="en">
<head>
<meta charset="utf-8">
<title>Cadastrar Novo(a) Usuário(a)</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-
+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="processa_cad.php" method="post">
            <div class="col-4">
                <label for="name">Nome Completo</label>
                <input type="text" name="name" id="nome" class="form-control">
            </div>
            <div class="col-4">
                <label for="dataNascimento">Data de Nascimento</label>
                <input type="date" value="1980-01-01" name="dataNascimento" id="dataNascimento" class="form-control">
            </div>
            <div class="col-4">
                <label for="telefone">Telefone Para contato</label>
                <input type="tel" name="telefone"id="telefone" class="form-control">
            </div>
            <div class="col-4">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="col-4">
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>

            <button type="submit" name="enviarDados" class="btn btn-primary">Cadastrar-se</button>
            <a href="index.php" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
</body>
</html>