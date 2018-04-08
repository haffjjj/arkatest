<?php

//membuat function rand a-z or 0-9
function randkey(){
    $char = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',1,2,3,4,5,6,7,8,9,0];
    return $randchar = $char[rand(0,35)];
}

//membuat function randserial
function randserial(){
    return randkey().randkey().randkey().randkey().'-'.randkey().randkey().randkey().randkey().'-'.randkey().randkey().randkey().randkey().'-'.randkey().randkey().randkey().randkey();
}

//membuat 300 serial dari fungsi randserial
for ($i=1; $i <= 300 ; $i++) { 
    echo $i.'.) '.randserial().'<br>';
}

?>