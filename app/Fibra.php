<?php
namespace app;

class Fibra{

    private  $fibra = [
        "hexa"=>[
            '#008000',
            '#FFFF00',
            '#FFFFFF',
            '#0000FF',
            '#FF0000',
            '#9400D3',
            '#A52A2A',
            '#FF1493',
            '#000000',
            '#808080',
            '#FF4500',
            '#00FFFF',
        ],
        "nome"=>[
            'Verde',
            'Amarelo',
            'Branco',
            'Azul',
            'Vermelho',
            'Violeta',
            'Marrom',
            'Rosa',
            'Preto',
            'Cinza',
            'Laranja',
            'Aqua Azul',
        ],
        "grupo"=>[
            'Grupo 1',
            'Grupo 2',
            'Grupo 3',
            'Grupo 4',
            'Grupo 5',
            'Grupo 6',
        ],
    ];


    public function colorHexa($n,$toboloose){
        if($toboloose=='toboloosetwelve'){
            if($n<=12){
                return $this->fibra["hexa"][$n-1];
            }elseif($n>12 AND $n<=24){
                return $this->fibra["hexa"][$n-13];
            }elseif($n>24 AND $n<=36){
                return $this->fibra["hexa"][$n-25];
            }elseif($n>36 AND $n<=48){
                return $this->fibra["hexa"][$n-37];
            }elseif($n>48 AND $n<=60){
                return $this->fibra["hexa"][$n-49];
            }elseif($n>60 AND $n<=72){
                return $this->fibra["hexa"][$n-61];
            }else{
                return "red";
            }
        }else{
            if($n<=6){
                return $this->fibra["hexa"][$n-1];
            }elseif($n>6 AND $n<=12){
                return $this->fibra["hexa"][$n-7];
            }elseif($n>12 AND $n<=18){
                return $this->fibra["hexa"][$n-13];
            }elseif($n>18 AND $n<=24){
                return $this->fibra["hexa"][$n-19];
            }elseif($n>24 AND $n<=30){
                return $this->fibra["hexa"][$n-25];
            }elseif($n>30 AND $n<=36){
                return $this->fibra["hexa"][$n-31];
            }else{
                return "red";
            }
        }   
    }

    public function nameColor($n,$toboloose){
        if($toboloose=='toboloosetwelve'){
            if($n<=12){
                return $this->fibra["nome"][$n-1];
            }elseif($n>12 AND $n<=24){
                return $this->fibra["nome"][$n-13];
            }elseif($n>24 AND $n<=36){
                return $this->fibra["nome"][$n-25];
            }elseif($n>36 AND $n<=48){
                return $this->fibra["nome"][$n-37];
            }elseif($n>48 AND $n<=60){
                return $this->fibra["nome"][$n-49];
            }elseif($n>60 AND $n<=72){
                return $this->fibra["nome"][$n-61];
            }else{
                return 'Este grupo só possui 72 fibras';
            }
        }else{
            if($n<=6){
                return $this->fibra["nome"][$n-1];
            }elseif($n>6 AND $n<=12){
                return $this->fibra["nome"][$n-7];
            }elseif($n>12 AND $n<=18){
                return $this->fibra["nome"][$n-13];
            }elseif($n>18 AND $n<=24){
                return $this->fibra["nome"][$n-19];
            }elseif($n>24 AND $n<=30){
                return $this->fibra["nome"][$n-25];
            }elseif($n>30 AND $n<=36){
                return $this->fibra["nome"][$n-31];
            }else{
                return 'Este grupo só possui 36 fibras';
            }
        }
        
    }

    public function groupFiber($n,$toboloose){
        if($toboloose=='toboloosetwelve'){
            if($n<=12){
                return $this->fibra["grupo"][0];
            }elseif($n>12 AND $n<=24){
                return $this->fibra["grupo"][1];
            }elseif($n>24 AND $n<=36){
                return $this->fibra["grupo"][2];
            }elseif($n>36 AND $n<=48){
                return $this->fibra["grupo"][3];
            }elseif($n>48 AND $n<=60){
                return $this->fibra["grupo"][4];
            }elseif($n>60 AND $n<=72){
                return $this->fibra["grupo"][5];
            }else{
                return '';
            }
        }else{
            if($n<=6){
                return $this->fibra["grupo"][0];
            }elseif($n>6 AND $n<=12){
                return $this->fibra["grupo"][1];
            }elseif($n>12 AND $n<=18){
                return $this->fibra["grupo"][2];
            }elseif($n>18 AND $n<=24){
                return $this->fibra["grupo"][3];
            }elseif($n>24 AND $n<=30){
                return $this->fibra["grupo"][4];
            }elseif($n>30 AND $n<=36){
                return $this->fibra["grupo"][5];
            }else{
                return '';
            }
        }
        
    }

}