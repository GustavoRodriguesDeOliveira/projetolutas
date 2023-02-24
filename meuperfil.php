<?php
require_once('./Header.php');

?>


<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="./CSS/css-profile.css" type="text/css" />

</head>


<body>

    <div class="corpo-texto">
        <div class="container-perfil">
            <div class="container-user">
                <div class="container-user-information">
                    <div class="container-user-image">
                        <img src="<?php echo $_SESSION['user-image']; ?>" />
                    </div>
                    <div class="boas-vindas-user">
                        <h1><?php echo $_SESSION['user-name']; ?></h1>
                    </div>
                    <div class="controles">
                        <form action="./Atualizar_foto.php" method="POST" enctype="multipart/form-data">
                            <input type="file" name="imagem" accept="image/*" />
                            <button type="submit" name="upload">Alterar foto</button>
                        </form>
                    </div>
                </div>
                <div class="container-user-slogan">
                    <form method="POST" action="./Atualizar_slogan.php">
                        <div class="user-slogan-area">
                            <h2>Slogan do usuário</h2>
                            <textarea name="slogan"><?php echo $_SESSION['user_slogan'] ?></textarea>
                            <button type="submit">Atualizar</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>


    </div>

</body>

</html>