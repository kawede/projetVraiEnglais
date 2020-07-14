<?php 
  class Article{
    public $id;
    public $label;
    public $description;
    public $src;
    public $date;
    public $categ;

    function __construct($id,$label,$description,$src,$date,$categ){
        $this->id = $id;
        $this->label = $label;
        $this->description = $description;
        $this->src = $src;
        $this->date = $date;
        $this->categ = $categ;
    }
  }

?>