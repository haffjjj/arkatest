<?php
if(isset($_POST['submit'])){
    //pencegahan kalo ada yang langsung inject
    //function nya
    function validate($value, $name){

        //username to lower
        //username akan selalu valid karna sudah di lowercase kan
        if($name == 'username'){
            return $username = strtolower($_POST['username']);
        }

        //validate email
        if($name == 'email'){
            if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                
                //email to lower
                return $email = strtolower($_POST['email']);
            }
            else{
                return 'email not valid, value : '.$_POST['email'];
            }
        }
        //validate phone
        if($name="phone"){
            if(filter_var($_POST['phone'], FILTER_VALIDATE_INT)){
                return $phone = $_POST['phone'];
            }
            else{
                return 'phone not valid, value : '.$_POST['phone'];
            }
        }
    }
    
    $username = validate($_POST['username'],'username');
    $email = validate($_POST['email'],'email');
    $phone = validate($_POST['phone'],'phone');

    echo $username.'<br>';
    echo $email.'<br>';
    echo $phone.'<br>';
}
?>