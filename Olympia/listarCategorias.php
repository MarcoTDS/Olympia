<?php
include_once("util/conexao.php");
include_once("controller/categoriaController.php");
include_once("view/tabelaCategorias.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include_once("bootstrap/links.php");
    ?>
    <title>Listar Categorias</title>
</head>
<body>
    <?php
        include_once("bootstrap/navbar.php");
    ?>
    <?php
        $categoriaCont = new CategoriaController();
        $categorias = $categoriaCont->listar(); 
        
        CategoriaHTML::desenhaTabela($categorias);
    ?>
</body>
</html>