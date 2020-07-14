<?php 
  class User{
      public $id;
      public $nick_1;
      public $nick_2;
      public $email;
      public $addresse;

      function __construct($id,$nick_1,$nick_2,$email,$addresse){
          $this->id = $id;
          $this->nick_1 = $nick_1;
          $this->nick_2 = $nick_2;
          $this->email = $email;
          $this->addresse = $addresse;
      }
  }

?>