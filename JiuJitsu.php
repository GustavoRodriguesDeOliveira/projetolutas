<?php

namespace PROJETOSITELUTAS\PHP;

require_once('./Header.php');

?>
<!DOCTYPE html>

<!-- Modal trofeus -->
<div class="modal fade" id="modalTrofeusLeandroLo">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lista de troféus de Leandro Lo</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div id='informativo-trofeus' class="modal-body">
                <div id='container-trofeus'>
                    <div class="modal-body">
                        <ul>
                            <li>
                                <h4>Mundial da IBJJF:</h4>
                                <p>2012, 2013, 2014, 2015, 2016, 2018, 2019 e 2022</p>
                            </li>
                            <li>
                                <h4>Pan da IBJJF:</h4>
                                <p>2012, 2014, 2015, 2016, 2017** e 2018**</p>
                            </li>
                            <li>
                                <h4>Europeu da IBJJF:</h4>
                                <p>2017**</p>
                            </li>
                            <li>
                                <h4>Brasileiro da CBJJ:</h4>
                                <p>2011, 2012 e 2017**</p>
                            </li>
                            <li>
                                <h4>Brasileiro da CBJJ No-Gi:</h4>
                                <p>2011 e 2012**</p>
                            </li>
                            <li>
                                <h4>Copa Podio GP dos leves:</h4>
                                <p>2011, 2013, 2014 e 2016</p>
                            </li>
                            <li>
                                <h4>Copa Podio GP dos médios:</h4>
                                <p>2012 e 2016</p>
                            </li>
                            <li>
                                <h4>Copa Podio GP dos pesados:</h4>
                                <p>2016</p>
                            </li>
                            <li>
                                <h4>Abu Dhabi Pro:</h4>
                                <p>2011, 2013, 2014 e 2015</p>
                            </li>
                            <li>
                                <h4>BJJ Stars GP dos médio:</h4>
                                <p>2020</p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Modal trofeus -->
<div class="modal fade" id="modalFundamentosJiuJitsu">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Fundamentos JiuJitsu</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div id='informativo-trofeus' class="modal-body">
                <div id='container-trofeus'>
                    <div class="modal-body">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/K2dabTSRfts" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<head>
    <link rel="stylesheet" href="./CSS/css-JiuJitsu.css" type="text/css" />
    <link rel="stylesheet" href="./CSS/post-format.css" type="text/css" />
</head>

<body>
    <div id="corpo-texto">
        <div id="jiujitsu">
            <div class="container-informativo sr">
                <div class="container-texto-informativo" style="margin-right:20px;">
                    <h1>Origem do Jiu Jitsu</h1>
                    <p>
                        Segundo alguns historiadores o Jiu-Jitsu ou “arte suave”, nasceu na Índia e era praticado por monges budistas.
                        Preocupados com a auto defesa, os monges desenvolveram uma técnica baseada nos princípios do equilíbrio,
                        do sistema de articulação do corpo e das alavancas, evitando o uso da força e de armas.
                        Com a expansão do budismo o Jiu-Jitsu percorreu o Sudeste asiático, a China e, finalmente, chegou ao Japão,
                        onde se desenvolveu e popularizou-se. A partir do final do século XIX, alguns mestres de Jiu-Jitsu migraram
                        do Japão para outros Continentes, vivendo do ensino da arte marcial e das lutas que realizavam.
                    </p>
                </div>

                <div class="container-imagem">
                    <img class='rounded' src="./Imagens/MitsuyoMaeda.jpg" />
                    <p class="legenda-img">Mitsuyo Maeda <br> Criador do Jiu Jitsu brasileiro</p>
                </div>
            </div>
        </div>
        <div id="maiores-campeoes">
            <div class="container-informativo sr">

                <div class="container-imagem">
                    <img class='rounded' src="./Imagens/RodrigoMedeiros.jpg" />
                    <p class="legenda-img">Rodrigo Medeiros <br> bicampeão mundial peso aberto de Jiu-Jitsu.</p>
                </div>
                <div class="container-texto-informativo" style="margin-left:20px;">
                    <h3>Rodrigo "Comprido" Medeiros</h3>
                    <p>Um dos maiores campeões de jiu-jitsu</p>
                    <p>Rodrigo “Comprido” Medeiros (1999/2000)Campeão completo desde as faixas coloridas,
                        o lutador carioca formado por Romero “Jacaré” Cavalcanti ficou conhecido por apagar o brilho
                        de outras estrelas do Jiu-Jitsu na virada do século, quando domou o ímpeto de craques como
                        Fernando Margarida, Roberto Roleta e Nino Schembri, e se sagrou bi absoluto.
                    </p>
                </div>
            </div>
        </div>
        <div id="campeao-atual-ranking">

            <div class="container-informativo sr">
                <div class="container-imagem">
                    <img class='rounded' src="./Imagens/LeandroLo.jpg" />
                    <p class="legenda-img">Leandro Lo <br> 8 vezes campeão mundial de jiujitsu <br> Campeão mundial de 2022</p>
                </div>
                <div class="container-texto-informativo" style="margin-left:20px;;">
                    <h1>Campeão mundial atual</h1>
                    <p>Nascido no dia 11 de maio de 1989, Leandro Lo tinha 33 anos. O primeiro contato com a arte suave aconteceu em 2004, quando tinha 15 anos, no Projeto Social Lutando Pelo Bem (PSLPB) – que era comandado pelo faixa-preta Cícero Costha. Lá, o paulista teve todo o seu crescimento como atleta e pessoa até chegar à elite do Jiu-Jitsu.
                    </p>
                    <button id='botaoLeandroLo' class="btn btn-info">Lista de troféus</button>



                </div>
            </div>
        </div>
        <div class="wave-separator"></div>
        <div class="container-galeria">
            <div class="galeria">
                <h1>Galeria</h1>
                <div class="inner-galeria">
                    <a id='botaoFundamentos' class="btn btn-info">Fundamentos JiuJitsu</a>
                    
                </div>
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
            $("#botaoLeandroLo").click(function() {
                ScrollReveal().destroy();
                $("#modalTrofeusLeandroLo").modal({
                    backdrop: "static" // Define a opção "backdrop" como "static"
                });

            });
            $(".close").click(function() {
                $("#modalTrofeusLeandroLo").modal("hide");
            });
        });
        $(document).ready(function() {
            $("#botaoFundamentos").click(function() {
                ScrollReveal().destroy();
                $("#modalFundamentosJiuJitsu").modal({
                    backdrop: "static" // Define a opção "backdrop" como "static"
                });
                $("#modalFundamentosJiuJitsu .modal-dialog").css("min-width", "590px");
                $("#modalFundamentosJiuJitsu .modal-content").css("min-height", "350px");
                $("#modalFundamentosJiuJitsu .modal-content").css("height", "450px");
                $("#modalFundamentosJiuJitsu .modal-content").css("width", "600px");
            });

            // Adiciona um manipulador de eventos para o botão de fechar
            $("#modalFundamentosJiuJitsu .close").click(function() {
                $("#modalFundamentosJiuJitsu").modal("hide");
            });
        });
    </script>
    <script src="./JS/ScrollReveal.js"></script>
</body>



</html>