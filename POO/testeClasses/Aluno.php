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
class Aluno extends Pessoa
{

    private $matricula = true;
    private $curso;

    public function getMat(): bool
    {
        return $this->matricula;
    }
    public function setMat($m)
    {
        $this->matricula = $m;
    }

    public function getCurso()
    {
        return $this->curso;
    }
    public function setCurso($c)
    {
        $this->curso = $c;
    }
}
$aluno1 = new Aluno();

$aluno1->setIdade(20);
$aluno1->setSexo('M');
$aluno1->setNome("Enzo Sena");
$aluno1->setCurso("Sistemas de informação");


print_r($aluno1);

?>
    </pre>

</body>

</html>