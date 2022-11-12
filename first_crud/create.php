<?php
    include '../db.php';
    $name = $_POST["name"];
    $members = $_POST["members"];
    $sql = "insert into clubs (name,members) values ('$name','$members')";
    $conn->query($sql);
    $conn->close();
    header("location: index.php")
?>