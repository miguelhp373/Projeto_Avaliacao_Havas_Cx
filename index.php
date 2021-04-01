<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Posts</title>

    <!--Fonts Externals-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/bb41ae50aa.js" crossorigin="anonymous"></script>

    <!--bootstrap 5.0-->
    <!-- <link rel="stylesheet" href="source/bootstrap 5.0/css/bootstrap.min.css">
    <script src="source/bootstrap 5.0/js/bootstrap.bundle.min.js"></script> -->

    <!--Internal Styles-->
    <link rel="stylesheet" href="source/styles/index.css">
    <link rel="stylesheet" href="source/styles/components/navbar.css">


</head>

<body>
    <header>
        <nav>
            <a href="#" style="padding: 8px;margin-left: 20px;">
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
                <a href="<?php echo "source/view/index.php?id=" . $items->id; ?>" title='Abrir'>
                    <div class="container">
                        <div class="content">
                            <header>
                                <div class="user">
                                    <span> <i class="far fa-user-circle" style="font-size: 2rem;"></i> &nbsp; User<?php echo $items->userId; ?></span>
                                </div>
                            </header>
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
        <?php } else { ?>
            <center><span>Não Existem Posts No Momento Volte Mais Tarde, Erro Ao Tentar se Comunicar com a Api.</span></center>
        <?php } ?>
    </main>
</body>

</html>