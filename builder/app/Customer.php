<?php

class Customer
{
   private $name;
   private $email;
   private $umur;

   public function __construct($name, $email, $umur)
   {
      $this->name = $name;
      $this->email = $email;
      $this->umur = $umur;
   }

   public function getCustomer()
   {
      return 'nama nya adalah ' . $this->name . ' email nya adalah ' . $this->email . ' umur nya ' . $this->umur;
   }
}
