<?php

class Usuario {

    private $id;
    private $nome;
    private $usuario;
    private $senha;
    private $email;
    private $nivel;
    private $ativo;
    private $cadastro;
    private $celular;
    private $id_telegram;
    private $permissao_telegram;
    private $first_access;
    private $grupo;

    public function getId(){
        return $this->id;
    }

    public function setId($value){
        $this->id = $value;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($value){
        $this->nome = $value;
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function setUsuario($value){
        $this->usuario = $value;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($value){
        $this->senha = $value;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($value){
        $this->email = $value;
    }

    public function getNivel(){
        return $this->nivel;
    }

    public function setNivel($value){
        $this->nivel = $value;
    }

    public function getAtivo(){
        return $this->ativo;
    }

    public function setAtivo($value){
        $this->ativo = $value;
    }

    public function getCadastro(){
        return $this->cadastro;
    }

    public function setCadastro($value){
        $this->cadastro = $value;
    }

    public function getCelular(){
        return $this->celular;
    }

    public function setCelular($value){
        $this->celular = $value;
    }

    public function getIdTelegram(){
        return $this->id_telegram;
    }

    public function setIdTelegram($value){
        $this->id_telegram = $value;
    }

    public function getPermissaoTelegram(){
        return $this->permissao_telegram;
    }

    public function setPermissaoTelegram($value){
        $this->permissao_telegram = $value;
    }

    public function getFirstAccess(){
        return $this->first_access;
    }

    public function setFirstAccess($value){
        $this->first_access = $value;
    }

    public function getGrupo(){
        return $this->grupo;
    }

    public function setGrupo($value){
        $this->grupo = $value;
    }

    public function loadById($id){

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM usuarios WHERE id = :ID", array(
            ":ID"=>$id
            ));

        if(count($results) > 0){
            
            $row = $results[0];

            $this->setId($row['id']);
            $this->setNome($row['nome']);
            $this->setUsuario($row['usuario']);
            $this->setSenha($row['senha']);
            $this->setEmail($row['email']);
            $this->setNivel($row['nivel']);
            $this->setAtivo($row['ativo']);
            $this->setCadastro(new DateTime($row['cadastro']));
            $this->setCelular($row['celular']);
            $this->setIdTelegram($row['id_telegram']);
            $this->setPermissaoTelegram($row['permissao_telegram']);
            $this->setFirstAccess($row['first_access']);
            $this->setGrupo($row['grupo']);

        }

    }

    public static function getList(){
        $sql = new Sql();

        return $sql->select("SELECT * FROM usuarios ORDER BY nome");

    }

    public static function search($nome){
        $sql = new Sql();

        return $sql->select("SELECT * FROM usuarios WHERE nome LIKE :SEARCH ORDER BY nome", array(
            ':SEARCH'=>"%".$nome."%"
        ));

    }

    public function login($login, $senha){

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM usuarios WHERE nome = :NOME AND senha = :SENHA", array(
            ":NOME"=>$login,
            ":SENHA"=>SHA($senha);
            ));

        if(count($results) > 0){
            
            $row = $results[0];

            $this->setId($row['id']);
            $this->setNome($row['nome']);
            $this->setUsuario($row['usuario']);
            $this->setSenha($row['senha']);
            $this->setEmail($row['email']);
            $this->setNivel($row['nivel']);
            $this->setAtivo($row['ativo']);
            $this->setCadastro(new DateTime($row['cadastro']));
            $this->setCelular($row['celular']);
            $this->setIdTelegram($row['id_telegram']);
            $this->setPermissaoTelegram($row['permissao_telegram']);
            $this->setFirstAccess($row['first_access']);
            $this->setGrupo($row['grupo']);




        }else{
            throw new Exception("Login e/ou senha inválidos!!!");
        }
    }

    public function __toString(){
        return json_encode(array(
            "id"=>$this->getId(),
            "nome"=>$this->getNome(),
            "usuario"=>$this->getUsuario(),
            "senha"=>$this->getSenha(),
            "email"=>$this->getEmail(),
            "nivel"=>$this->getNivel(),
            "ativo"=>$this->getAtivo(),
            "cadastro"=>$this->getCadastro()->format("d/m/Y H:i:s"),
            "celular"=>$this->getCelular(),
            "id_telegram"=>$this->getIdTelegram(),
            "permissao_telegram"=>$this->getPermissaoTelegram(),
            "first_access"=>$this->getFirstAccess(),
            "grupo"=>$this->getGrupo()

        ));
    }
    
}


?>