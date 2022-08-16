<?php 


class PokemonModel
{
    public $id, $nome, $descricao, $tipo;

    public $rows;

    public function save()
    {
        include 'DAO/PokemonDAO.php';

        $dao = new PokemonDAO();

        if(empty($this->id)) 
        {
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {
        include 'DAO/PokemonDAO.php';

        $dao = new PokemonDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        include 'DAO/PokemonDAO.php';
        
        $dao = new PokemonDAO;

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new PokemonModel(); 

    }

    public function delete(int $id)
    {
        include 'DAO/PokemonDAO.php';

        $dao = new PokemonDAO();

        $dao->delete($id);
    }
}