<?php

namespace PROJETOSITELUTAS\PHP;

require_once('./Header.php');

?>
<!DOCTYPE html>

<head>

    <! - CSS HOMEPAGE ->
        <link rel="stylesheet" href="./CSS/css-homepage.css" type="text/css" />
</head>

<body>
    <div class="corpo-geral">

        <div class="apresentacao">
            <div id='texto-apresentacao'>
                <p>Se você é um apaixonado pela arte da luta ou está iniciando nesse mundo fascinante, você está no lugar certo! <br> Aqui, você vai encontrar informações sobre quatro tipos de lutas variadas: Judô, Muay Thai, Jiu-jitsu e Kickboxing.</p>
            </div>
        </div>
        <div id='cards-lutas'>
                <div class="card" style="width:200px;">
                    <img class="card-img-top" src="./Imagens/JudoEstilo.webp" style="height:150px;" alt="Judo">
                    <div class="card-body text-center">
                        <a href="./Judo.php" class="btn btn-info card-title f-style p-card-style">Judo</a>
                    </div>
                </div>
                <div class="card" style="width:200px; margin-left:20px;">
                    <img class="card-img-top" src="./Imagens/MuaiThayEstilo.jpg" style="height:150px;" alt="Judo">
                    <div class="card-body text-center">
                        <a href="./MuaiThay.php" class="btn btn-info card-title f-style p-card-style">Muai Thay</a>
                    </div>
                </div>
                <div class="card" style="width:200px; margin-left:20px;">
                    <img class="card-img-top" src="./Imagens/JiuJitsuEstilo.jpg" style="height:150px;" alt="Judo">
                    <div class="card-body text-center">
                        <a href="./JiuJitsu.php" class="btn btn-info card-title f-style p-card-style">Jiu Jitsu</a>
                    </div>
                </div>
                <div class="card" style="width:200px; margin-left:20px;">
                    <img class="card-img-top" src="./Imagens/KickboxingEstilo.webp" style="height:150px;" alt="Judo">
                    <div class="card-body text-center">
                        <a href="./Kickboxing.php" class="btn btn-info card-title f-style p-card-style">Kickboxing</a>
                    </div>
                </div>
            </div>
            <div id='continuacao-apresentacao'>
                <p>Se o seu sonho é se tornar um lutador profissional ou um atleta olímpico, não se preocupe, pois nós iremos te guiar nessa jornada. <br> Vamos apresentar o caminho que você deve seguir para se tornar um verdadeiro profissional na sua arte marcial preferida.<br>
                    Aqui, o nosso objetivo é ajudar você a alcançar o seu potencial máximo como lutador, oferecendo dicas valiosas e estratégias comprovadas para que você possa aprimorar as suas habilidades e se destacar no mundo da luta. Não perca mais tempo, junte-se a nós nessa jornada de evolução e conquistas!</p>
            </div>

    </div>
</body>
<?php
    require_once('./Footer.php');

?>
</html>