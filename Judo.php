<?php

namespace PROJETOSITELUTAS\PHP;

require_once('./Header.php');

?>
<!DOCTYPE html>

<!-- Modal  Vídeo judo -->
<div class="modal fade" id="modalVideoJudo" style="min-width:600px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Fundamentos do judo</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <iframe id='video-fundamentos-judo' width="560" height="315" src="https://www.youtube.com/embed/s648bFMMkeM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal vídeo entrevista -->
<div class="modal fade" id="modalVideoEntrevista">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Entrevista Rafaela Silva</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <iframe id='videoEntrevistaRafaela' width="560" height="315" src="https://www.youtube.com/embed/tVCl5VjW_NU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>


<head>

    <link rel='stylesheet' href='./CSS/post-format.css' type="text/css" />
    <link rel='stylesheet' href="./CSS/css-Judo.css" type='text/css' />
</head>

<body>
    <div id='corpo-texto'>

        <div id="origem-judo">

            <div class="container-informativo sr">
                <div class="container-texto-informativo">
                    <h1>A origem do judô</h1>
                    <p>O estilo Takenouchi-ryu, fundado em 1532, é considerado a origem do Ju-Jutsu japonês.
                        Essa arte é utilizada tanto para atacar quanto para se defender usando apenas o corpo.
                        Em 1882, o mestre Kano fundou o Instituto Kodokan, que significa "um lugar para estudar o caminho" em japonês. Kano desenvolveu uma linha filosófica baseada no conceito de ippon-shobu (luta pelo ponto perfeito) e um código moral, além de transformar a arte marcial em um esporte. Com seu trabalho, Jigoro Kano criou uma modalidade acessível a todos, independentemente de gênero, idade, altura ou peso, fortalecendo corpo, mente e espírito de forma integrada. O Judô é um esporte inclusivo que pode ser praticado por homens, mulheres, crianças e idosos.
                    </p>
                </div>
                <div class="container-imagem">
                    <img src="./Imagens/JigoroKano.jpg" class="rounded-circle" alt="JigoroKano">
                    <p>Jigoro Kano, Fundador do judo</p>
                </div>
            </div>
        </div>
        <div id="primeiro-medalista">
            <div class="container-informativo sr">
                <div class="container-imagem">
                    <img src='./Imagens/ChiakiIshii.jpg' style="border-radius: 20px 20px 0px 0px;" alt="ChiakiIshii" />
                    <p class="legenda-img">Chiaki Ishii, primeiro medalista olímpico</p>
                </div>
                <div class="container-texto-informativo" style="margin-left:20px">
                    <h1>Primeiro medalista Olímpico</h1>
                    <p>
                        O primeiro medalhista olímpico da história do judô brasileiro,
                        Chiaki Ishii, <br> será homenageado e terá seu nome eternizado no Hall da Fama do Comitê Olímpico do Brasil. <br>
                        Nesta sexta-feira, foi anunciada a lista dos 10 ídolos do esporte a serem homenageados neste ano, e
                        Ishii <br>foi o indicado da Confederação Brasileira de Judô para ser o primeiro judoca no Hall da Fama brasileiro.
                        <br>Ishii conquistou a medalha de bronze nos Jogos de Munique 1972 e também no Mundial de Ludwigshafen em 1971.
                        <br>Sua trajetória e conquistas no esporte representam um legado inspirador para futuras gerações de judocas brasileiros.
                    </p>
                </div>

            </div>
        </div>
        <div id="atual-campeao">

            <div class="container-informativo sr">
                <div class="container-texto-informativo" style="margin-right:20px;">
                    <h1>Atual campeão</h1>
                    <p>
                        A judoca brasileira Rafaela Silva, campeã olímpica nos Jogos Olímpicos Rio 2016, conquistou o bicampeonato
                        no Mundial de Judô neste sábado, 8 de setembro de 2022, na categoria 57kg, em Tashkent, no Uzbequistão.
                        Com esta vitória, Rafaela acumula sua sétima medalha em Mundiais, adicionando-se ao ouro conquistado
                        em 2013, às pratas em 2011, 2013 (equipes) e 2017 e aos bronzes de 2019 (individual e equipes).
                        A conquista de Rafaela Silva no Mundial de Judô 2022 é um testemunho de sua excelência no esporte e
                        é um exemplo inspirador de perseverança e determinação para atletas em todo o mundo.
                    </p>
                </div>
                <div class="container-imagem">
                    <img src="./Imagens/RafaelaSilva.png" style="border-radius: 20px 20px 0px 0px;" alt="JigoroKano">
                    <p class="legenda-img">Rafaela Silva, Campeã Olímpia de Judo</p>
                </div>
            </div>
        </div>
        <div class="wave-separator">

        </div>
        <div class="container-galeria">
            <div class="galeria">
                <h1>Galeria</h1>
                <div class="inner-galeria">
                    <a id='botaoFundamentos' class="btn btn-info">Fundamentos do Judo</a>
                    <a id='botaoEntrevistaRafaela' class="btn btn-info">Entrevista Rafaela Silva</a>
                </div>
            </div>
        </div>
    </div>




    <!-- Controle de exibição Modal de galeria videos -->
    <script>
        $(document).ready(function() {
            $("#botaoFundamentos").click(function() {
                ScrollReveal().destroy();
                $("#modalVideoJudo").modal({
                    backdrop: "static" // Define a opção "backdrop" como "static"
                });
                $("#modalVideoJudo .modal-dialog").css("min-width", "590px");
                $("#modalVideoJudo .modal-content").css("min-height", "350px");
                $("#modalVideoJudo .modal-content").css("height", "450px");
                $("#modalVideoJudo .modal-content").css("width", "600px");
            });

            // Adiciona um manipulador de eventos para o botão de fechar
            $("#modalVideoJudo .close").click(function() {
                $("#modalVideoJudo").modal("hide");
            });
        });
        $(document).ready(function() {
            $("#botaoEntrevistaRafaela").click(function() {
                ScrollReveal().destroy();
                $("#modalVideoEntrevista").modal({
                    backdrop: "static" // Define a opção "backdrop" como "static"
                });
                $("#modalVideoEntrevista .modal-dialog").css("min-width", "590px");
                $("#modalVideoEntrevista .modal-content").css("min-height", "350px");
                $("#modalVideoEntrevista .modal-content").css("height", "450px");
                $("#modalVideoEntrevista .modal-content").css("width", "600px");
            });
            $(".close").click(function() {

                $("#modalVideoEntrevista").modal("hide");
            });
        });
    </script>
    <script src="./JS/ScrollReveal.js"></script>
</body>
<?php
require_once('./Footer.php');

?>

</html>