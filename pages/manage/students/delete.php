<?php
    require_once "../../../connection/connect.php";
    
    if(isset($_GET['id']))
    {
        $id_sv = $_GET['id'];
        $sql = "delete from sinhvien where id_sv=:id_sv";
        $statement = $conn->prepare($sql);
        $data = [
            'id_sv' =>$id_sv 
        ];
        $notification = $statement->execute($data);
        if($notification)
        {
            header("location: students.php");
        }
        
    }
?>