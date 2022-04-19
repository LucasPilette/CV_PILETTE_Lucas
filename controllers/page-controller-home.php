<?php 

require_once(dirname(__FILE__) .'/../config/consts.php');


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $mail = trim(filter_input(INPUT_POST,'mailAdress',FILTER_SANITIZE_EMAIL));
    $firstName = trim(filter_input(INPUT_POST,'firstname',FILTER_SANITIZE_SPECIAL_CHARS));
    $lastName = trim(filter_input(INPUT_POST,'lastname',FILTER_SANITIZE_SPECIAL_CHARS));
    $content = trim(filter_input(INPUT_POST,'content',FILTER_SANITIZE_SPECIAL_CHARS));
    mail('pilettelucas@gmail.com',"Mail de $lastName $firstName", "$content  Contact : $mail","From : $mail \r\n");
};

include(dirname(__FILE__) .'/../views/templates/header.php');
include(dirname(__FILE__) .'/../views/home.php');
include(dirname(__FILE__) .'/../views/templates/footer.php');