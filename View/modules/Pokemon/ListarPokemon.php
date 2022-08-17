<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">;

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="/../../css/listarCSS.css">

    <title>Listagem de Pokémons</title>
</head>
<body>

    <?php foreach($model->rows as $item): ?>
            <div class="card">
         
            <ul class="list-group list-group-flush">
                    <li class="list-group-item" style="color:#212121">Nome: <?= $item['nome'] ?></li>
                </ul>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item" style="color:#212121">Descrição: <?= $item['descricao'] ?></li>
                </ul>

                   <ul class="list-group list-group-flush">
                    <li class="list-group-item" style="color:#212121">Tipo: <?= $item['tipo'] ?></li>

                    <div class="card-body">
                    <button type="button" class="btn btn-danger" a href="/pokemon/form?id=<?= $item['id'] ?>">Editar Pokemon</a></b> </button>
                    <button type="button" class="btn btn-danger" a href="/pokemon/delete?id=<?= $item['id'] ?>">Deletar</a> </button>
                </div>

                </ul>
            </div>
            <td>
        </tr>
    <?php endforeach ?>

    <?php if(count($model->rows) == 0): ?>
        <tr>
            <td colspan="5">Nenhum registro encontrado.</td>
        </tr>
    <?php endif ?>

</body>
</html>