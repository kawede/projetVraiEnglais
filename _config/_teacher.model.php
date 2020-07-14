<?php 
  class Teacher{
      public $id;
      public $nick_1;
      public $nick_2;
      public $email;
      public $grade;

      function __construct($id,$nick_1,$nick_2,$email,$grade){
          $this->id = $id;
          $this->nick_1 = $nick_1;
          $this->nick_2 = $nick_2;
          $this->email = $email;
          $this->grade = $grade;
      }
  }

?>