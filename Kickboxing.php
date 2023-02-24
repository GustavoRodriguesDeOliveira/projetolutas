<?php

namespace PROJETOSITELUTAS\PHP;

require_once('./Header.php');

?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="./CSS/post-format.css" type="text/css" />
    <link rel="stylesheet" href="./CSS/css-kickboxing.css" type="text/css" />
</head>
<div class="modal fade" id="modalFundamentosKick">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Fundamentos KickBoxing</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div id='informativo-trofeus' class="modal-body">
                <div id='container-trofeus'>
                    <div class="modal-body">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/CPKj-C5kvzE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<body>
    <div id='corpo-texto'>
        <div id="kickboxing">
            <div class="container-informativo sr">
                <div class="container-texto-informativo" style="margin-right:20px;">
                    <h1>A origem do KickBoxing</h1>
                    <p>
                        O KickBoxing surgiu na década de 70, nos Estados Unidos, quando os caratecas tradicionais estavam cansados das competições que não permitiam um contato pleno, e começaram a adaptar protetores de pé e mão para que os contatos fossem permitidos, só que com pouco risco de lesão. A modalidade competitiva que recebeu o nome de “Karatê Full Contact” (Karatê de Contato Total), com o passar dos tempos, fez com que estes mesmos atletas começassem a entender que aquela modalidade era um outro tipo de luta, que não tinha nada a ver com o “Karatê de Competição”. Recebeu então o nome de “Full Contact”, que traduzia muito mais o espírito deste novo esporte. Dominique Valera, um dos maiores nomes do Karatê Mundial de todos os tempos, com mais de mil vitórias e vários títulos europeus e mundiais, começou a treinar a modalidade nos Estados Unidos com Bill Wallace e Jeff Smith.
                    </p>
                </div>

                <div class="container-imagem">
                    <img src="./Imagens/OsamuNoguchi.jpg" style="border-radius:20px 20px 0px 0px" />
                    <p class="legenda-img">Osamu Noguchi <br> Criador do kickboxing</p>
                </div>
            </div>
        </div>
    </div>
    <div id="primeiro-medalista">
        <div class="container-informativo sr">
            <div class="container-imagem">
                <img src='./Imagens/ErnestoHoost.jpg' style="border-radius: 20px 20px 0px 0px;" alt="ErnestoHoost" />
                <p class="legenda-img">Ernesto Hoost, Quadricampeão <br> do maior campeonato de kickboxing</p>
            </div>
            <div class="container-texto-informativo" style="margin-left:20px">
                <h1>Um dos maiores campeoes do KickBoxing</h1>
                <p>
                    Ernesto Hoost ganhou o maior campeonato de kickboxing de todos os tempos por quatro vezes 1997, 1999, 2000 e 2002 . O extinto evento japonês revelou diversas feras da luta em pré. Em seu primeiro k-1, Hoost teve uma performance fenomenal, vencendo Peter Aerts e Maurice L. Smith. Mas o holandês acabou nocauteado na final pelo croata Branko Cikatić. No final do mesmo ano, Hoost acabou vencendo seu primeiro K-1. E ao longo de sua carreira, ele conquistou outros três títulos do evento, contabilizando 4 no total.
                </p>
            </div>

        </div>
    </div>
    <div id="atual-campeao">
        <div class="container-informativo sr">
            <div class="container-texto-informativo" style="margin-right:20px;">
                <h1>Atual campeão</h1>
                <p>
                    O atleta sorocabano Lucas Rafael Ferraz dos Santos, de 20 anos, conquistou, no fim de semana (11 e 12), o cinturão de campeão da categoria de 81kg da Copa Europeia de Kickboxing, após lutar com atletas da Alemanha e da Bósnia. O evento aconteceu entre os dias 10 e 13 de fevereiro, em Karlovac, na Croácia. Ele foi um dos 11 atletas que representaram o Brasil no evento e o único representando a Liga Sorocabana de Kickboxing (LSKB).
                </p>
            </div>

            <div class="container-imagem">
                <img src="./Imagens/LucasRafael.jpg" style="border-radius:20px 20px 0px 0px" />
                <p class="legenda-img">Lucas Rafael <br> Campeão da categoria de 81kg da Copa Europeia de Kickboxing</p>
            </div>
        </div>
    </div>
    <div class="wave-separator"></div>
    <div class="container-galeria">
            <div class="galeria">
                <h1>Galeria</h1>
                <div class="inner-galeria">
                    <a id='botaoFundamentos' class="btn btn-info">Fundamentos KickBoxing</a>
                    
                </div>
            </div>
        </div>
    <div id="footer">
        <?php
        require_once('./Footer.php');

        ?>
    </div>
    <script>
        $(document).ready(function() {
            $("#botaoFundamentos").click(function() {
                ScrollReveal().destroy();
                $("#modalFundamentosKick").modal({
                    backdrop: "static" // Define a opção "backdrop" como "static"
                });
                $("#modalFundamentosKick .modal-dialog").css("min-width", "590px");
                $("#modalFundamentosKick .modal-content").css("min-height", "350px");
                $("#modalFundamentosKick .modal-content").css("height", "450px");
                $("#modalFundamentosKick .modal-content").css("width", "600px");
            });

            // Adiciona um manipulador de eventos para o botão de fechar
            $("#modalFundamentosKick .close").click(function() {
                $("#modalFundamentosKick").modal("hide");
            });
        });
    </script>
    <script src="./JS/ScrollReveal.js"></script>
</body>


</html>