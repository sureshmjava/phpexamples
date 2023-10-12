<?php 
    require "connection.php";
?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //var_dump($_POST);

        $sql = "INSERT INTO reg_page(first_name,last_name,password,gender,phone_number,email,address)
                VALUES('".$_POST['firstName']."','"
                        .$_POST['lastName']."','"
                        .$_POST['password']."','"
                        .$_POST['gender']."','"
                        .$_POST['phoneNumber']."','"
                        .$_POST['email']."','"
                        .$_POST['address']."')";

        $result=mysqli_query($conn,$sql);
        if($result == false){
            echo mysqli_error($conn);
        }else{
            $id=mysqli_insert_id($conn);
            echo "Record instered sucessfully with an Id:$id";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Registration page</title>
    </head>
    <body bgcolor="lightyellow">
        <header>
            <table width=100% bgcolor="green">
                <tr>
                    <td><img src="cube.jpeg" alt="image"></td>
                    <td><font size="20"><b><i>Suresh's World</i></b></font></td>
                </tr>
            </table>
        </header>
        <main>
                <h1><center>Registration page</center></h1>
            <article>
                <form method="post">
                <table border=1 bgcolor="#e5e9ec" align="center" cellpadding=20 >
                    <tr>
                        <td><label for="fname">First Name:</label></td>
                        <td><input type="text" name="firstName" id="fname"></td>
                    </tr>
                    <tr>
                        <td><label for="lname">Last Name:</label></td>
                        <td><input type="text" name="lastName" id="lname"></td>
                    </tr>
                    <tr>
                        <td><label for="pass">Password:</label></td>
                        <td><input type="password" name="password" id="pass"></td>
                    </tr>
                    <tr>
                        <td><label for="gender">Gender:</label></td>
                        <td><input type="radio" name="gender" id="male" value="Male">
                            <label for="male">Male</label>
                            <input type="radio" name="gender" id="female" value="Female">
                            <label for="female">Female</label>
                            <input type="radio" name="gender" id="other" value="Other">
                            <label for="other">Other</label></td>
                    </tr>
                    <tr>
                        <td><label for="phone">Phone Number:</label></td>
                        <td><input type="tel" name="phoneNumber" id="phone"></td>
                    </tr>
                    <tr>
                        <td><label for="email">E-Mail:</label></td>
                        <td><input type="email" name="email" id="email"></td>
                    </tr>
                    <tr>
                        <td><label for="addr">Address:</label></td>
                        <td><textarea name="address" id="addr"></textarea></td>
                    </tr>
                    <tr align="center">
                        <td><input type="reset"  value="Reset"></td>
                        <td><button>Submit</button</td>
                        
                    </tr>
                </table>
   
                </form>
            </article>
        </main>
    </body>
</html>