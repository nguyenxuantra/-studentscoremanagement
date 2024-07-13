<?php
    require_once "../../../connection/connect.php";
    
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        echo $id;
        $sql = "delete from diem where id=:id";
        $statement = $conn->prepare($sql);
        $data = [
            'id' =>$id
        ];
        $notification = $statement->execute($data);
        if($notification)
        {
            header("location: points.php");
        }
        
    }
?>