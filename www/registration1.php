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
                
                <div>
                <h2><label for="fname">First Name:</label>
                <input type="text" name="firstName" id="fname"></h2>
                </div>
                <div>
                <h2><label for="lname">Last Name:</label>
                <input type="text" name="lastName" id="lname"></h2>
                </div>
                <div>
                <h2><label for="pass">password:</label>
                <input type="password" name="password" id="pass"></h2>
                </div>
                
                <div>
                <h2><label for="gen">Gender:</label>
                <input type="radio" id="gen" name="gender" value="Male">Male
                <input type="radio" id="gen" name="gender" value="FeMale">FeMale
                <input type="radio" id="gen" name="gender" value="Other">Other</h2>
                </div>

                <div>
                <h2><label for="phone">Phone No:</label>
                <input type="text" name="Number" id="phone"></h2>
                </div>

                <div>
                <h2><label for="email">E-Mail:</label>
                <input type="email" name="Number" id="phone"></h2>
                </div>

                <div>
                <h2><label for="addr">Address:</label>
                <textarea type="text" name="firstName" id="addr"></textarea></h2>
                </div>

                <div>
                <input type="button" name="button" value ="Submit">&NonBreakingSpace;
                <input type="button" name="button" value ="Reset">
           
                </div>
         
            </center> 
            </article>
        </main>
    </body>

</html>