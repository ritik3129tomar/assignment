<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databasename = "web";

$conn = mysqli_connect($hostname, $username, $password, $databasename);
if($conn){
    echo "Connection Successful...";
}
else{
    echo "Connection failed..." + mysqli_connect_error();
}

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];

    $sql = "INSERT INTO `the users` ( `id`,`username`, `email`, `gender`, `city`) VALUES ('$id','$username', '$email', '$gender', '$city')";    mysqli_query($conn, $sql);
}


?>

<html>
    <head>
        <title>HTML Form</title>
        <style>
            div{
                width:400px;
                height:450px;
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
           <form method="post" action="question3.php">
           <h3 style='text-align: center;color:black;padding:13px'>Enter The Details</h3>
            id <input type="number" name="id" placeholder="Enter Your id"  required><br><br><br>
            Username <input type="text" name="username" placeholder="Enter Your Username" required><br><br><br>
            E-Mail <input type="email" name="email" placeholder="Enter Your E-Mail" required><br><br><br>
            Select Gender - 
            Male <input type="radio" name="gender" value="M"checked >
            Female <input type="radio" name="gender" value="F">
            others <input type="radio" name="gender" value="O"><br><br><br>
             Select Your City -
            <select name="city" required>
                <option value="Bareilly" selected>BAREILLY </option>
                <option value="Bharuch">BHARUCH</option>
                <option value="Durgapur">DURGAPUR</option>
                <option value="Gunnaur">GUNNAUR</option>
            </select>
            <br><br>
            <br><br>
            <input type="submit" name="submit" value=" Submit Data ">
          </form>
        </div>
    </body>
</html>
