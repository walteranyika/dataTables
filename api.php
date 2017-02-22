<?php
   header("content-type:application/json");
   extract($_POST);
   $t =date("h:i:s");
   file_put_contents("data.txt", "$age  $t\n", FILE_APPEND);
   $db =mysqli_connect("localhost","root","", "world");
   $sql = "select * from wananchi where age>$age";//order by rand()
   $result = mysqli_query($db, $sql);
   $data=array();
   while ($row = mysqli_fetch_assoc($result))
   {
   	 $data[] = $row;
   }
echo json_encode($data);