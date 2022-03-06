<?php
    class Database
    {
        var $conn;
        function __construct()
        {
            $this->conn=mysqli_connect("mysql5045.site4now.net","a83436_hamzakh","Hmohy_202","db_a83436_hamzakh
            .com");
        }
    //To Insert- Update - delete 
        function RunDML($statment)
        {
            if(!mysqli_query($this->conn,$statment))
                {
                    return  mysqli_error($this->conn);
                }
            else
                return "ok";
        }
    //to search select
      function GetData($select)
      {
        $result= mysqli_query($this->conn,$select);
        return $result;
      }
    }
?>