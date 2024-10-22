<?php

    include "./connect.php";

    $stu_id = $_POST['sid'];
    $stu_name = $_POST['sname'];
    $stu_add = $_POST['saddress'];
    $stu_class = $_POST['sclass'];
    $stu_phone = $_POST['sphone'];

    $sql = "UPDATE student SET sname =  '{$stu_name}', saddress = '{$stu_add}', sclass = '{$stu_class}', sphone = '{$stu_phone}' WHERE sid = {$stu_id}";

    $result = mysqli_query($conn, $sql);

    header("Location: http://localhost/crud/index.php");

    mysqli_close($conn);

?>