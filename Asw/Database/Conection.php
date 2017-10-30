<?php

namespace Asw\Database;

class Conection{
 
    const DADOS = './Config/Database.ini';
    
    private $dados;
  
    function __construct() {
        $this->dados = parse_ini_file(DADOS);
        var_dump($this->dados); 
    }

}