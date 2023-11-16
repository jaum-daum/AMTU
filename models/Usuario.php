<?php
session_start();
require_once $_SERVER ['DOCUMENT_ROOT'] . "/database/DBConexao.php";
class Usuario
{

    protected $db;
    protected $table = "usuarios";

    public function __construct()
    {
        $this->db = DBConexao::getConexao();
    }

   /**
    *Buscar registro único  
    *@param int $id
    *@return Usuario|null  
    */
    public function buscarUsuario($id_usuario)
    {
        try{
            $query = "SELECT * FROM {$this->table} WHERE id_usuario = :id_usuario";
            $stmt = $this->db->prepare($query);  
            $stmt->bindParam(":id_usuario", $id_usuario, PDO::PARAM_INT); 
            $stmt->execute();
           
            return $stmt->fetch(PDO::FETCH_OBJ); 

        }catch(PDOException $e ){
            echo 'Erro na inserção: ' . $e->getMessage(); 
            return null; 
        }
    }

    /**
     * Listar todos os registros da tabela
     */
    public function listar()
    {
        try{
            $query = "SELECT * FROM {$this->table}"; 
            $stmt = $this->db->query($query); 
            return $stmt->fetchAll(PDO::FETCH_OBJ);
            
        }catch(PDOException $e){
            echo 'Erro na inserção: ' . $e->getMessage(); 
            return null; 
        }
    }

    /**
     * Cadastrar Usuário 
     * @param array $dados 
     * @return bool 
     */
    public function cadastrar($dados)
    {
        try{
            $query = "INSERT INTO {$this->table} (nome, sobrenome, email, cpf, telefone, senha, perfil) VALUES(:nome, :sobrenome, :email, :cpf, :telefone, :senha, :perfil)";
            $stmt = $this->db->prepare($query);  

            $stmt->bindParam(':nome', $dados['nome']);
            $stmt->bindParam(':sobrenome', $dados['sobrenome']); 
            $stmt->bindParam(':email', $dados['email']); 
            $stmt->bindParam(':cpf', $dados['cpf']); 
            $stmt->bindParam(':telefone', $dados['telefone']); 
            $stmt->bindParam(':senha', $dados['senha']); 
            $stmt->bindParam(':perfil', $dados['perfil']); 
            
            $stmt->execute(); 
            $_SESSION['sucesso'] = "Cadastro realizado com sucesso";
            
            return true;

        }catch(PDOException $e){
            echo 'Erro ao cadastrar: ' . $e->getMessage(); 

            $_SESSION['erro'] = "Erro ao cadastrar usuario";

            return false;   
        }
    }

    /**
     * Editar Usuário 
     * @param int $id
     * @param array $dados 
     * @return bool 
     */
    public function editar($id_usuario, $dados)
    {
        try{
            $query = "UPDATE {$this->table} SET nome = :nome, email = :email, senha = :senha, perfil = :perfil WHERE id_usuario = :id";
            $stmt = $this->db->prepare($query); 

            $stmt->bindParam(':nome', $dados['nome']);
            $stmt->bindParam(':email', $dados['email']);
            $stmt->bindParam(':senha', $dados['senha']);
            $stmt->bindParam(':perfil', $dados['perfil']);
            $stmt->bindParam(':id', $id_usuario, PDO::PARAM_INT); 

            $stmt->execute();
            $_SESSION['sucesso'] = "Usuario editado com sucesso";
            return true; 
        }catch(PDOException $e){
            echo 'Erro ao editar: ' . $e->getMessage(); 
            return false; 
        }
    }

    /**
     * Exclui Usuário por id
     * @param int $id
     */
    
    public function excluir($id_usuario)
    {
        try{
            //Montagem e preparação do SQL
            $query = "DELETE FROM {$this->table} WHERE id_usuario = :id_usuario"; 
            $stmt = $this->db->prepare($query); 
            
            //Passagem de parametros
            $stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT); 
            $stmt->execute();
            $_SESSION['sucesso'] = "Usuario excluido com sucesso";
        }catch(PDOException $e){
            echo 'Erro na preparação da exclusão: ' . $e->getMessage(); 
        }
    }
}
