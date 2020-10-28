<?php

require "model/UsuarioModel.php";

class HomeController {
    public function Index() {
        include "view/Index.php";
    }

    public function Cadastro() {
        include "view/Cadastro.php";
    }

    public function Painel() {
        $model = new UsuarioModel();
        $usuario = $model->UsuarioLogado();
        include "view/Painel.php";
    }
}