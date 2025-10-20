<!DOCTYPE html>
<html lang="Pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Index</title>
    <link rel="stylesheet" href="./scss/style.css">
    <link rel="stylesheet" href="./CompiledCss/style.css">
    <link rel="stylesheet" href="./CompiledCss/components.css">
    <link rel="stylesheet" href="./scss/components.css">
</head>

<body>
    <div class="container_principal">
        <div class="scopo">
            <div class="left_side">
                <img class="img_left_side" src="./assets/logo.png" alt="">
                <div class="container_principal_left_side">

                    <ul>
                        <li class="icon_img active">
                            <img src="./assets/icons/sidebar/home.png" alt="">
                        </li>
                        <li class="icon_img">
                            <img src="./assets/icons/sidebar/stadium.png" alt="">
                        </li>
                        <li class="icon_img">
                            <img src="./assets/icons/sidebar/shield.png" alt="">
                        </li>
                        <li class="icon_img">
                            <img src="./assets/icons/sidebar/blockchain.png" alt="">
                        </li>
                    </ul>

                </div>

                <div class="container_logout">
                    <a href="">
                        <img src="./assets/icons/sidebar/exit.png" alt="">
                    </a>
                </div>
            </div>
            <div class="middle_side">
                <div class="topo_middle">
                    <div class="left_side_middle">
                        <h2>bem vindo <span>nome</span></h2>
                    </div>
                    <div class="right_side_middle">


                    </div>
                </div>


                <div class="container_conteudos_principais">
                    <?php
                    require('./components/conteudoprincipal.php');
                    ?>
                </div>
            </div>
            <div class="right_side">
                <div class="container_members">
                    <div class="avatar">
                        <img src="./assets/logo.png" alt="">
                    </div>

                    <ul class="members_equipe">
                        <li class="member">
                            <img src="./assets/logo.png" alt="">

                        </li>
                        <li class="member">
                            <img src="./assets/logo.png" alt="">

                        </li>
                        <li class="member">
                            <img src="./assets/logo.png" alt="">

                        </li>
                        <li class="member">
                            <img src="./assets/logo.png" alt="">

                        </li>
                        <li class="member">
                            <img src="./assets/logo.png" alt="">

                        </li>
                    </ul>
                </div>

                <ul class="social">
                    <li>
                        <a href=""><img src="./assets/icons/discord.png" alt=""></a>
                    </li>
                    <li>
                        <a href=""><img src="./assets/icons/whatsapp.png" alt=""></a>
                    </li>
                    <li>
                        <a href=""><img src="./assets/icons/instagram.png" alt=""></a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</body>

</html>