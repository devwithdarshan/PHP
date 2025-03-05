<?php
    $con=mysqli_connect("localhost","root","","Darshan_122");
    if(!$con)
    {
        echo "Connection failed: " . mysqli_connect_error();
    }
    $did = $_GET['did'];
    $query = "DELETE FROM Employee WHERE empID='$did'";
    $sql = mysqli_query($con,$query);
    if($sql)
    {
        echo '<script>
        alert("Record Deleted");
        window.location.href="Display.php";</script>';
    }
    else
    {
        echo '<script>
        alert("Record not Deleted");
        window.location.href="Display.php";</script>';
    }
?>