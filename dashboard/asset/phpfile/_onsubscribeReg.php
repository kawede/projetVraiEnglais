<?php 
    if(isset($_POST['NameReg'])){
        $name = trim($_POST['NameReg']);
        $email = trim($_POST['EmailReg']);
        $phone = trim($_POST['PhoneReg']);
        $password = trim($_POST['PasswordReg']);
        if_registration($name,$email,$phone,$password,$bdd) === 1){
            echo('cool');
        }else{
            echo('<b class="text-danger"><span class="text-danger fa fa-warning"></span> mot de pass ou nom d\'utilisateur incorrecte</b>');
        }
    }
?>