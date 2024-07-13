<?php
    require_once "../../../connection/connect.php";
    
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql = "delete from user where Id=:Id";
        $statement = $conn->prepare($sql);
        $data = [
            'Id' =>$id
        ];
        $notification = $statement->execute($data);
        if($notification)
        {
            header("location: accounts.php");
        }
        
    }
?>