<?php

class CustomerBuilder
{
   private $name;
   private $email;
   private $umur;

   public function setName($name)
   {
      $this->name = $name;
      return $this;
   }

   public function setEmail($email)
   {
      $this->email = $email;
      return $this;
   }

   public function setUmur($umur)
   {
      $this->umur = $umur;
      return $this;
   }

   public function build(): Customer
   {
      return new Customer($this->name, $this->email, $this->umur);
   }
}

