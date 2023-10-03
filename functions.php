<?php

function nameLengthIsValid($nameToValid){
    $length= strlen($nameToValid);
    $responses=[
        'isValid'=>false,
        'msg'=>''

    ];
    if ($length <2) {
        $responses=[
            'isValid'=>false,
            'msg'=>'Nom trop court'
        ];
    }
    elseif ($length >10) {
        $responses=[
            'isValid'=>false,
            'msg'=>'Nom trop long'
        ];
    }
    return $responses;
}

function addSalt($nameToSalt){
    $salt='unPeuxDeSel123!';
    $saltedName=$salt.$nameToSalt.$salt;

    return $saltedName;
}


?>