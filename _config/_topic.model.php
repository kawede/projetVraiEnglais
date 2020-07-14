<?php 
  class Topic{
      public $id;
      public $idTeacher;
      public $label;
      public $description;
      public $dateOn;

      function __construct($id,$idTeacher,$label,$description,$dateOn){
          $this->id = $id;
          $this->idTeacher = $idTeacher;
          $this->label = $label;
          $this->description = $description;
          $this->dateOn = $dateOn;

      }
  }
?>