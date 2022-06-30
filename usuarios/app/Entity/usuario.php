<?php

namespace App\Entity;
use \App\db\Database;



//criando o usuario
class Usuario{

    public int $id;
    public string $nome;
    public string $email;
    public string $senha;


    //metodo para cadastrar usuario
    public function cadastrar(){
        
        //inserir o usuario no banco de dados
        $obDatabase = new Database('usuarios');
        
        $obDatabase->insert([
            'nome' => $this->nome,
            'email' => $this->email,
            'senha' => $this->senha
        ]);


    }


}


?>