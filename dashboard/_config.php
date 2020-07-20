<?php
  $dir = scandir('./page');
  $defaultPage = '404';
  $page = null;
  if(isset($_SESSION['_kawToken'])){
    if(isset($_GET['_page'])){
        if(in_array(($_GET['_page'].'.php'),$dir, true) && strlen($_SESSION['_kawToken']) === 32){
            $page = trim($_GET['_page']);
          }else header('location:index.php?_page=404');
    }else  $page = 'home';
  }else header('location:./page/login.php');
?>