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
<header>
        <img class="logo" src="http://redeconexaonet.com.br/wp-content/themes/conexaonet/images/xlogo.png.pagespeed.ic.1L-MPbuynN.png" alt="REDECONEXAO" width="100">
        <nav class="nav-links">
            <ul>
                <li><a href="#">Services</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </nav>
        <a href="#"><button>Contacts</button></a>
    </header>

<div class="container">

    <div>
        <form action="" method="GET">

        <h3>Selecione Tubolosse referente a fibra</h3>
        <div class="radioGroup">
            <input checked type="radio" id="tubolooseofseix" name="tuboloose" value="tubolooseofsix"checked>06
            <input type="radio" id="tubolooseoftwelve" name="tuboloose" value="tubolooseoftwelve">12
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