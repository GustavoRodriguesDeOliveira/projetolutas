<!DOCTYPE HTML>
<HTML lang="pt-BR">

<HEAD>
    <?php
    session_start();
    

    ?>
    <meta charset="UTF-8" />
    <Title> Warriors of Tomorrow</Title>
    <link rel="shortcut icon" type="imagem/x-icon" href="./Imagens/icone.ico" />

    <!-- ScrollReveal - animação de entrada -->
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

    <!-- CSS importados -->
    <!-- Reset CSS -->
    <link rel="stylesheet" type="text/css" href="./CSS/reset-css.css">

    <!-- CSS geral -->
    <link rel="stylesheet" type="text/css" href='./CSS/css-header.css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Fontes externas do google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">

</HEAD>

<body>

    <header id="headerpage">
        <div id="nome-slogan-site">
            <a href='./Home.php'>
                <h1>Warriors of Tomorrow</h1>
            </a>
            <h4>Estilos variados e empolgantes</h4>
        </div>
        <div id="nav-menu-area">
            <div class="dropdown">
                <button type="button" id='BtnEstilosLuta' class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                    Estilos de luta!
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="./Judo.php">Judô</a>
                    <a class="dropdown-item" href="./JiuJitsu.php">Jiu Jitsu</a>
                    <a class="dropdown-item" href="./MuaiThay.php">Muai Thay</a>
                    <a class="dropdown-item" href="./Kickboxing.php">Kickboxing</a>
                </div>
            </div>
            <!-- <button id='BtnDadosLutadores' class="btn btn-warning">Dados de lutadores</button> -->
            <a id='BtnDadosOlimpiadas' class="btn btn-info" href="./Olimpiadas.php">Olimpíadas</a>
            <a id='BtnUfc' class="btn btn-danger" href="./UFC.php">UFC</a>

           


            <?php if ($_SESSION['logado'] == True) { ?>
                <div class="dropdown">
                    <button id='user-id-data' data-toggle="dropdown"><img src='<?php echo $_SESSION['user-image'] ?>' /></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="./meuperfil.php">Meu perfil</a>
                        <a class="dropdown-item" href="./logout.php">Logout</a>
                    </div>
                </div>
            <?php } else { ?>
                <div class="dropdown">
                    <button id='loginbutton' data-toggle="dropdown"><img src='./Imagens/IconLogin.png' /></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="./Login.php">Login</a>
                        <a class="dropdown-item" href="./Cadastro.php">Cadastro</a>
                    </div>
                </div>
            <?php } ?>


        </div>

    </header>

</body>

</HTML>