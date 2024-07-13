<?php
    require_once "../../../connection/connect.php";
    
    if(isset($_GET['id']))
    {
        $id_lop = $_GET['id'];
        $sql = "delete from lop where id_lop=:id_lop";
        $statement = $conn->prepare($sql);
        $data = [
            'id_lop' =>$id_lop 
        ];
        $notification = $statement->execute($data);
        if($notification)
        {
            header("location: classes.php");
        }
        
    }
?>