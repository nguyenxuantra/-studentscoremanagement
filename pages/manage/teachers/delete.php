<?php
    require_once "../../../connection/connect.php";
    
    if(isset($_GET['id']))
    {
        $id_gv = $_GET['id'];
        $sql = "delete from giangvien where id_gv=:id_gv";
        $statement = $conn->prepare($sql);
        $data = [
            'id_gv' =>$id_gv 
        ];
        $notification = $statement->execute($data);
        if($notification)
        {
            header("location: teachers.php");
        }
        
    }
?>