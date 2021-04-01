<?php require_once('ApiPostView2.php') ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Posts - Post <?php echo $_GET['id']; ?></title>

    <!--Jquery-->
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js//showMorePosts.js"></script>

    <!--Internal Styles-->
    <link rel="stylesheet" href="../styles/view2.css">
    <link rel="stylesheet" href="../styles/components/navbar.css">
</head>

<body>
    <header>
        <nav>
            <a href="../../index.php" style="padding: 8px;margin-left: 20px;">
                <div class="brand-name">
                    <h1>API Posts</h1>
                </div>
            </a>
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
            <a href="<?php echo "index.php?id=" . $items->id; ?>" title='Abrir' class="hidden moreposts">
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
    </main>
</body>

</html>