

<?php

$conn=mysqli_connect("localhost","root","root","college")or die("connection failed");

$sql="select eid,e_name from emp";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

    while($row=mysqli_fetch_assoc($result)){
        echo $row['eid'];
        echo $row['e_name'];
    }

}

?>