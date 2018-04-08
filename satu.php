<?php

//membuat function biodata return 
function biodata($name,$address,$hobbies,$is_maried,$schools,$skills){
    $data = [
        'name'=>$name,
        'address'=>$address,
        'hobbies'=>$hobbies,
        'is_married'=>$is_maried,
        'schools'=>$schools,
        'skills'=>$skills
    ];
    return json_encode($data);
}

//membuat json dengan function biodata

//string
$name = 'Hafiz Joundy Syafie';

//string

$address = 'Purwokerto';
//array
$hobbies = ['coding','mbaca berita tekno'];

//boolean
$is_maried = false;

//objek with key pada php adalah array with key,
//kalo di js menggunakan objek karena tidak bisa membuat key di array :3
$schools = [
    'highSchool' => 'SMK Telkom Purwokerto',
    'university' => 'belum'
    ];

//array of objek
$skills = [
    'web'=>[
        'css',
        'html',
        'js',
        'php',
        'node'
        ],
    'design'=>[
        'photoshop,',
        'ai'
        ]
    ];

//echo jsonnya :D
echo biodata($name,$address,$hobbies,$is_maried,$schools,$skills);
// var_dump(json_decode(biodata($name,$address,$hobbies,$is_maried,$schools,$skills)));
?>