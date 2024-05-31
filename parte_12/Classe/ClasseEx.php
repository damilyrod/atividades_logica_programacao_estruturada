<?php

// 1º Exercício:

class Combustivel
{
    
    public function CalcularTotalLitros($combustivel, $qtd)

    {
        if ($combustivel == '') {
            return 0;
        } else if ($qtd == '') {
            return 0;
        }
        $resultado = '';

        if ($combustivel == 'n2') {
            $resultado = $this->Gasolina($qtd);
        } else if ($combustivel == 'n1') {
            $resultado = $this->Etanol($qtd);
        }
        return $resultado;
    }

    private function Gasolina($qtd)
    {
        $gasolina = 4.10 * $qtd;
        return $gasolina;
    }

    private function Etanol($qtd)
    {
        $etanol = 3.09 * $qtd;
        return $etanol;
    }
}
class Conversao
{
    public function CalcularTotalConversao($conversao, $valor)
    {
        if ($conversao == '') {
            return 0;
        } else if ($valor == '') {
            return 1;
        }
        $resultado = '';
        if ($conversao == 'f1') {
            $resultado = $this->FahrenheitCelsius($valor);
        } else if ($conversao == 'c2') {
            $resultado = $this->CelsiusFahrenheit($valor);
        }
        return $resultado;
    }
    private function FahrenheitCelsius($valor)
    {
        $fahrenheit = ($valor - 32) / 1.8;
        return $fahrenheit;
    }

    private function CelsiusFahrenheit($valor)
    {
        $celsius = ($valor * 1.8 + 32);
        return $celsius;
    }
}

class CalculoGanhosPerdas
{
    public function CalcularTotal($lucro, $perda, $qtd, $media)
    {
        if ($lucro == '' || $perda == '') {
            return 0;
        }
        $resultado = '';

        $ganho = $qtd * $media;
        $totalLucro = ($ganho * $lucro) / 100;
        $totalPerda = ($ganho * $perda) / 100;

        $resultado = ($ganho + $totalLucro) - $totalPerda;
        return $resultado;
    }
}
