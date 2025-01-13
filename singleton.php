<?php 
// design pattern singleton digunakan untuk memastikan sebuah kelas hanya memiliki satu instance/object saja meskipun din instansiasi berulang. dan menyediakan akses global ke instance tersebut.
// hanya ada 1 objek yang dibuat dari kelas tersebut. dan semua program yang membutuhkan kelas itu menggunakan objek yang sama
// ciri ciri singleton : private constructor, static propery/atribut, static method

class DatabaseConnection
{
   private static ?DatabaseConnection $instance = null;
   private \PDO $connection;

   // constructor dibuat private agar tidak bisa diakses secara langsung
   private function __construct()
   {  
      $dsn = 'mysql:host=127.0.0.1;dbname=laravel_franken';
      $username = 'root';
      $password = '';
      $this->connection = new \PDO($dsn, $username, $password);
      echo 'Database connection created.';
   }

   // membuat method untuk mendapatkan instance tunggal
   public static function getInstance(): DatabaseConnection
   {
      if (self::$instance === null) {
         self::$instance = new DatabaseConnection();
      }
      return self::$instance;
   }

   // method untuk mendapatkan koneksi PDO
   public function getConnection(): \PDO
   {
      return $this->connection;
   }
}

$db1 = DatabaseConnection::getInstance();
$db2 = DatabaseConnection::getInstance();
// memastikan keduanya dijalankan oleh objek yang sama
var_dump($db1 === $db2);