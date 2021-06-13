<?php

$connection = mysqli_connect("localhost", "root", "","db_studentinfo");

$r = mysqli_query($connection, "SELECT * FROM `tbl_user`") or die(mysqli_error($connection));

$row = mysqli_fetch_row($r);

print_r($row);

echo $row[0].$row[1].$row[2].$row[3];

$row = mysqli_fetch_array($r);
echo "<pre>";
print_r($row);