<?php
interface Veiculo
{

    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
}

abstract class automovel implements Veiculo
{

    public function acelerar($velocidade)
    {

        echo "O veículo acelerou até " . $velocidade . "km/h";
    }

    public function freiar($velocidade)
    {

        echo "O veículo freiou até " . $velocidade . "km/h";
    }

    public function trocarMarcha($marcha)
    {

        echo "O veículo engatou a marcha " . $marcha;
    }
}



?>