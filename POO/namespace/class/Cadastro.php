<?php

class Cadastro {

    private $nome;
    private $email;
    private $senha;

    public function getNome():string
    {

        return $this->nome;

    }

    public function getEmail():string
    {

        return $this->email;

    }

    public function getSenha():string
    {

        return $this->senha;

    }

    public function setNome($nome){

        $this->nome = $nome;

    }

    public function setSenha($senha){
        if(strlen($senha) > 8 && preg_match('/[A-Z]/', $senha)){
            $this->senha = $senha;
        } else {
            // Em caso de senha inválida, você pode lançar uma exceção, retornar um valor booleano ou fazer qualquer outra ação adequada para sua aplicação.
            throw new Exception("A senha deve ter mais de 8 caracteres e conter pelo menos uma letra maiúscula.");
        }
    }
    public function setEmail($email){
         $this->email = $email;
    }

    public function __toString(){

        return json_encode(array(

            "nome"=>$this->getNome(),
            "email"=>$this->getEmail(),
            "senha"=>$this->getSenha()

        ));

    }

}

?>