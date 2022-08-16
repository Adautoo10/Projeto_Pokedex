<?php

class PokemonController
{
    public static function index() 
    {
        include 'Model/PokemonModel.php';

        $model = new PokemonModel;
        $model->getAllRows();

        
        include 'View/modules/pokemon/ListarPokemon.php';
    }

    public static function form()
    {
        include 'Model/PokemonModel.php';

        $model = new PokemonModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);
            
        include 'View/modules/pokemon/FormPokemon.php';
    }

    public static function save() 
    {
        include 'Model/PokemonModel.php';

        $model = new PokemonModel();

        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->descricao = $_POST['descricao'];
        $model->tipo = $_POST['tipo'];
   
        
        
        $model->save(); 

        header("Location: /pokemon"); 
    }

    public static function delete()
    {
        include 'Model/PokemonModel.php';

        $model = new PokemonModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /pokemon");
    }
}