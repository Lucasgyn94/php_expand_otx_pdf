<?php
require_once('../src/conexao.php');

class Login {
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function autenticar() {
        $conn = conectar_banco_de_dados();

        // preparação da consulta
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuario = ?");
        $stmt->bind_param("s", $this->username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if (password_verify($this->password, $row['senha'])) {
                $_SESSION['loggedin'] = true; 
                header('Location: dashboard.php');
                exit();
            }
        };

        return "Usuário ou senha inválidos";

    }

}