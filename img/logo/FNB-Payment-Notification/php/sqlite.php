<?php
date_default_timezone_set("Africa/Johannesburg");
   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('phpliteadmin/results.db');
      }
   }
   $db = new MyDB();

   function insertrow($subject,$msg,$db){
       /*
    $dbconnect = mysqli_connect('localhost', 'elhosna_result', '123456', 'elhosna_result');
    
    $sql = 'INSERT INTO result SET subject="'.$subject.'", message="'.base64_encode($msg).'"';
    $sqlResult = mysqli_query($dbconnect, $sql);*/
    $query = 'INSERT INTO result (subject,message,isread,date_time) VALUES ("'.$subject.'","'.($msg).'","notread","'. date("Y-m-d H:i:s").'");';
     $db->exec($query);
}