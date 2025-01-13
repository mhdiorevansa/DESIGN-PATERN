<?php

require_once 'init.php';

$customer = (new CustomerBuilder())
   ->setName("franken")
   ->setEmail("abdel@gmailcom")
   ->setUmur(20)
   ->build();
   
echo $customer->getCustomer();
