<?php
require_once('lima_class.php');
$method = new dbmethod();
$posts = $method->getpostcomment();
// var_dump($method->getcommentbypost(1));
// die;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>posts</title>
</head>
<body>

<?php foreach($posts as $pvalue): ?>
    <p>title : <?php echo $pvalue['title']?></p>
    <p>dibuat : <?php echo $pvalue['username']?></p>
    <p>content : <?php echo $pvalue['content']?></p>
    <p>comment : </p>
    
    <?php foreach($pvalue['comment'] as $cvalue): ?>
        <p><?php echo $cvalue['comment'].'<br>'?></p>
    <?php endforeach; ?>
<hr>
<?php endforeach; ?>

</body>
</html>