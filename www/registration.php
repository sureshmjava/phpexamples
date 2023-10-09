<!DOCTYPE html>
<html>
    <head>
        <title> Registration Page</title>
    </head>
    <body bgcolor="lightyellow">
        <header>
            <table border="1" bgcolor="lightgreen" width=100%>
            <tr>
                <th width=15%>
                <img src="images/cube.jpeg" alt="This is Dice Image">
                </th>
                <th>
                    <h1><p>Registration Page</p></h1>
                </th>
            </tr>
            </table>
            </header>
        <main>
            <article>
            <center>
        <table border="1"   bgcolor="#FFCF79">
            <tr>
                <td><h2><label for="fname">First Name:</label></h2></td>
                <td><input type="text" name="firstName" id="fname"></td>
            </tr>
            <tr>
                <td><h2><label for="lname">Last Name:</label></h2></td>
                <td><input type="text" name="lastName" id="lname"></td>
            </tr>
            <tr>
                <td><h2><label for="pass">password:</label></h2></td>
                <td><input type="password" name="password" id="pass"></td>
            </tr>
            <tr>
                <td><h2><label for="gen">Gender:</label></h2></td>
                <td>
                &nbsp&nbsp<input type="radio" id="male" name="male" value="Male">
                <label for="male">Male</label><br>
                <input type="radio" id="fem" name="female" value="FeMale">
                <label for="fem">FeMale</label><br>
                <input type="radio" id="other" name="Others" value="Others">
                <label for="other">Other</label>
                </td>
            </tr>
            <tr>
                <td><h2><label for="fphone">Phone Number:</label></h2></td>
                <td><input type="text" name="firstName" id="fphone"></td>
            </tr>
            <tr>
                <td><h2><label for="email">E-Mail:</label></h2></td>
                <td><input type="email" name="email" id="email"></td>
            </tr>
            <tr>
                <td><h2><label for="addr">Address:</label></h2></td>
                <td><textarea type="text" name="firstName" id="addr"></textarea></td>
            </tr>
            
           
            <tr>
                <td align="center"><input type="button" name="button" value ="Submit"></td>
                <td align="center"><input type="button" name="button" value ="Reset"></td>
            </tr>
            </table>  
            </center> 
            </article>
        </main>
    </body>

</html>