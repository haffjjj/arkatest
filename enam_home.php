<?php
require_once('lima_class.php');
$method = new dbmethod();
$posts = $method->getpost();
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Design Post</title>
        <link rel="stylesheet" href="_assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="_assets/css/custom.css">
    </head>

    <body>

        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Arkademy Test</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                        <!-- <a class="nav-item nav-link" href="#">About me</a> -->
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <div class="main-wrapper container">
                <p class="in-post">home</p>
                <?php foreach ($posts as $value):?>
                <div class="posts">
                    <a href="enam_article.php?id=<?php echo $value['id'] ?>"><h4 class="posts-title"><?php echo $value['title'] ?></h4></a>
                    <p class="posts-by">dibuat oleh : <?php echo $value['username'] ?></p>
                    <div class="posts-content"><?php echo $value['content'] ?></div>
                </div>
                <?php endforeach; ?>
            </div>

        </main>
        <footer>
            <p>Copyright 2018 by Jondes</p>
        </footer>

        <script src="_assets/js/jquery-3.3.1.min.js"></script>
        <script src="_assets/js/bootstrap.min.js"></script>
    </body>

    </html>