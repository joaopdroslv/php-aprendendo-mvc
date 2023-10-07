<?php

namespace App\Models\DAO;

use App\Lib\Conexao;

abstract class BaseDAO
{
    private $conexao;

    public function __construct()
    {
        # chama sem Conexão sem instância, 
        # porq a class e o metohd dela são estaticos
        $this->conexao = Conexao::getConnection();
    }
}