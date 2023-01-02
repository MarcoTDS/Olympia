<?php

include_once("dao/categoria_dao.php");

class CategoriaController {

    private $alunoDAO;

    public function __construct() {
        $this->alunoDAO = new AlunoDAO();
    }

    public function listar() {
        return $this->alunoDAO->list();
    }

    public function buscarPorId($idAluno) {
        return $this->alunoDAO->findById($idAluno);
    }

    public function salvar($aluno) {
        $this->alunoDAO->save($aluno);
    }
    public function atualizar($aluno) {
        $this->alunoDAO->update($aluno);
    }

    public function excluir($aluno) {
        $this->alunoDAO->delete($aluno);
    }
}

?>