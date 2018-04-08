<?php 
require_once('lima_class.php');
$method = new dbmethod();

if(isset($_POST['submit'])){
    // echo $_POST['id'];
    // die;
    $method->insertcomment($_POST['comment'],$_POST['id']);
}

?>