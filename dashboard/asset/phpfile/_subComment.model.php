<?php 
  
  class SubComment{
      public $id;
      public $idComment;
      public $text;
      public $date;

      function __construct($id,$idComment,$text,$date){
          $this->id = $id;
          $this->idComment = $idComment;
          $this->text = $text;
          $this->date = $date;
      }
  }

?>