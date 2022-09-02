<?php require ("../connection/config.php");
?>
  <?php
    if(isset($_GET['id']))
    $id =$_GET['id'];

    $query1="SELECT from users where id=$id";
    $result1= mysqli_query($conn, $query1); 

    $query ="DELETE from users where id=$id";
    $result= mysqli_query($conn, $query); 

    if($result){
        // echo "data is deleted successfully";
        header("Refresh:0; url=../index.php"); 
    }
    else {
        echo "Error, data is not deleted ";
        header("Refresh:0; url=../index.php"); 
    }


    ?>
