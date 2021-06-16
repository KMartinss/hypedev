<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,300&display=swap"
        rel="stylesheet">

    <title>Login</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8">

                <div class="text-apresentation">
                    <p style="font-weight: 300;">HypeDev</p>

                    <p style="font-size: 2rem;">Sua certificação na palma da sua mão.</p>
                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <header>Login</header>
                        <hr>
                        
                        
                        <input class="form-control" type="text" name="email" placeholder="Email" aria-label="default input example">
                        <input class="form-control" type="password" name="senha" placeholder="Senha" aria-label="default input example">

                        <a href="/hypedev-main/index.html"> 
                            <button type="submit" class="btn" value="validar">Entrar</button>
                            
                        </a>

                        <center>
                            <p>Não tem uma conta?</p>

                        </center>

                        <a href="/hypedev-main/views/registro/registro.php">
                            <button type="button" class="btn">Registrar</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>