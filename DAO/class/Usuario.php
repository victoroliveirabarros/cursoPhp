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
            
            $this->setData($results[0]);

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
            ":SENHA"=>SHA($senha)
            ));

        if(count($results) > 0){

            $this->setData($results[0]);

        }else{
            throw new Exception("Login e/ou senha inválidos!!!");
        }
    }

    public function setData($data){
        $this->setId($data['id']);
        $this->setNome($data['nome']);
        $this->setUsuario($data['usuario']);
        $this->setSenha($data['senha']);
        $this->setEmail($data['email']);
        $this->setNivel($data['nivel']);
        $this->setAtivo($data['ativo']);
        $this->setCadastro(new DateTime($data['cadastro']));
        $this->setCelular($data['celular']);
        $this->setIdTelegram($data['id_telegram']);
        $this->setPermissaoTelegram($data['permissao_telegram']);
        $this->setFirstAccess($data['first_access']);
        $this->setGrupo($data['grupo']);

    }

    public function insert(){
        $sql = new Sql();

        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :SENHA)", array(
            ":LOGIN"=>$this->getUsuario(),
            ":SENHA"=>$this->getSenha()
        ));

        if(count($results) > 0){
            $this->setData($results[0]);
        }

    }

    public function update($login, $senha){

        $this->setUsuario($login);
        $this->setSenha($senha);

        $sql = new Sql();

        $sql->query("UPDATE usuarios SET nome = :LOGIN, senha = :SENHA WHERE id =  :ID", array(
            ':LOGIN'=>$this->getUsuario(),
            ':SENHA'=>$this->getSenha(),
            ':ID'=>$this->getId()
        ));

    }

    public function delete(){
        $sql = new Sql();

        $sql->query("DELETE FROM usuarios WHERE id = :ID", array(
            ':ID'=>$this->getId()
        ));

        $this->setId(0);
        $this->setNome("");
        $this->setUsuario("");
        $this->setSenha("");
        $this->setEmail("");
        $this->setNivel(0);
        $this->setAtivo(0);
        $this->setCadastro(new DateTime());
        $this->setCelular("");
        $this->setIdTelegram(0);
        $this->setPermissaoTelegram(0);
        $this->setFirstAccess(0);
        $this->setGrupo(0);
    }

    public function __construct($nome = "", $senha = ""){
        $this->setNome($login);
        $this->setSenha($senha);
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