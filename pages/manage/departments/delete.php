<?php
    require_once "../../../connection/connect.php";
    
    if(isset($_GET['id']))
    {
        $id_khoa = $_GET['id'];
        $sql = "delete from khoa where id_khoa=:id_khoa";
        $statement = $conn->prepare($sql);
        $data = [
            'id_khoa' =>$id_khoa
        ];
        $notification = $statement->execute($data);
        if($notification)
        {
            header("location: departments.php");
        }
        
    }
?>