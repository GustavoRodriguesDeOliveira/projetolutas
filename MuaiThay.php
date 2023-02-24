<?php

namespace PROJETOSITELUTAS\PHP;

require_once('./Header.php');

?>
<!DOCTYPE html>

<!-- Modal trofeus -->
<div class="modal fade" id="modalFundamentosMuaiThay">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Fundamentos Muai Thay</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div id='informativo-trofeus' class="modal-body">
                <div id='container-trofeus'>
                    <div class="modal-body">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Cisa7hQP3z8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<head>
    <link rel='stylesheet' href='./CSS/css-Muaithay.css' type='text/css' />
    <link rel="stylesheet" href="./CSS/post-format.css" type="text/css"/>
</head>

<body>
    <div id='corpo-texto'>
        <div id="muaithay">
            <div class="container-informativo sr">
                <div class="container-texto-informativo" style="margin-right:20px;">
                    <h1>Origem do Muai thay</h1>
                    <p>
                        A origem do Muay Thai confunde-se com a origem do povo Tailandês. Existem várias versões sobre a origem do Muay Thai. A mais aceita pela maioria dos Mestres de Muay Thai e também por vários historiadores Tailandeses é a seguinte: Segundo os Tailandeses, a origem de seu povo é a província de Yunnam, nas margens do rio Yang Tsé na China Central. Muitas gerações atrás eles migraram da China para o local onde atualmente é à Tailândia em busca de liberdade e de terras férteis para agricultura. Do seu local de origem, a China, até o seu destino, os Tailandeses foram constantemente hostilizados e sofreram muitos ataques de bandidos, de Senhores da Guerra, de animais, e também foram acometidos de muitas doenças. Para protegerem-se e manterem à saúde, eles criaram um método de luta chamado “Chupasart”. Este método de luta e auto-defesa fazia uso de diversas armas como por exemplo: espadas, facas, lanças, bastões, escudos, machados, arco e flecha, etc. No treinamento do “Chupasart”, freqüentemente ocorriam acidentes que causavam algumas vezes graves ferimentos aos praticantes. Para que eles pudessem treinar sem ferir-se, os tailandeses criaram um método de luta sem armas, o percursor do atual Muay Thai.
                    </p>
                </div>

                <div class="container-imagem">
                    <img  src="./Imagens/NaiKhanomTom.jpg"  style="border-radius:20px 20px 0px 0px" />
                    <p class="legenda-img">Nai Khanom Tom <br> Herói tailandês do ano 1775</p>
                </div>
            </div>
        </div>
        <div id='maiores-campeoes'>
            <div class="container-informativo sr">

                <div class="container-imagem">
                    <img class='rounded-circle' src="./Imagens/CobanLookchao.jpg" />
                    <p style="text-align:center;">Coban Lookchao <br> bicampeão mundial peso aberto de Jiu-Jitsu.</p>
                </div>
                <div class="container-texto-informativo" style="margin-left:20px;">
                    <h3>Coban Lookchaomaesaitong</h3>
                    <p>Um dos maiores campeões de Muai Thay</p>
                    <p>Coban Lookchaomaesaitong é um ex- kickboxer de Muay Thai da Tailândia e campeão mundial. Ele ganhou seu primeiro título mundial em 1985.As lutas mais difíceis de sua carreira foram contra Ramon Dekkers. Ele lutou contra ele um total de quatro vezes, resultando em duas vitórias e duas derrotas.As lutas entre Coban e Dekkers foram classificadas como as melhores por qualquer padrão, pelos fãs de Muay Thai em todo o mundo.Não por acaso, ela alcançou a expressiva marca de 250 vitorias de 270 lutas que participou.</p>
                </div>
            </div>
        </div>
        <div id="campeao-atual-ranking">
            <div class="container-informativo sr">
                <div class="container-imagem">
                    <img src="./Imagens/TainaraLisboa.jpeg" style="border-radius:20px 20px 0px 0px" />
                    <p class="legenda-img">Leandro Lo <br> 8 vezes campeão mundial de jiujitsu <br> Campeão mundial de 2022</p>
                </div>
                <div class="container-texto-informativo" style="margin-left:20px;">
                    <h1>Campeã mundial atual</h1>
                    <p>Primeira brasileira a conquistar um título mundial no Muay Thai, feito alcançado em 2013 na World Professional Muay Thai Federation (WPMF), e única a se tornar bicampeã ao faturar o cinturão da World Woman Boxing Association (WWBA) em 2014, Tainara Lisboa vem se destacando também na luta de chão, onde recebeu recentemente a faixa-roxa de Jiu-Jitsu e já faturou dois títulos mundiais No Gi pela CBJJE.
                    </p>

                </div>
            </div>
        </div>
        <div class="wave-separator"></div>
        <div class="container-galeria">
            <div class="galeria">
                <h1>Galeria</h1>
                <div class="inner-galeria">
                    <a id='botaoFundamentos' class="btn btn-info">Fundamentos Muai Thay</a>
                    
                </div>
            </div>
        </div>

    </div>


    </div>

    <div id="footer">
        <?php
        require_once('./Footer.php');

        ?>
    </div>
    
    <script src="./JS/ScrollReveal.js"></script>
    <script>
        $(document).ready(function() {
            $("#botaoFundamentos").click(function() {
                ScrollReveal().destroy();
                $("#modalFundamentosMuaiThay").modal({
                    backdrop: "static" // Define a opção "backdrop" como "static"
                });
                $("#modalFundamentosMuaiThay .modal-dialog").css("min-width", "590px");
                $("#modalFundamentosMuaiThay .modal-content").css("min-height", "350px");
                $("#modalFundamentosMuaiThay .modal-content").css("height", "450px");
                $("#modalFundamentosMuaiThay .modal-content").css("width", "600px");
            });

            // Adiciona um manipulador de eventos para o botão de fechar
            $("#modalFundamentosMuaiThay .close").click(function() {
                $("#modalFundamentosMuaiThay").modal("hide");
            });
        });
    </script>
</body>


</html>