<?php
require 'form.php';
session_start();
// // サニタイズ
$clean = sanitizeRequest($_REQUEST);
changeSession($clean);
$validate = new requestValidation();
$validate->checkRequired($clean, $form);

if($validate->error) {
    $_SESSION['error'] = $validate->error;
    header("Location: ./../otoiawase.php");
}
else {
    $_SESSION['error'] = "";
    header("Location: ./../otoiawase-confirm.php");
}

//----------------------------------------------------------------

function sanitizeRequest($request) {
    if( !empty($request) ) {
        foreach( $request as $key => $value ) {
            $clean[$key] = htmlspecialchars( $value, ENT_QUOTES);
        } 
    }
    return $clean;
}

function changeSession($request) {
    foreach($request as $key => $value) {
        $_SESSION[$key] = $value;
    }
}

class requestValidation {
    public $request;
    public $form;
    public $error = [];

    // function setRequest($request) {
    //     $this->$request = $request;
    // }
    // function setForm($form) {
    //     $this->$form = $form;
    // }
    // function getError() {
    //     return $this->error;
    // }

    function checkRequired($request, $form) {
        foreach($request as $key => $value) {
            if(!isset($form[$key])) {
                continue;
            }
            if(empty($value) && $form[$key]['required'] == true) {
                $this->error[] = $form[$key]['namejp'] . 'は必須項目です。'; 
            }
        }
    }
}