<?php
    
  
    include '../db.php';
    $id = $_POST['id'];

    $name = $_POST["name"];
    $members = $_POST["members"];
    $sql = "update clubs set name='$name', members='$members' where id=$id";
    $conn->query($sql);
    $conn->close();
    header("location: index.php")
?>