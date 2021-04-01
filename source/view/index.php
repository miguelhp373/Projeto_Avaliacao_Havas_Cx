<?php require_once('../Api/view2.php') ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Api Posts - Post <?php echo $_GET['id']; ?></title>

    <!--Jquery-->
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js//showMorePosts.js"></script>

    <!--Fonts Externals-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/bb41ae50aa.js" crossorigin="anonymous"></script>

    <!--Internal Styles-->
    <link rel="stylesheet" href="../styles/view2.css">
    <link rel="stylesheet" href="../styles/components/navbar.css">
</head>

<body>
    <header>
        <nav>
            <a href="../../index.php" class="btn-back" title="Voltar a Página Inicial">
                <button class="back-to-home">
                    <i class="fas fa-arrow-left"></i>
                </button>

            </a>
            <div class="brand-name brand">
                <h1>API Posts</h1>
            </div>
        </nav>
    </header>
    <main>
        <a href="#" class="post">
            <div class="container post">
                <div class="content">
                    <div class="title">
                        <span><?php echo $postSelect->title; ?></span>
                    </div>
                    <div class="body">
                        <span><?php echo $postSelect->body; ?></span>
                    </div>
                </div>
            </div>
        </a>
        <br>

        <center><button id="showMore" class="btn-showmore">Leia Mais</button></center>

        <?php foreach ($readyMore as $items) { ?>
            <a href="<?php echo "index.php?id=" . $items->id; ?>" title='Ver Post' class="hidden moreposts">
                <div class="container" class="hidden">
                    <div class="content">
                        <div class="title">
                            <span><?php echo $items->title; ?></span>
                        </div>
                        <div class="body">
                            <span><?php echo $items->body ?></span>
                        </div>
                    </div>
                </div>
            </a>
        <?php } ?>
        <!--Botao topo-->
        <div class="arrow">
            <a href="#" title="Voltar ao topo do site"><span class="fas fa-angle-up"></span></a>
        </div>
        <!--Fim Botao topo-->
    </main>
</body>

</html>