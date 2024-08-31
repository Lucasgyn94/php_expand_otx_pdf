<?php

    function conectar_banco_de_dados() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "expand_ofx_db";

        $conn = new mysqli($servername,$username, $password, $dbname);
        
        if ($conn->connect_error) {
            die("Falha na conexão com o banco de dados" . $conn->connect_error);
        }

        return $conn;
    }

?>