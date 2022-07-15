<?php

if(isset($_GET['id'])){
$id=$_GET['id'];

include 'conn.php';


$qry="delete from healthvalidation where id=$id";
$result=mysqli_query($conn,$qry);

if($result){
    echo"Delete Vlaidation Deleted";
    header('Location:edithealthvalidation.php');
}else{
    echo"ERROR!!";
}
}
?>