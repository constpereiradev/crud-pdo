<?php

//incluindo o autoload para chamar as classes
require __DIR__.'/vendor/autoload.php';

//chamando a class Usuario{}
use \App\Entity\Usuario;

//validando os dados

if (isset($_POST['nome'], $_POST['email'], $_POST['senha'])){

    $obUsuario = new Usuario;

    $obUsuario->nome = $_POST['nome'];
    $obUsuario->email = $_POST['email'];
    $obUsuario->senha = $_POST['senha'];

    //metodo para cadastrar
    $obUsuario->cadastrar();

    var_dump($obUsuario);
    
}




//incluindo o header e o footer
include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';



?>