<?php

namespace App\Models\DAO;

use App\Lib\Conexao;

abstract class BaseDAO
{
    private $conexao;

    public function __construct()
    {
        # chama Conexão sem instância, porq a class e o metohd dela são static
        $this->conexao = Conexao::getConnection();
    }

    public function select($table, $where = null)
    {
        if ($where) {
            $query = "SELECT * FROM $table WHERE $where";
        } else {
            $query = "SELECT * FROM $table";
        }

        if (!empty($table)) {
            return $this->conexao->query($query); // executa a query
        }
    }

    public function insert($table, $cols, $values)
    {
        if (!empty($table) && !empty($cols) && empty($values)) {
            $parametros = $cols;
            $colunas = str_replace(":", "", $cols); // cols ja vem com dois pontos

            $stmt = $this->conexao->prepare("INSERT INTO $table ($colunas)
                                             VALUES ($parametros)");
            # INSERT INTO fornecedor (nome, dataCadastro)
            #   VALUES (:nome, :dataCadastro);

            $stmt->execute($values); // bind params

            return $this->conexao->lastInsertId();
        } else {
            return false;
        }
    }

    public function update($table, $cols, $values, $id = null)
    {
        if (!empty($table) && !empty($cols) && empty($values)) {
            if ($id) {
                $where = " WHERE $id";
            }

            $stmt = $this->conexao->prepare("UPDATE $table SET $cols $where");
            $stmt->execute($values);

            return $stmt->rowCount();
        } else {
            return false;
        }
    }

    public function delete($table, $where)
    {
        if (!empty($table)) {
            if ($where) {
                $where = "WHERE $where";
            }

            $stmt = $this->conexao->prepare("DELETE FROM $table $where");
            $stmt->execute();

            return $stmt->rowCount();
        } else {
            return false;
        }
    }
}