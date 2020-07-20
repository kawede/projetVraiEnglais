<?php 
  class Comment{
      public $id;
      public $idUser;
      public $idArticle;
      public $text;
      public $date;

      function __construct($id,$idUser,$idArticle,$text,$date){
          $this->id = $id;
          $this->idUser = $idUser;
          $this->idArticle = $idArticle;
          $this->text = $text;
          $this->date = $date;
      }
  }
?>