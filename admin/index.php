<?php

require '../conexao.php';

include '../src/Artigo.php';
$artigo = new Artigo($mysql);
$artigos = $artigo->exibirTodos();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Página administrativa</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <div id="container">
        <h1>Página Administrativa</h1>
        <div>
            <div id="artigo-admin">
                <p>Primeiros passos com Spring</p>
                <nav>
                    <a class="botao" href="admin/editar-artigo.html?id=<?php echo $art['id']; ?>">Editar</a>
                    <a class="botao" href="admin/excluir-artigo.php">Excluir</a>
                </nav>
            </div>


        </div>
        <a class="botao botao-block" href="admin/adicionar-artigo.html">Adicionar Artigo</a>
    </div>
</body>

</html>