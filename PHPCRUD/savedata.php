<?php
echo $stu_name=$_POST['name'];
echo $stu_add=$_POST['address'];
echo $stu_class=$_POST['class'];
echo $stu_phone=$_POST['phone'];

$conn=mysqli_connect("localhost","root","root","phpcrud");
$sql="insert into student(sname,saddr,sclass,sphone)values();
$result=mysqli_query($conn,$sql);
?>