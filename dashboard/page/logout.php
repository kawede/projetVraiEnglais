<?php 
if(isset($_SESSION['_kawToken'])){
    unset($_SESSION['_kawToken']); 
    unset($_SESSION['access']); 
    $_SESSION['_kawToken'] = null;
    ?>
    <script> window.location.replace('./page/login.php') </script>
    <?php
}
if(isset($_SESSION['_kawTokenTeacher'])){
    unset($_SESSION['_kawTokenTeacher']);
    $_SESSION['_kawTokenTeacher'] = null;
    $_SESSION['access'] = null;
    ?>
    <script> window.location.replace('./page/login.php') </script>
    <?php
}
?>