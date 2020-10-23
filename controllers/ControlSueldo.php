<?php

namespace controllers;

class ControlSueldo
{
    public $sueldo;
    public $desc;

    public function __construct()
    {
        $this->sueldo = $_POST['sueldo'];
        $this->desc = $_POST['desc'];
    }

    public function calcular()
    {
        session_start();
        if (!is_numeric($this->sueldo)) {
            $_SESSION['respuesta'] = "Sueldo debe ser un numero";
            header("Location: ../form_sueldo.php");
            return;
        }

        $descuento = $this->sueldo * $this->desc;
        $sueldo_final = $this->sueldo - $descuento;

        $_SESSION['respuesta'] = "Sueldo Liquido: $$sueldo_final, descuento:$$descuento";
        header("Location: ../form_sueldo.php");
    }
}
//llamar al calcular
$obj = new ControlSueldo();
$obj->calcular();
