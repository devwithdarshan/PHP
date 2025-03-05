<?php
	$con=mysqli_connect("localhost","root","","Darshan_122");
	if(!$con)
    {
        echo "Connection failed: " . mysqli_connect_error();
    }
    $uid = $_GET['uid']; 
    if(isset($_POST['submit']))
    {
        $name = $_POST['empName'];
        $email = $_POST['empEmail'];
        $phone = $_POST['empPhone'];
        $query = "UPDATE Employee SET empName='$name',empEmail='$email',empPhone='$phone' WHERE empID='$uid'";
        $sql = mysqli_query($con,$query);
        if($sql)
        {
            echo '<script>
            alert("Record Updated");
            window.location.href="Display.php";</script>';
        }
        else
        {
            echo '<script>
            alert("Record not Updated");
            window.location.href="Update.php";</script>';
        }

    }
    mysqli_close($con);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Data</title>
        <style>
            form
            {
                margin-top: 100px;
                margin-left: 500px;
            }
        </style>
    </head>
    <body>
        <?php
            $con=mysqli_connect("localhost","root","","Darshan_122");
            if(!$con)
            {
                echo "Connection failed: " . mysqli_connect_error();
            }
            $qry = "select * from employee where empID='$uid'";
            $sql = mysqli_query($con,$qry);
            $row = mysqli_fetch_row($sql);
        ?>
        <form action="" method="POST">
            Employee Name:
            <input type="text" name="empName" value="<?php echo $row[1] ?>"><br>
            Employee Email:
            <input type="text" name="empEmail" value="<?php echo $row[2] ?>"><br>
            Employee Phone:
            <input type="text" name="empPhone" value="<?php echo $row[3] ?>"><br>
            <input type="submit" name="submit">
        </form> 
    </body>