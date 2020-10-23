<?php

namespace controllers;

class Controlador
{
    public $nombre;
    public $edad;

    public function __construct()
    {
        $this->nombre = $_POST['nombre'];
        $this->edad = $_POST['edad'];
    }

    public function saludar()
    {
        session_start();
        if (!is_numeric($this->edad)) {
            $_SESSION['msg'] = "La edad debe ser numerica";
            header("Location: ../form.php");
            return;
        }

        $resp = "Hola $this->nombre tienes $this->edad años";
        //enviar la resp

        $_SESSION['msg'] = $resp;
        header("Location: ../form.php");
    }
}

$obj = new Controlador();
$obj->saludar();
