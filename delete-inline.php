<?php

$stu_id = $_GET['id'];

include 'connect.php';

$sql = "DELETE FROM student WHERE sid = {$stu_id}"

or die();

$result = mysqli_query($conn, $sql)
or die("Query Unsuccessful.");

header("Location: http://localhost/crud/index.php")



?>