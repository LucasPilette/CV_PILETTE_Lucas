<?php 

require_once(dirname(__FILE__) .'/../config/consts.php');


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    

    // VERIF EMAIL
    $mail = trim(filter_input(INPUT_POST,'mailAdress',FILTER_SANITIZE_EMAIL));
    if(empty($mail)){
        $errors['email'] = 'Veuillez saisir votre email.';
    } else {
        $checkedMail = filter_var($mail,FILTER_VALIDATE_EMAIL);
        if(!$checkedMail){
            $errors['email'] = 'Veuillez saisir un email valide.';
        }
    }


    // VERIF PRENOM
    $firstName = trim(filter_input(INPUT_POST,'firstname',FILTER_SANITIZE_SPECIAL_CHARS));
    if(empty($firstName)){
        $errors['firstname'] = 'Veuillez saisir votre prénom.';
    } else {
        $checkedfirstname = filter_var($firstName,FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REG_EXP_NAME . '/')));
        if(!$checkedfirstname){
            $errors['firstname'] = 'Veuillez saisir un prénom valide.';
        }
    }

    // VERIF NOM
    $lastname = trim(filter_input(INPUT_POST,'lastname',FILTER_SANITIZE_SPECIAL_CHARS));
    if(empty($lastname)){
        $errors['lastname'] = 'Veuillez saisir votre nom.';
    } else {
        $checkedlastname = filter_var($lastname,FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REG_EXP_NAME . '/')));
        if(!$checkedlastname){
            $errors['lastname'] = 'Veuillez saisir un nom valide.';
        }
    }

    // VERIF CONTENU
    $content = trim(filter_input(INPUT_POST,'content',FILTER_SANITIZE_SPECIAL_CHARS));
    if(empty($content)){
        $errors['content'] = 'Veuillez saisir votre message .';
    }

    if(empty($errors) && !empty($mail) && !empty($firstName) && !empty($lastname) && !empty($content)){
        $mailState = mail('pilettelucas@gmail.com',"Mail de $lastName $firstName", "$content  Contact : $mail","From : $mail \r\n");
        if($mailState){
            $state = 'Mail envoyé avec succés.';
        }
    }
};

include(dirname(__FILE__) .'/../views/templates/header.php');
include(dirname(__FILE__) .'/../views/home.php');
include(dirname(__FILE__) .'/../views/templates/footer.php');