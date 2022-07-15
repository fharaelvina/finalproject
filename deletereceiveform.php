<?php

if(isset($_GET['id'])){
$id=$_GET['id'];

include 'conn.php';


$qry="delete from receivedonor where id=$id";
$result=mysqli_query($conn,$qry);

if($result){
    echo"DELETED";
    header('Location:deletereceive.php');
}else{
    echo"ERROR!!";
}
}
?>