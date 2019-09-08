<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cor da fibra</title>
    <link rel="stylesheet" href="css/style.css">
    <?php
        require_once'vendor/autoload.php';
        use app\Fibra;

        $fibra = new Fibra;

    ?>
</head>
<body>  

<div class="container">

    <div>
        <form action="" method="GET">

        <p>Selecione Tubolosse referente a fibra</p>

        <div>
        <input checked type="radio" id="tubolooseofseix" name="tuboloose" value="tubolooseofseix"
                checked>
        <label for="06">06</label>
        </div>

        <div>
        <input type="radio" id="tubolooseoftwelve" name="tuboloose" value="tubolooseoftwelve">
        <label for="12">12</label>
        </div>
            <input name="n" type="text" placeholder="Digite o número da fibra">
            <input id='botao' type="submit" value="Checar">
        </form>
    </div> 

    <?php

if(isset($_GET['n'])):
    $n = $_GET['n'];
    $tuboloose = $_GET['tuboloose'];
    if($n>0):
    echo "<div class='container-cor' style='background:".$fibra->colorHexa($n,$tuboloose)."'>";
    echo "<h3>".$fibra->nameColor($n,$tuboloose)."</h3>";
     echo "<h3>".$fibra->groupFiber($n,$tuboloose)."</h3></div>";
    endif;
endif;

    ?>

    </div>
</body>
</html>