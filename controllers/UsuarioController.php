<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/models/Usuario.php";

Class UsuarioController{

    private $usuarioModel;

    public function __construct(){
        $this->usuarioModel = new Usuario();
    }

    public function listarUsuarios(){
        return $this->usuarioModel->listar();
    }

    public function cadastrarUsuario(){
        
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
            $dados = [
                'nome'=>$_POST['nome'],
                'sobrenome'=>$_POST['sobrenome'],
                'email'=>$_POST['email'],
                'cpf'=>$_POST['cpf'],
                'telefone'=>$_POST['telefone'],
                'senha'=>password_hash($_POST['senha'],PASSWORD_DEFAULT),
                'perfil'=>$_POST['perfil'],
            ];
           
            $this->usuarioModel->cadastrar($dados);

            header('location: index.php');
            exit;
        }
    }
    public function editarUsuario(){
        $id_usuario = $_GET['id_usuario'];

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
            if(isset($_POST['senha']) && !empty($_POST['senha'])){
                $novaSenha = password_hash($_POST['senha'],PASSWORD_DEFAULT);
            }else{
                $usuario = $this->usuarioModel->buscarUsuario($id_usuario);
                $senha = $usuario->senha;
            }
            $dados = [
                'nome'=>$_POST['nome'],
                'email'=>$_POST['email'],
                'senha'=>password_hash($_POST['senha'],PASSWORD_DEFAULT),
                'perfil'=>$_POST['perfil'],
            ];
           
            $this->usuarioModel->editar($id_usuario, $dados);

            header('location: index.php');
            exit;
        }
        return $this->usuarioModel->buscarUsuario($id_usuario);
    }

    public function excluirUsuario(){
        
        $this->usuarioModel->excluir($_GET['id_usuario']);

        header('location: index.php');
        exit;
    }

}
