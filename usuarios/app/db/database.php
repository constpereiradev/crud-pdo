<?php

namespace App\db;

use Exception;
use \PDO;
use PDOException;

class Database{

    const HOST = 'localhost';
    const NAME= 'crud';
    const USER = 'root';
    const PASS = '1234';
    

    //nome da tabela a ser manipulada
    private string $table;


    //conexao
    private $connection;



    //construct da tabela
    public function __construct($table = null)
    {
        $this->table = $table;

        $this->setConnection();
    }


    //metodo para criar conexao com banco de dados
    private function setConnection(){

        try {    
        $this->connection = new PDO ('mysql:host='.self::HOST.';dbname='.self::NAME, self::USER, self::PASS);


        //configuração p sempre lançar uma exception caso algo saia fora do esperado
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            //throw $th;
            die ('ERROR: '. $e->getMessage());
        }
    }



    //metodo para inserir dados na tabela

    /*os dados serao chamados de $values, mas poderiam
    ter outra denominação*/
    public function insert(array $values){

        //dados da query 

        //os fields irão receber os dados de toda a tabela
        $fields = array_keys($values);



        /*echo ("Valores: ");
        echo "<pre>"; print_r($fields); echo "</pre>"; exit;*/

        //a query
        $query = ('INSERT INTO '. $this->table .' (nome, email, senha) VALUES (?, ?, ?)');
        echo $query;
        exit;

    }
}


?>