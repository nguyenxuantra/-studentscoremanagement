<?php
const _HOST ='localhost';
const _DB = 'students';
const _USER = 'root';
const _PASS = '';

try {
    if(class_exists('PDO')){
        $dsn = 'mysql:dbname='._DB.';host='._HOST;
        $options = [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',//Set utf8
            PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION//tạo thông báo ra ngoại lệ khi gặp lỗi
    ];
        $conn = new PDO($dsn,_USER,_PASS,$options);
        
    }
}catch(Exception $e)
{
    echo '<pre>';
    echo $e->getMessage().'<br>';
    echo $e->getLine().'<br>';
    echo '</pre>';
    die();
}