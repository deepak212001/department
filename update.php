<?php 
    error_reporting(0);
    include("Connection.php");
    $roll = $_GET['roll'];

   
    $query = "SELECT * FROM detail where roll= '$roll'";
    $data = mysqli_query($conn,$query);
    $result = mysqli_fetch_assoc($data);
    
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

    <body>

        <br><br>
        <h1  style="color:darkblue" align="center" >Welcome to Computer Department</h1>
        <br><br><br>
        
        <form action ="#"  method ="POST" >
            <table border="0" bgcolor="gray" align="center" cellspacing="20">
               <tr>
                   <th colspan= "2">UPDATE STUDENT DETAIL</th>
                </tr>
            <tr>
                    <td>Roll Number</td>
                    <td><input type="text" value= "<?php echo $result['roll']; ?>" name="Roll" required></td>
                </tr>


                <tr>
                    <td>First Name</td>
                    <td><input type="text"  value= "<?php echo $result['firstname']; ?>" name="FName" required></td>
                </tr>

                <tr>
                    <td>Last Name</td>
                    <td><input type="text" value= "<?php echo $result['lastname']; ?>" name="LName" ></td>
                </tr>

                <tr>
                    <td>Email Address</td>
                    <td><input type="text" value= "<?php echo $result['email']; ?>" name="Email" required></td>
                </tr>

                <tr>
                    <td>Mobile number</td>
                    <td><input type="number" value= "<?php echo $result['number']; ?>" name="number" required></td>
                </tr>


    
                <tr>
                    <td>Gender</td>  
                    <td >
                        <select  name="gender" required >
                            <option value="">Select</option>
                            <option value= "Male"
                            <?php
                                 if($result['gender']=='Male')
                                 {
                                     echo "selected";
                                 }
                            ?> 
                            >
                            Male</option>
                            <option value= "Female" 
                            <?php
                                 if($result['gender']=='Female')
                                 {
                                     echo "selected";
                                 }
                            ?> >Female</option>
                    </select>
                    </td>
                </tr>


                <tr>
                    <td colspan= "2">
                        <div class="input_field" align="center" cellspacing="20" >
                            <input type="submit"  value="UPDATE" class="update" name="update" >
                        </div>
                    </td>
                </tr>
            </table>
        </form>
        <br>
        <form action ="display.php">
                        <div class="input_field" align="center" cellspacing="20" >
                            <input type="submit"  value="Back to display" class="btn" >
                        </div>
        </form>
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
    if($_POST['update'])
    {
        $roll= $_POST['Roll'];
        $first_name= $_POST['FName'];
        $last_name= $_POST['LName'];
        $eml= $_POST['Email'];
        $mobile= $_POST['number'];
        $gend= $_POST['gender'];

       
            
            $query = "UPDATE detail SET roll='$roll' , firstname='$first_name' ,lastname='$last_name' ,email='$eml' ,  number = '$mobile' ,gender='$gend' WHERE roll='$roll'  ";
            
            $data = mysqli_query($conn,$query);
            if($data)
            {
                echo "<script>alert('DATA UPDATED SUCEESFULLY')</script>";
                ?>
                      <meta http-equiv = "refresh" content = "0 ; url = http://localhost/project/display.php?" />
            <?php
            }
            else
            {
                echo "<script>alert('FAILED TO DATA UPDATE')</script>";
            }
        
    }
?>
