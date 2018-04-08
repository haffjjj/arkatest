<?php
require_once('lima_class.php');
$method = new dbmethod();
if(isset($_GET['id'])){
    $posts = $method->getpostcommentbyid($_GET['id']);
    if(!count($posts) > 0){
        echo 'gak ada post';
        die;
    }
    else{
        $post = $posts[0]; 
    }
}
else{
    echo 'gak ada get';
    die;
}
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
                        <a class="nav-item nav-link" href="enam_home.php">Home
                        </a>
                        <!-- <a class="nav-item nav-link" href="#">About me</a> -->
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <div class="main-wrapper container">
                <!-- <h2 class="post-title">Postingan</h2>
                <div class="line"></div> -->

                <p class="in-post">home / <?php echo $post['title'] ?></p>

                <div class="posts">
                    <h4 class="posts-title"><?php echo $post['title'] ?></h4>
                    <p class="posts-by">dibuat oleh : <?php echo $post['username'] ?></p>
                    <div class="posts-content"><?php echo $post['content'] ?></div>
                    <form action="enam_postcomment.php" method="POST">
                        <input type="hidden" value="<?php echo $_GET['id'] ?>" name="id">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Write Comment :</label>
                            <textarea name="comment" required class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary mb-2">Comment POST</button>
                    </form>
                    <p class="posts-comment">Comment :</p>

                    <?php foreach ($post['comment'] as $value) :?>
                    <div class="posts-comment-contents">
                        <div class="comment-user">
                            <img src="_assets/images/user.png" alt="">
                            <p>User demo said :</p>
                        </div>
                        <div class="comment-content"><?php echo $value['comment'] ?></div>
                    </div>
                    <?php endforeach; ?>
                   
                </div>
            </div>

        </main>
        <footer>
            <p>Copyright 2018 by Jondes</p>
        </footer>

        <script src="_assets/js/jquery-3.3.1.min.js"></script>
        <script src="_assets/js/bootstrap.min.js"></script>
    </body>

    </html>