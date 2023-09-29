<?php
$conn = mysqli_connect("localhost","root","root","phpcrud") or die("connection failed");

$sql = "select * from student join studentclass where student.sclass=studentclass.cid" or die();
$result = mysqli_query($conn,$sql)or die("query failed");

if(mysqli_num_rows($result)>0){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<table border='1px' cellpading='7px' cellspacing='0.5'>";
    ?>
    <thead>
        <b>This is first table</b>
        <th>ID</th>
        <th>Student name</th>
        <th>Address</th>
        <th>class name</th>
        <th>Phone</th>
    </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['sid'];?></td>        
                <td><?php echo $row['sname'];?></td>  
                <td><?php echo $row['saddr'];?></td>  
                <td><?php echo $row['cname'];?></td>  
                <td><?php echo $row['sphone'];?></td>  
                
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php }?>
</body>
</html>