<?php
$host = "localhost";
$username="root";
$passwd ="";
$dbname = "db_internship";
// connection function 
$connection= mysqli_connect($host, $username, $passwd, $dbname);

$q=mysqli_query($connection, 
        "insert into tbl_user(user_name,user_gender,user_mobile) values('diksha','female','123')") or die ("error". mysqli_error($connection));

if($q)
{
    echo"<script>aleart('record added in database');</script>";
}
