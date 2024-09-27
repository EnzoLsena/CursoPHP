<?php 

class Pessoa {
    
    private $nome;
    private $sexo;
    private $idade;
    private $nascimento;
    
    public function fzrAniv(){
        return $this->nascimento;
    }


    public function getNasc()
    {
        return $this->nascimento;
    }
    public function setNasc($data)
    {
        $this->nascimento = $data;
    }
    
    
    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }


    public function getSexo()
    {
        return $this->sexo;
    }
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }


}

$p1 = new Pessoa();
?>