<?php

namespace PROJETOSITELUTAS\PHP;

require_once('./Header.php');

?>

<!DOCTYPE html>


<head>
    <link rel='stylesheet' href='./CSS/css-Olimpiadas.css' type='text/css' />
    <link rel="stylesheet" href="./CSS/post-format.css" type="text/css" />
</head>

<body>
    <div class='corpo-texto'>
        <div id="slider">
            <div id="demo" class="carousel slide rounded" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    <li data-target="#demo" data-slide-to="3"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./Imagens/Olimpiadas1.webp" alt="OLP1">
                    </div>
                    <div class="carousel-item">
                        <img src="./Imagens/Olimpiadas2.png" alt="OLP2">
                    </div>
                    <div class="carousel-item">
                        <img src="./Imagens/Olimpiadas3.jpg" alt="OLP3">
                    </div>
                    <div class="carousel-item">
                        <img src="./Imagens/Olimpiadas4.jpg" alt="OLP4">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>

            </div>
        </div>
        <div id="como-entrar">
            <div class="container-informativo sr">
                <div class="container-texto-informativo" style="margin-right:20px;">
                    <h1>Como entrar nas olimpiadas
                    </h1>
                    <p>
                        Caso você esteja empenhado em iniciar uma carreira olímpica, você também pode se candidatar em um dos clubes cadastrados no Comitê Olímpico Brasileiro (COB). Treinando em um clube, na Federação Estadual ou na Confederação Brasileira do seu esporte, você tem mais chance de chegar às Olimpíadas. Alguns contam com peneiras, outros com testes individuais.
                    </p>
                </div>


            </div>
        </div>
    </div>
</body>

<?php



require_once('./Footer.php');

?>

</html>