<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student Details</title>
</head>
<body>
    <form action="savedata.php" method="POST">
        <label>Name</label>
        <input type="text" name="name"/>
        <label>Address</label>
        <input type="text" name="address"/>
        <label>Class</label>
        <select name="class">
        <option value="" selected disabled>Select Class</option>
        <?php
        $conn=mysqli_connect("localhost","root","root","phpcrud")or die("coudn't connect to database");
        $sql="select * from studentclass;"or die("query unsucessfully");
        $result=mysqli_query($conn,$sql);

        while($row=mysqli_fetch_assoc($result)){
        ?>
        <option value="<?php echo $row['cid'];?>"<?php echo $row['cname'];?> ></option>
        <?php } ?>

        </select>
        <label>Phone</label>
        <input type="text" name="phone"/>
        <input type="submit" value="submit"/>
    </form>
    
</body>
</html>