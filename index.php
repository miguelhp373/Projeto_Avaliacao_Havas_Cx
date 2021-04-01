<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Api Posts</title>

    <!--Fonts Externals-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/bb41ae50aa.js" crossorigin="anonymous"></script>

    <!--Internal Styles-->
    <link rel="stylesheet" href="source/styles/index.css">
    <link rel="stylesheet" href="source/styles/components/navbar.css">


</head>

<body>
    <header>
        <nav>
            <a href="#" class="home-brand">
                <div class="brand-name">
                    <h1>API Posts</h1>
                </div>
            </a>
        </nav>
    </header>
    <main>
        <?php require_once('source/Api/index.php'); ?>
        <?php if ($getPosts != null) { ?>
            <?php foreach ($getPosts as $items) { ?>
                <a href="<?php echo "source/view/index.php?id=" . $items->id; ?>" title='Ver Post'>
                    <div class="container">
                        <div class="content">
                            <header>
                                <div class="user">
                                    <span> <i class="far fa-user-circle" style="font-size: 2rem;"></i> &nbsp; User<?php echo $items->userId; ?></span>
                                </div>
                            </header>
                            <div class="title">
                                <span><?php echo $items->title; ?></span>
                                <hr>
                            </div>
                            <div class="body">
                                <span><?php echo $items->body ?></span>
                            </div>
                        </div>
                    </div>
                </a>
            <?php } ?>
        <?php } else { ?>
            <center><span>Não Existem Posts No Momento Volte Mais Tarde, Erro Ao Tentar se Comunicar com a Api.</span></center>
        <?php } ?>
        <!--Botao topo-->
        <div class="arrow">
            <a href="#" title="Voltar ao topo do site"><span class="fas fa-angle-up"></span></a>
        </div>
        <!--Fim Botao topo-->
        <center><h2>Você chegou Ao final, volte ao topo para continuar vendo os Posts</h2></center>
    </main>
</body>

</html>