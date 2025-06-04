<!-- Guilherme da Silva Bonifácio -->

<?php

class db
{
    private $host = 'localhost';
    private $usuario = 'root';//padrao
    private $senha = '';
    private $database = 'undertale';

    public function conecta_mysql()
    {
        $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

        return $con;
    }
}

?>