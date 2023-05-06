<?php

namespace ENG5;

class ListaNumerica{
    private $valores;

    public function setValores ($vl){
         $this->valores = $vl;
    }    
    public function getValores(){
         return $this->valores;
    }
         public function verificaQuantidade(){
              $tam= sizeof($this->valores);
               if ($tam >= 4 && $tam <= 10){ 
                   return 'Valido'; 
                } 
                   
                   return 'Invalido';
                }
                    public function verificaValores(){ 
                        $tam = sizeof($this->valores);
                    
                        for ($i= 0; $i < $tam; $i++){
                             if($this->valores[$i] < 10000 || $this->valores[$i] > 99999){ 
                                 return 'Invalido'; 
                             }
                            }
                                 return 'Valido';
                        }
                    }