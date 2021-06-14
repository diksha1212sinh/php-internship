  
<?php

$connection = mysqli_connect("localhost", "root", "","db_studentinfo");
$editid = isset($_GET['id']) ? $_GET['id'] : '';
$editq = mysqli_query($connection, "select * from tbl_user where user_id='{$editid}'") or die(mysqli_error($connection));
$editdata = mysqli_fetch_array($editq);

if ($_POST){
    $txt1 = $_POST['txt1'];
    $txt2 = $_POST['txt2'];
    $txt3 = $_POST['txt3'];
    
    $uq = mysqli_query($connection, "update tbl_user set user _name='{$txt1}',user_gender='{$txt2}',user_mobile='{$txt3}' where user_id='{$editid}'") or die(mysqli_error($connection));
if($uq){
    echo "<script> alert{'record updated'}; window.location='3-table.php';</script>";
    }
?>