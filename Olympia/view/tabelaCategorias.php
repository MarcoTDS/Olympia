<?php

class CategoriaHTML {

    public static function desenhaTabela($categorias) {
        echo "<table class='table table-striped table-bordered'>";
        
        echo "<thead>";
        echo "<th scope='col'>Nome</th>";
        echo "</thead>";
        
        echo "<tbody>";
        foreach ($categorias as $categoria):
            echo "<tr>";
            echo "<td>". $categoria->getNome() ."</td>";
            
            //Editar
            echo "<td>". 
                "<a href='alunos_alt.php?id=". $categoria->getIdCategoria() . "'>".
                "<img src='img/btn_editar.png'>" . "</a>".
            "</td>";
            
            //Excluir
            echo "<td>". 
                "<a href='alunos_del_exec.php?id=". $categoria->getIdCategoria() . 
                "' onclick='return confirm(\"Confirma a exclusão do aluno?\");'".
                ">".
                "<img src='img/btn_excluir.png'>" . "</a>".
            "</td>";
            
            echo "</tr>";
        endforeach;
        echo "</tbody>";

        echo "</table>";
    }

}
?>