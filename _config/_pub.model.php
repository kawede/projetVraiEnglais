<?php 
  class Pub{
      public $id;
      public $label;
      public $description;
      public $src;

      function __construct($id,$label,$description,$src){
        $this->id = $id;
        $this->label = $label;
        $this->description = $description;
        $this->src = $src;
      }
  }
?>