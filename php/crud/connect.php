<?php

   class Database {
      public $hostname;
      public $username;
      public $password;
      public $db;
      public $connect;
      function __construct($host,$user,$pass,$database) {
         $this->hostname = $host;
         $this->username = $user;
         $this->password = $pass;
         $this->db = $database;
         $this->connect = mysqli_connect($this->hostname,$this->username,$this->password,$this->db);

            if (!$this->connect) {
               echo "Qosulmadi";
            }
            return $this->connect;
      }
      public function select($table) {
         $sql = "SELECT * FROM $table";
         $query = mysqli_query($this->connect,$sql);
         return $query;
      }


      public function all($table) {
         $sql = "SELECT * FROM $table";
         $query = mysqli_query($this->connect,$sql);
         return $query;
      }
      public function insert($sql) {
        
         $query = mysqli_query($this->connect,$sql);
         // return $query;
      }
      public function delete($table,$id) {
         $sql = "DELETE FROM $table WHERE id=$id";
         $query = mysqli_query($this->connect,$sql);
         return $query;
      }
      public function update($table,$title,$text,$date,$id) {
         $sql = "UPDATE $table SET title='$title',`text`='$text',create_date='$date' WHERE id=$id";
         $query = mysqli_query($this->connect,$sql);
         return $query;
      }

      public function select1($table) {
         $sql = "SELECT * FROM $table ORDER BY id DESC LIMIT 5";
         $query = mysqli_query($this->connect,$sql);
         return $query;
      }
      public function select2($table) {
         $sql = "SELECT * FROM $table ORDER BY id DESC LIMIT 5";
         $query = mysqli_query($this->connect,$sql);
         return $query;
      }
   }
   $base = new Database("localhost","root","","blog");
 ?>