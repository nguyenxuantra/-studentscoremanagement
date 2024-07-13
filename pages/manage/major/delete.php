<?php
    require_once "../../../connection/connect.php";
    
    if(isset($_GET['id']))
    {
        $id_cn = $_GET['id'];
        $sql = "delete from chuyennganh where id_cn=:id_cn";
        $statement = $conn->prepare($sql);
        $data = [
            'id_cn' =>$id_cn 
        ];
        $notification = $statement->execute($data);
        if($notification)
        {
            header("location: major.php");
        }
        
    }
?>