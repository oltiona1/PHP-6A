<?php


try{


$conn= new PDO("mysql:host=localhost; dbname=digital2","root","");

$sql="ALTER table users drop email";

$conn->exec($sql);
echo "column dropped";

}catch(Exception $e){
    echo "column not dropped";
}
