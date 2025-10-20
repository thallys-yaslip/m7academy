<!DOCTYPE html>
<html lang="Pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Index</title>
    <link rel="stylesheet" href="./scss/style.css">
    <link rel="stylesheet" href="./scss/components.css">
</head>

<body>
    <div class="container_principal">
        <div class="scopo">
            <div class="left_side">
                <img src="./assets/logo.png" alt="">
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
                <div class="avatar">
                    <img src="./assets/logo.png" alt="">

                </div>
            </div>
        </div>
    </div>
</body>

</html>