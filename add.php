<?php
    include("Connection.php");
?>


<html>
    <head>
        <title>Computer Department</title>

        <link rel="stylesheet" type="text/css" href="form.css">
        <style>
            .add
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

    <body>

        <br><br>
        <h1  style="color:darkblue" align="center" >Welcome to Computer Department</h1>
        <br><br><br>
        <form action ="#"  method ="POST" >
            <table border="0" bgcolor="gray" align="center" cellspacing="20">
            <tr><th colspan= "2"> ADD NEW STUDENT
                </th></tr>
            <tr>
                    <td>Roll Number</td>
                    <td><input type="text" placeholder="Roll Number" name="Roll" required></td>
                </tr>


                <tr>
                    <td>First Name</td>
                    <td><input type="text" placeholder="First Name" name="FName" required></td>
                </tr>

                <tr>
                    <td>Last Name</td>
                    <td><input type="text" placeholder="Last Name" name="LName" ></td>
                </tr>

                <tr>
                    <td>Email Address</td>
                    <td><input type="text" placeholder="Email Address" name="Email" required></td>
                </tr>

                <tr>
                    <td>Mobile number</td>
                    <td><input type="number" placeholder="Mobile number" name="number" required></td>
                </tr>


    
                <tr>
                    <td>Gender</td>  
                    <td >
                        <select name="gender" required >
                            <option value="">Select</option>
                            <option value= "Male">Male</option>
                            <option value= "Female">Female</option>
                    </select>
                    </td>
                </tr>


                <tr>
                    <td colspan= "2">
                        <div class="input_field" align="center" cellspacing="20" >
                            <input type="submit"  value="ADD" class="add" name="add" >
                        </div>
                    </td>
                </tr>
            </table>
        </form>
        <br>
        <form action ="form.php">
                        <div class="input_field" align="center" cellspacing="20" >
                            <input type="submit"  value="Back to home page" class="btn" >
                        </div>
        </form>
        <h4 align="right">This project made by Deepak</h4>

    </body>
</html>

<?php
    $_POST;
    error_reporting(0);
    if($_POST['add'])
    {
        $roll= $_POST['Roll'];
        $first_name= $_POST['FName'];
        $last_name= $_POST['LName'];
        $eml= $_POST['Email'];
        $mobile= $_POST['number'];
        $gend= $_POST['gender'];

       
            $query = "INSERT INTO detail values('$roll','$first_name', '$last_name','$eml', '$mobile', '$gend')";
            $data = mysqli_query($conn,$query);
            if($data)
            {
                echo "<script>alert('DETAIL INSTERED SUCCESSFULLY')</script>";
                ?>

                      <meta http-equiv = "refresh" content = "0 ; url = http://localhost/project/add.php?" />
            <?php 
            }
            else
            {
                echo "<script>alert('FAILED DETAIL INSTERED ')</script>";
            }
        
    }
?>