<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pokémons</title>
    <link rel="stylesheet" href="/../../css/FormCSS.css">

    <style>
        label, input { display: block;}
    </style>
   
</head>
<body>

    <form action="/pokemon/save" method="post">

    <br> <br> <br>

<div class="box">

        <fieldset>

            <legend>Cadastro de Pokémons</legend>

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome">Nome do Pokémon:</label>
            <input name="nome" id="nome" type="text" value="<?= $model->nome?>" />

            <label for="descricao">Descrição:</label>
            <input name="descricao" id="descricao" type="text" value="<?= $model->descricao ?>"> </textarea> 

            <label for="tipo">Tipo:</label>
            <input name="tipo" id="tipo" type="text" value="<?= $model->tipo ?>" />

            <br>

            <button type="submit">Cadastrar</button>

        </fieldset>

    </div>

    </form>
    
</body>
</html>