<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pokémons</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="/../../css/FormPokemon.css">

    <style>
        label, input { display: block;}
    </style>


   
</head>
<body>



<form action="/pokemon/save" method="post">

 <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>

<div class="container">

        <fieldset>

            <legend>CADASTRO DE PÓKEMONS</legend>

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome">Nome do Pokémon:</label>
            <input name="nome" id="nome" type="text" value="<?= $model->nome?>" />

            <label for="descricao">Descrição:</label>
            <input name="descricao" id="descricao" type="text" value="<?= $model->descricao ?>"> </textarea> 

            <label for="tipo">Tipo:</label>
            <input name="tipo" id="tipo" type="text" value="<?= $model->tipo ?>" />

            <br>

            <button type="submit"> CADASTRAR </button>



        </fieldset>

    </div>

    </form>
    
</body>
</html>