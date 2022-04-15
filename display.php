<?php
    error_reporting(0);
    include("Connection.php");
    
?>

<html>
    <head>
        <title>Computer Department</title>
        <link rel="stylesheet" type="text/css" href="form.css">
        <style>
            .UPDATE
            {
                background-color: rgb(92, 238, 92);
                color: rgb(2, 44, 2);   
                border: 0;
                border-radius: 6px;
                height: 25px;
                width: 80px;
                cursor: pointer;
            }
            .btn
            {
                background-color: black;
                color: white;
                border: 0;
                border-radius: 6px;
                height: 30px;
                width: 130px;
                cursor: pointer;
            }
        </style>
    </head>

    <body >
        <br><br>
        <h1 style="color:darkblue" align="center" >Welcome to Computer Department</h1>
        <br><br>
       
        <h2   align="center" >Display All Students</h2>
        




<?php
    error_reporting(0);
    include("Connection.php");
    $query = "SELECT * FROM detail";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
    
    
   
    

    if($total != 0)
    {
        ?>
        
        <table  border="0" bgcolor=purple align="center" cellspacing="30" >
            <tr>
                <th >Roll Number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email Address</th>
                <th>Mobile Number</th>
                <th>Gender</th>
                <th>Update</th>
            </tr>
        

        <?php
        while($result = mysqli_fetch_assoc($data))
        {
            echo "<tr>
                    <td>".$result[roll]."</td>
                    <td>".$result[firstname]."</td>
                    <td>".$result[lastname]."</td>
                    <td>".$result[email]."</td>
                    <td>".$result[number]."</td>
                    <td>".$result[gender]."</td>
                    <td><a href='update.php?roll=$result[roll]' ><input type= 'submit' value='UPDATE' class='update'></a></td>
                </tr>";
            
                
        }
    }
    else
    {
        echo "No record found";
    }
?>
</table>
<br><br>

        <form action ="form.php">
                        <div class="input_field" align="center" cellspacing="20" >
                            <input type="submit"  value="Back to home page" class="btn" >
                        </div>
        </form>
        <h4 align="right">This project made by Deepak</h4>
        </body>
</html>