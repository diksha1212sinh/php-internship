<?php

$connection = mysqli_connect("localhost", "root", "","db_studentinfo");

$r = mysqli_query($connection, "SELECT * FROM `tbl_user`") or die(mysqli_error($connection));
echo "<table border=1px>";
$i=0;
echo"<tr>";
     echo"<th> No </th>";
    echo"<th> Name </th>";
    echo"<th> Genmder </th>";
    echo"<th> Mobile no. </th>";
    echo "<th> Action </th> ";
    echo "</tr>";
while ($row = mysqli_fetch_array($r)) {
    $i++;
    echo"<tr>";
     echo"<td> $i </td>";
    echo"<td> {$row['user_name']}</td>";
    echo"<td> {$row['user_gender']}</td>";
    echo"<td> {$row['user_mobile']}</td>";
    echo "<td><a href='edit.php?editid={$row['user_id']}'>edit</a> | <a href='delete.php?deid={$row['user_id']}'>delete</a> </td> ";
    echo "</tr>";
}
echo "</table>";

echo "<a href='Insert-record.php'>Add Record</a>";