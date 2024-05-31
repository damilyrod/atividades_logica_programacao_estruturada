<?php

    // PHP é uma linguagem de programação Case Sensitive, ou seja, diferencia,
    //o significado letras maiusculas de minusculas.

    // Todo arquivo de Classe (CLASS), é obrigatório iniciar o nome do arquivo com a letra Maiuscula!

    // Tipos de functions:
    // public function: Função do tipo aberta, que pode comunicar com camadas do Front e Back, 
    // e pode ser realizada a tarefa de herança!

    // private function: Função do tipo fechada, só realiza comunicação com a Class da qual ela pertence,
    // fornecendo dados ou informações para uma function do tipo public, e não pode ser feito herança!

    // public static function: Função do tipo aberta, que pode comunicar com camadas do Front e Back, 
    // e pode ser realizada a tarefa de herança, porem a definição static, segnifica que esta function,
    // sempre vai realizar exatamente a mesma operação, sem sofrer mutações ou alterações em seu código!

    // private static function: Função do tipo fechada, só realiza comunicação com a Class da qual ela pertence,
    // fornecendo dados ou informações para uma function do tipo public, e não pode ser feito herança, porem 
    // a definição static, segnifica que esta function, sempre vai realizar exatamente a mesma operação, 
    // sem sofrer mutações ou alterações em seu código!

    // É uma boa pratica sempre colocar o nome da Class, o mesmo do arquivo de Classe!
    // DAO - Data Access Object (Classe de Programação Orientada a Objeto).
    class ClassDAO{
        public function SomarExercicio($valor1, $valor2){
            if($valor1 == '' || $valor2 == ''){
                return 0;
            }else{

                // Comando $this: Função nativa do PHP, chamada de pseudo-variável, possui uma sintaxe de variavel mas é um comando!
                // o Comando $this realiza a chamada de functions do tipo private, por exemplo!
                $resposta = $this->Soma($valor1, $valor2);
                return $resposta;
            }
        }

        private function Soma($valor1, $valor2){
            $soma = $valor1 + $valor2;
            return $soma;
        }

        public function CalcularCombustivel($tipoCombustivel, $litros){
            if($tipoCombustivel == '' || $litros == ''){
                return 0;
            }else{
                if($tipoCombustivel == 1){
                    $resultado = $this->Etanol($litros);
                }else if($tipoCombustivel == 2){
                    $resultado = $this->Gasolina($litros);
                }else if($tipoCombustivel == 3){
                    $resultado = $this->Diesel($litros);
                }
                return $resultado;
            }
        }

        private function Etanol($litros){
            $etanol = $litros * 3.09;
            return $etanol;
        }

        private function Gasolina($litros){
            $gasolina = $litros * 4.10;
            return $gasolina;
        }

        private function Diesel($litros){
            $diesel = $litros * 4.89;
            return $diesel;
        }

        public function Conversao($medida, $temperatura){
            if($medida == '' || $temperatura == ''){
                return 0;
            }else{
                if($medida == 1){
                    $retorno = $this->CelsiusFahrenheit($temperatura);
                }else if($medida == 2){
                    $retorno = $this->FahrenheitCelsius($temperatura);
                }
                return $retorno;
            }
        }

        private function CelsiusFahrenheit($temperatura){
            $celsiusFahrenheit = round((($temperatura * 9 / 5) + 32), 2);
            return $celsiusFahrenheit;
        }

        private function FahrenheitCelsius($temperatura){
            $fahrenheitCelsius = round((($temperatura - 32) * 5 / 9), 2);
            return $fahrenheitCelsius;
        }

        public function CalcularSalario($meses, $dinheiro, $lucro, $perda){
            if($meses == '' || $dinheiro == '' || $lucro == '' || $perda == ''){
                return 0;
            }else{
                $ganho = $meses * $dinheiro;
                $totalLucro = ($ganho * $lucro) / 100;
                $totalPerda = ($ganho * $perda) / 100;

                $resultado = ($ganho + $totalLucro) - $totalPerda;
                return $resultado;
            }
        }
    }