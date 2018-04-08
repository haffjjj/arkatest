<?php

$uangdata = [50000,20000,10000,5000,2000,1000,500]; //kembalian yang ada

//membuat function rincian kembalian
function rkembalian($kembalian,$uangdata){
    for ($i=0; $i < count($uangdata) ; $i++) { 
        $d = 0;
        while($kembalian >= $uangdata[$i]){
            $kembalian = $kembalian-$uangdata[$i];
            $d++;
        }
        if($d>0){
            echo 'kembalian '.$uangdata[$i].' ada '.$d.'<br>';
        }
    }
}

$uang = 50000; //uang yang dibawa
$belanja = 500; //total belanja
$kembalian = $uang-$belanja; //menghitung kembalian

echo 'uang : '.$uang.'<br>';
echo 'total belanja : '.$belanja.'<br>';
echo 'kembalian : '.$kembalian.'<br><br>';
echo 'Rincian kembalian : <br>';

//echo rincian kembalian
rkembalian($kembalian,$uangdata);


?>