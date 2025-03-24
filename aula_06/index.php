<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link href="css/style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card p-4 shadow-lg rounded-4" style="width: 400px;">
            <form action="processa.php" method="POST">
                <h1 class="text-center mb-4">Faça login</h1>
                
                <!-- Email input -->
                <div class="mb-3">
                    <label class="form-label" for="form2Example1">Endereço de Email</label>
                    <input type="email" id="form2Example1" class="form-control" name="email" placeholder="ex: aluno@email.com" required/>
                </div>

                <!-- Password input -->
                <div class="mb-3">
                    <label class="form-label" for="form2Example2">Senha</label>
                    <input type="password" id="form2Example2" class="form-control" name="senha" placeholder="ex: 1234" required/>
                </div>

                <div class="text-center">
                    <input type="submit" class="btn btn-lg w-100 custom-btn" value="Entrar">
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>