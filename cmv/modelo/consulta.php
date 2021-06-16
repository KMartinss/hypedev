<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Consultar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="../controle/controle_cliente.php" method="POST">
                    <div class="input-group mt-3">
                        <input type="email" class="form-control" name="email" placeholder="Consultar por email" aria-label="Consultar por email" required>
                        <div class="input-group-append">
                            <input type="submit" name="bt_consultar" value="Buscar" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col text-center mt-5">
                <form action='../controle/controle_cliente.php' method='POST'>
                    <div class='form-group form-check-inline'>
                        <div class='col text-center'>
                            <a href='../visao/index.php' class='btn btn-success mr-3' role='button' aria-pressed='true'>Novo cliente</a>
                            <input type='submit' name='bt_listar' value='Listar todos' class='btn btn-primary'>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>