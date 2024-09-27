<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
<?php
require_once "Pessoa.php";
class Professor extends Pessoa
{
    private $especialidade;
    private $salario;

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {

        $this->salario = $salario;
    }

    public function getEspeci()
    {
        return $this->especialidade;
    }

    public function setEspeci($e)
    {

        $this->especialidade = $e;
    }

    public function receberAum($aumento)
    {
        return $this->salario += $aumento;
    }


}
$prof1 = new Professor();
$prof1->setIdade(30);
$prof1->setSexo('M');
$prof1->setNome("Zeca Martins");
$prof1->setNasc("1994/06/12");
$prof1->setSalario(3700);
$prof1->setEspeci("Desenvolvedor Web");
$prof1->receberAum(0);


print_r($prof1);
?>
    </pre>

</body>

</html>