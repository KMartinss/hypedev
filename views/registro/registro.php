<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="registro.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,300&display=swap"
        rel="stylesheet">

    <title>Registre-se</title>
</head>

<body>
    <div class="container">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <header>Registre-se para obter certificados e dar um UP no seu currículo.</header>
                    <hr>

                    <div class="inputs col-sm-12">
                    <form method="post" action="/hypedev-main/cmv/controle/controle_cliente.php">

                      

                        <label for="nome" class="form-label">Nome</label>
                        <input type="nome" class="form-control col-md-6" id="nome" name="nome">

                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control col-md-6" id="email" name="email">

                        <label for="date" class="form-label">Data de Nascimento</label><br>
                            <input type="date" min="2000-01-01" max="2010-01-01" 
                            class="date" id="date" name="date">
                            <br> <br> 

                        <label for="senha" class="form-label">Crie uma senha</label>
                        <input type="password" class="form-control col-md-6" id="senha" name="senha">
                        
                    </div>

                    <div class="col-sm-12">
                        <a href="/hypedev-main/views/login/login.html">
                        <input type="submit" name="salvar" value="salvar" class="btn btn-success">
                        
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