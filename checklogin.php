<?php
session_start();
    include_once "database.php";
      $db = database();
      $log = $db -> GetData ("select * from learner where 
      (email='".$_GET["user"]."'or phone='".$_GET["user"]."')
      and password='".$_GET["password"]."'");
      if($row=mysql_fetch_assoc($log))
      {
          //the row name that in data base
         
        $_SESSION["id"]=$row["userid"];
        $_SESSION["name"]=$row["name"];
        echo "ok";
      }
      else{
        echo "<div class='alert alert-danger'> Invaild Login username or password</div>";
      }
  ?>
