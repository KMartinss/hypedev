<?php
class Cliente
{
    private $id;
    private $nome;
    private $email;
    private $date;
    private $senha;
    private $hora;
    private $cert;
    private $datep;
    private $nomec;
    private $cpf;

    function __construct($nome, $email, $data, $senha)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->date = $date;
        $this->senha = $senha;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

function _construct($id, $hora, $cert, $datep, $nomec, $cpf)
{
    $this->id = $id;
    $this->hora = $hora;
    $this->cert = $cert;
    $this->datep = $datep;
    $this->nomec = $nomec;
    $this->cpf = $cpf;
}

    public function getId()
    {
        return $this->id;
    }

    //o outro
    public function getHora()
    {
        return $this->hora;
    }

    public function setHora($hora)
    {
        $this->hora = $hora;
    }
//2
    public function getCert()
    {
        return $this->cert;
    }

    public function setCert($cert)
    {
        $this->cert = $cert;
    }
//3
    public function getDatep()
    {
        return $this->datep;
    }

    public function setDatep($datep)
    {
        $this->datep = $datep;
    }
//4
    public function getNomec()
    {
        return $this->nomec;
    }

    public function setNomec($nomec)
    {
        $this->nomec = $nomec;
    }
//5
    public function getCpf()
    {
    return $this->cpf;
    }

    public function setCpf($cpf)
    {
    $this->cpf = $cpf;
}


}