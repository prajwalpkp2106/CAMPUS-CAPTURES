<?php
 include 'partials/_dbconnect.php';
 
session_start();
// $statusMsg = '';
// var_dump($_SESSION['table_name']);
//  exit();

if(isset($_POST['task'])&& $_POST['task']=='delete')
    {   $table_name=$_SESSION['table_name']."_images";
       //$table_name=$_POST["table_name"];
        $id=$_POST['id'];
        $sql="DELETE from $table_name where id='$id' ";
     //   var_dump($sql);
     // exit;
        $result= mysqli_query($conn,$sql);
//        var_dump($result);exit;
//        $num=mysqli_num_rows($result);
//      require "/campus_captures/addevent.php";

     //     Execute your code here
    //     Simulate button click by sending an HTTP request to the desired URL

     header("location: welcome.php");
    } 
    ?>