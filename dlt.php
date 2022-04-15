
<?php
    include("Connection.php");

    $roll = $_GET['roll'];

    $query = "DELETE FROM detail WHERE roll='$roll'";
    $data = mysqli_query($conn,$query);
    if($data)
    {
        echo "<script>alert('DETAIL DELETED SUCCESSFULLY')</script>";
        ?>
              <meta http-equiv = "refresh" content = "0 ; url = http://localhost/project/delete.php?" />
    <?php 
    }
    else 
    {
        echo "Failed to Deleted";
    }
?>
