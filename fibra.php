<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cor da fibra</title>
    <?php
        $fibra = [
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
        function corHexa($n){
            if($n<=12){
                return $fibra["hexa"][$n-1];
            }elseif($n>12 AND $n<=24){
                return $fibra["hexa"][$n-13];
            }elseif($n>24 AND $n<=36){
                return $fibra["hexa"][$n-25];
            }elseif($n>36 AND $n<=48){
                return $fibra["hexa"][$n-37];
            }elseif($n>48 AND $n<=60){
                return $fibra["hexa"][$n-49];
            }elseif($n>60 AND $n<=72){
                return $fibra["hexa"][$n-61];
            }else{
                return null;
            }
        }
        function corNome($n){
            if($n<=12){
                return $fibra["nome"][$n-1];
            }elseif($n>12 AND $n<=24){
                return $fibra["nome"][$n-13];
            }elseif($n>24 AND $n<=36){
                return $fibra["nome"][$n-25];
            }elseif($n>36 AND $n<=48){
                return $fibra["nome"][$n-37];
            }elseif($n>48 AND $n<=60){
                return $fibra["nome"][$n-49];
            }elseif($n>60 AND $n<=72){
                return $fibra["nome"][$n-61];
            }else{
                return null;
            }
        }
        function grupoFibra($n){
            if($n<=12){
                return $fibra["grupo"][1];
            }elseif($n>12 AND $n<=24){
                return $fibra["grupo"][2];
            }elseif($n>24 AND $n<=36){
                return $fibra["grupo"][3];
            }elseif($n>36 AND $n<=48){
                return $fibra["grupo"][4];
            }elseif($n>48 AND $n<=60){
                return $fibra["grupo"][5];
            }elseif($n>60 AND $n<=72){
                return $fibra["grupo"][6];
            }else{
                return null;
            }
        }
    ?>
</head>
<body>
    <div><h1>Fibra</h1></div>
    <div>
        <form action="" method="GET">
            <input name="n" type="text" placeholder="Digite o número da fibra">
            <input type="submit" value="Checar">
        </form>
    </div>
    <div style="height:100px;width:100px;alingt:center;background-color:'<?php echo corHexa($_GET('n'))?>';">
        <h2 style="color:auto;"><?= corNome($_GET('n'))?></h2>
        <h3 style="color:auto;"><?= grupoFibra($_GET('n'))?></h3>
    </div>    
</body>
</html>