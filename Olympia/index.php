<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("bootstrap/links.php");?>
</head>
<body>
<?php include_once("bootstrap/navbar.php");?>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="card my-5" style="width: 18rem;">
                    <img class="card-img-top" src="./images/atletas.png" alt="Card image cap">
                    <div class="card-body">
                            <h5 class="card-title">Atletas</h5>
                        </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a class="card-link">Listar Atletas</a>
                        </li>
                        <li class="list-group-item">
                            <a class="card-link">Cadastrar Atleta</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="card my-5" style="width: 18rem;">
                    <img class="card-img-top" src="./images/categorias.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Categorias</h5>
                        </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a class="card-link" href="./listarCategorias.php">Listar Categorias</a>
                        </li>
                        <li class="list-group-item">
                            <a class="card-link">Cadastrar Categoria</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>