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

<!--
<header>
    <a href="#">Logo</a>
    <nav>
        <ul>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Produto</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
    </nav>
</header>
-->

<div class="container">

    <div>
        <form action="" method="GET">
            <input name="n" type="text" placeholder="Digite o número da fibra">
            <input type="submit" value="Checar">
        </form>
    </div> 
    
    <?php

if(isset($_GET['n'])):
    $n = $_GET['n'];
    echo "<h3 style='color:".$fibra->colorHexa($n)."'>".$fibra->nameColor($n)."</h3>";
     echo "<h3>".$fibra->groupFiber($n)."</h3>";
endif;

    ?>

    </div>
</body>
</html>