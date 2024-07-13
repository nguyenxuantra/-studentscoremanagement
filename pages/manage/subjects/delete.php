<?php
    require_once "../../../connection/connect.php";
    
    if(isset($_GET['id']))
    {
        $id_mh = $_GET['id'];
        $sql = "delete from monhoc where id_mh=:id_mh";
        $statement = $conn->prepare($sql);
        $data = [
            'id_mh' =>$id_mh 
        ];
        $notification = $statement->execute($data);
        if($notification)
        {
            header("location: subjects.php");
        }
        
    }
?>