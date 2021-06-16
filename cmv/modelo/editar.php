<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="agendamento.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type='text/css' href="css/style.css">
    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800'>
    <link rel="stylesheet" type='text/css'
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <title>HypeDev</title>
</head>

<body>
    <style>body {
  font-family: "Poppins", sans-serif;
  background-color: #dfdfdf;
  /* overflow: hidden; */
  font-weight: 100;
  margin: 0;
  padding: 0;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

nav {
  background-color: #398191;
  margin-top: 40px;
  height: 90px;
}

nav .header-menu {
  font-weight: 200;
  margin-right: auto;
  margin-left: auto;
}

nav .header-menu a {
  color: #ffffff !important;
  font-size: 1.5rem;
  margin-left: 20px;
  text-decoration: none;
}

nav .header-menu a:hover {
  cursor: pointer;
  color: #e4e4e4 !important;
}

#main {
  margin-top: 40px;
  padding-bottom: 50px;
}

.card {
  border-radius: 10px;
  box-shadow: 2px 2px 2px rgb(0 0 0 / 45%);
  margin-bottom: 20px;
  background-color: #ffffffc7;
}

.card:hover {
  background-color: #ffffff;
  cursor: pointer;
}

.card img {
  width: 50px;
  height: 40px;
}

#footer {
  background-color: #398191;
  position: absolute;
  width: 100%;
  margin-top: 40px;
  height: 60px;
  color: #ffffff;
}

#footer p {
  margin-top: 22px;
}

#logo {
  width: 100px;
  height: 100px;
  margin-top: 13px;
}
</style>
<?php
    include_once("../modelo/cliente.php");
    session_start();
    $id = unserialize($_SESSION['obj_cliente'])->getId();
    $nomec = unserialize($_SESSION['obj_cliente'])->getNomec();
    $datep = unserialize($_SESSION['obj_cliente'])->getDatep();
    $hora = unserialize($_SESSION['obj_cliente'])->getHora();
    ?>

    <nav class="navbar navbar-expand-sm">
        <div class="container">
            <section class="header-menu">
                <a href="/hypedev-main/views/certificados/certificados.html">Meus certificados</a>
                <a href="./agendamento.html">Agendamentos</a>
                <a href="./views/sobrenos/sobrenos.html"> Sobre nós</a>
            </section>
        </div>
    </nav>

               
    <section id="main">
        <div class="container">
            <h3>Editar agendamento</h3>

            <div class="row">
            <form method='post' action="/hypedev-main/cmv/controle/controle_cliente.php">
                <div class="col-md-4">
                    <label for="datep">Data Da Prova</label>
                    <input type="date" class="form-control" id="datep" name="datep" value="<?php echo $datep ?>">
                </div><br>


                <div class="col-md-4">
                    <select class="form-select" aria-label="Default select example" for="hora"
                    type="hora" id="hora" name="hora" value="<?php echo $hora ?>"> 
                        <option selected>Horário desejado</option>
                        <option value="10:00">10:00</option>
                        <option value="11:00">11:00</option>
                        <option value="12:00">12:00</option>
                        <option value="13:00">13:00</option>
                        <option value="14:00">14:00</option>
                        <option value="15:00">15:00</option>
                        <option value="16:00">16:00</option>
                        <option value="17:00">17:00</option>
                        <option value="18:00">18:00</option>
                        <option value="19:00">19:00</option>
                        <option value="20:00">20:00</option>
                    </select>
                </div>

                <div class="form-group row">
                <div class="col">
                <label for="nomec" class="form-label">Nome</label>
                <input type="nome" id="nomec" name="nomec" value="<?php echo $nomec ?>">
                </div>
                </div>
            
        <div class="form-group form-check-inline">
            

        <div class="form-group">
                <div class="col-12">
                    <input type='hidden' name='id' value="<?php echo $id ?>" />
                    <input type="submit" name="salvar_alteracao" value="Salvar Alteração" class="btn btn-success mr-2">
                    <input type='submit' name='bt_listar' value='Listar todos' class='btn btn-primary'>
                    <a href='../visao/index.php' class='btn btn-warning mr-2' role='button'>Novo cliente</a>
                </div>
            </div>

        </form>
    </div>
    </section>


    <section id="footer">
        <div class="container">
            <center>
                <p> Copyright | 2021 </p>
            </center>
        </div>
    </section>


    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
    <script type="text/javascript" src="/js/calendar.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>