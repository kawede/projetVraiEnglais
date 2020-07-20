<?php 
    if(isset($_POST['loginemail'])){
        $email = trim($_POST['loginemail']);
        $password = trim($_POST['loginpassword']);
        if(_connectionAdmin($email,$password,$bdd) === 1){
            ?>
            <script> window.location.replace('../index.php?_page=home') </script>
            <?php
        }else{
            echo('<b class="text-danger"><span class="text-danger fa fa-warning"></span> mot de pass ou nom d\'utilisateur incorrecte</b>');
        }
    }
?>
