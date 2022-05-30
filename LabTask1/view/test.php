<html>
<head>
 
    <title>My Home</title>
</head>
<body>
    <h1>Registration Form</h1>
    <form action="../control/process.php" method= "POST">
        <table>
        <tr>
            <td> First Name</td><td> <input type="text"  name="fname"></td>
        </tr>
      
        <tr>
            <td> Last Name</td><td> <input type="text"  name="fname"></td>
         </tr>
       
        <tr><td> Age</td><td> <input type="text"  name="fname"></td>
    </tr>
       
        <tr>
            <td>Designation</td>
        <td><input type="radio" name="Designation" value="junior programmer">junior programmer
        <input type="radio"name="Designation" value="Senior programmer">senior programmer
        <input type="radio"name="Designastion" value="Senior programmer">senior programmer
     </td>
    </tr>
     <tr>
         <td> prefered language</td>
        <td><input type="radio" name=" prefered language" value="JAVA">JAVA
        <input type="radio"name=" prefered language" value="PHP">PHP
        <input type="radio"name=" prefered language" value="C++">C++
     </td>
    </tr>
     <tr>
         <td>E-mail</td><td> <input type="text"  name="fname"></td>
        </tr>
       
        <tr>
            <td>password</td><td> <input type="text"  name="fname"></td>
        </tr>
       
        <tr>
            <td> Please choose a file</td><td> <input type="file" id="myfile" name="myfile"></td>
        </tr>
       



        <tr>
            <td><input type= "submit" name="submit" value="Submit">
            <input type= "submit" name="submit" value="Reset"></td>
        </tr> 
</table>

</form>
    
</body>
</html>