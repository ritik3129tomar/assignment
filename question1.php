<?php
if(isset($_POST['submit'])){
    echo "Gender ".$_POST["gender"]."<br>";
    }

else{
    echo "<h3 style='text-align: center;color:green;padding:13px'>Please Fill The Form and Submit By Clicking Submit Button.</h3>";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>HTML Form</title>
        <style>
            div{
                width:400px;
                height:350px;
                padding:10px;
                margin-left:35%;
                margin-right:30%;
                border:5px solid black;
                float:center;
            }
        </style>
    </head>
    <body>
        <div float="center">
           <form method="POST" action="question2.php">
           <h3 style='text-align: center;color:black;padding:13px'>Enter The Details</h3>
            id <input type="number" name="id" placeholder="Enter Your id" maxlength="8" minlength="7" required><br><br>
            Username <input type="text" name="username" placeholder="Enter Your Username" required><br><br>
            E-Mail <input type="email" name="email" placeholder="Enter Your E-Mail" required><br><br>
            Select Gender - 
            Male <input type="radio" name="gender" value="M" >
            Female <input type="radio" name="gender" value="F">
            others <input type="radio" name="gender" value="O"><br><br>
             Select Your City -
            <select name="city" required>
                <option value="Bareilly" selected>BAREILLY</option>
                <option value="Bharuch">BHARUCH</option>
                <option value="Durgapur">DURGAPUR</option>
                <option value="Gunnaur">GUNNAUR</option>
            </select>
            <br><br>
            <input type="submit" name="submit" value="Enter">
          </form>
        </div>
    </body>
</html>