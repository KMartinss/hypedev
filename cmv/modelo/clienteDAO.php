<?php
include_once('../modelo/conexao.php');
class clienteDAO
{
    function inserir($nome, $email, $date, $senha)
    {
      try {
        $pdo = new PDO('mysql:host=localhost;dbname=hypebd', "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->prepare('INSERT INTO usuario (nome, email, senha, date) VALUES(
   :nome, :email, :senha, :date)');
            $stmt->execute(array(
                ':nome' => "$nome", ':email' => "$email", ':senha' => "$senha", ':date' => "$date"
            ));
            echo "<script>alert('Cadastrado com sucesso!'); window.location = '/hypedev-main/views/login/login.php';</script>";
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    } 
//pt 2
    function inserir2($hora, $cert, $datep, $nomec, $cpf)
    {
      try {
        $pdo = new PDO('mysql:host=localhost;dbname=hypebd', "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->prepare('INSERT INTO agendamento (hora, cert, datep, nomec, cpf) VALUES(
   :hora, :cert, :datep, :nomec, :cpf)');
            $stmt->execute(array(
                ':hora' => "$hora", ':cert' => "$cert", ':datep' => "$datep", ':nomec' => "$nomec", ':cpf' => "$cpf"
            ));
            echo "<script>alert('Cadastrado com sucesso!'); window.location = '/hypedev-main/views/agendamento/agendamento.html';</script>";
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    } 

    function listar()
    {

        $pdo = new PDO("mysql:host=localhost;dbname=hypebd", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $consulta = $pdo->query("SELECT id, hora, cert, datep, nomec, cpf FROM agendamento");
        echo " <!doctype html>";
        echo "<html lang='pt-br'>";
        echo "<head>";
        echo " <meta charset='utf-8'>";
        echo " <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>";
        echo "<title>Clientes</title>";
        echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css'>";
        echo "</head>";
        echo "<body class='container'>";
        echo "<h2>Lista de Agendamentos</h2>";
        echo "<table class='table table-striped mt-3'>";
        echo "<tr>
          <th>Id</th>
          <th>Hora</th>
          <th>Certificado</th>
          <th>Data</th>
          <th>Nome</th>
          <th>Cpf</th>
          </tr>";
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $linha['id'] . "</td>";
            echo "<td>" . $linha['hora'] . "</td>";
            echo "<td>" . $linha['cert'] . "</td>";
            echo "<td>" . $linha['datep'] . "</td>";
            echo "<td>" . $linha['nomec'] . "</td>";
            echo "<td>" . $linha['cpf'] . "</td>";
            echo "<td> <form method='post' action='../controle/controle_cliente.php'> "
                . "<input class='btn btn-outline-primary mr-3' type='submit' name='botao_editar' value='Editar'>"
                . "<input class='btn btn-outline-danger' type='submit' name='botao_excluir'id value='Excluir'>"
                . " <input type='hidden' name='id' value = '" . $linha['id'] . "'/></form> </td>";
            echo "</tr>";
        }
        echo " </table>";
        echo "<form action='../controle/controle_cliente.php' method='POST'>";
        echo "<div class='form-group form-check-inline'>";
        echo "<div class='col'>";
        echo "<a href='../modelo/consulta.php' class='btn btn-primary mr-3' role='button' aria-pressed='true'>Voltar</a>";
        echo "<a href='/hypedev-main/views/agendamento/agendamento.html' class='btn btn-success mr-3' role='button' aria-pressed='true'>Novo cliente</a>";
        echo "</div></div></form>";
        echo "</body></html>";
    }

    function buscarCliente($email)
    {
        include_once("../modelo/consulta.php");
        include_once("../modelo/cliente.php");

        $pdo  = new PDO("mysql:host=localhost;dbname=hypebd", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $consulta = $pdo->query("SELECT id, nomec, datep, hora FROM agendamento WHERE email = '$email'");
        $total_retornado = $consulta->rowCount();


        if ($total_retornado  === 0) {
            echo "<script>alert('não econtrado')</script>";
        } else {
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $cliente = new Cliente($linha['id'], $linha['nomec'], $linha['datep'], $linha['hora']);

                echo "<table class='table table-striped mt-3'>";
                echo "<tr>
          <th>Id</th>
          <th>Nome</th>
          <th>Email</th>
          <th>Sexo</th>
          <th>Ações</th>
          </tr>";
                echo "<tr>";
                echo "<td>" . $cliente->getId() . "</td>";
                echo "<td>" . $cliente->getNomec() . "</td>";
                echo "<td>" . $cliente->getDatep() . "</td>";
                echo "<td>" . $cliente->getHora() . "</td>";
                echo "<td> <form method='post' action='../controle/controle_cliente.php'> "
                    . "<input class='btn btn-outline-primary mr-3' type='submit' name='botao_editar' value='Editar'>"
                    . "<input class='btn btn-outline-danger' type='submit' name='botao_excluir' value='Excluir'>"
                    . " <input type='hidden' name='id' value = '" . $linha['id'] . "'/></form> </td>";
                echo " </table>";
            }
        }
    }

    function excluir($id)
 {
    try {
     $pdo  = new PDO("mysql:host=localhost;dbname=hypebd", "root", "");
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     $delete =  $pdo->prepare("DELETE FROM agendamento WHERE id = '$id'");
     $delete->execute();

     echo "<script>alert('" .  $delete->rowCount() .
          " Usuário deletado com sucesso!');" .
          " window.location = '/hypedev-main/index.html';</script>";
       } catch (PDOException $e) {
           echo 'Error: ' . $e->getMessage();
       }
   }

   function Editar($id) {
    try {
        $pdo  = new PDO("mysql:host=localhost;dbname=hypebd", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $consulta = $pdo->query("SELECT id, nomec, datep, hora FROM agendamento WHERE id = '$id'");
 
    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
       session_start();
       include_once("hypedev-main/cmv/modelo/cliente.php");
       $cliente = new Cliente($linha['id'], $linha['nomec'], $linha['datep'], $linha['hora']);
       $_SESSION['obj_cliente'] = serialize($cliente);
 header("location:/hypedev-main/cmv/modelo/editar.php");
     }
       } catch (PDOException $e) {
           echo 'Error: ' . $e->getMessage();
         } }

         
function salvarEdicao($id, $nomec, $datep, $hora){
    try {
        $pdo  = new PDO("mysql:host=localhost;dbname=hypebd", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     $editar = $pdo->query("UPDATE agendamento SET nomec ='$nomec', datep='$datep',hora ='$hora' WHERE id = '$id'");
     $editar->execute();
      echo "<script>alert('Alterado com sucesso!');</script>";
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}


}
