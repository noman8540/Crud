<?php 

    include "./connect.php";

    $stu_name = $_POST['sname'];
    $stu_add = $_POST['saddress'];
    $stu_class = $_POST['class'];
    $stu_phone = $_POST['sphone'];

    $sql = "INSERT INTO student(sname, saddress, sclass, sphone) VALUES ('{$stu_name},','{$stu_add}','{$stu_class}','{$stu_phone}')";

    $result = mysqli_query($conn, $sql)
    or die("Query unsuccessful");

    header("location:http://localhost/crud/index.php");

    mysqli_close($conn);


?>