<?php include "regvalidation.php"; ?>

<!Doctype html>
<html>
    <body>
        <h2>Registration Form </h2>
______________________________________________________________________________________________________________________________________________________________________________________________________________
        <form action="" method="post">
        <table>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="firstname"></td> 
                <td><?php echo $validatefname; ?> </td>
            </tr>
            <tr>
                <td>Last Name: </td>
                <td><input type="text" name="lastname"> </td>
                <td><?php echo $validatelname; ?> </td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="number" name="age"> </td>
                <td><?php echo $validateage; ?> </td>

            </tr>
            <tr>
                <td>Designation:</td>
                <td>

                    <input type="radio"  name="designation" value= "job" > job holder
                    <input type="radio"  name="designation" value= "Stu"> student
                    <input type="radio"  name="designation" value= "wor"> worker
                </td>
                <td>
                    <?php echo $validateradio; ?>
                </td>

            </tr>
            
              
                <td>
<?php echo $validatecheckbox; ?>

<?php echo $v1;?>

<?php echo $v2;?>

<?php echo $v3;?>
</td>
<br>

            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="text" name="email"> </td>
                <td><?php echo $validateemail; ?> </td>

            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"> </td>
                <td><?php echo $validatepassword; ?> </td>

            </tr>

        </table>

        
        <input type="submit" value="Submit">


    </body>
</html>