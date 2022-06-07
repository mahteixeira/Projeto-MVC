<?php

class FuncionarioModel
{

    public $id, $nome, $rg, $cpf;
    public $data_nascimento, $email;
    public $telefone, $endereco;

    public $rows;

    public function save()
    {
        include 'DAO/FuncionarioDAO.php';

        $dao = new FuncionarioDAO();

        if ($this->id == null) {
            $dao->insert($this);
        } else {
        }
    }

    public function getAllRows()
    {
        include 'DAO/FuncionarioDAO.php';

        $dao = new FuncionarioDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        include "DAO/FuncionarioDAO.php";

        $dao = new FuncionarioDAO();

        $obj = $dao-> SelectById($id);

        if($obj)
        {

            return $obj;
        }else {
            return new FuncionarioModel();
        }
    }

    public function delete(int $id) {
        include 'DAO/FuncionarioDAO.php';
        
        $dao = new FuncionarioDAO();

        $dao->delete( (int) $id);
        header("Location: /funcionario");
    }
}
