<?php
$hostname = "127.0.0.1";
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
?>
<?php
$id=$_GET['id'];
$sql = "SELECT * FROM `the users` WHERE `id`=$id";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
$username = $row['username'];
$email = $row['email'];
$gender = $row['gender'];
$city = $row['city'];
?>
<?php
if(isset($_POST['update'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];

    $sql = "UPDATE `the users` SET username='$username', email='$email',gender='$gender'  city='$city' WHERE id='$id'";
    if(mysqli_query($conn, $sql)){
        echo "Data updated successfully...";
        header("Location:question5.php");
    }
    else{
        echo "Updation failed..";
    }
}
?>
<html>
    <head>
        <title>HTML Forms</title>
    </head>
<body>
<form method="POST" action="update.php?id=<?php echo "$id"?>">
    USERNAME <input type="text" name="username" value=<?php echo "$username" ?> placeholder="Type Your Username" required><br>
    E-MAIL <input type="email" name="email" value=<?php echo "$email" ?> placeholder="Type Your E-mail" required><br>
    Gender <input type="text" name="gender" value=<?php echo "$gender" ?> placeholder="Gender" required><br>
    Select City <select name="city">
        <option value="bareilly" <?php if($city=="bareilly"){echo "selected";}?>>BAREILLY</option>
        <option value="bharuch" <?php if($city=="bharuch"){echo "selected";}?>>BHARUCH</option>
        <option value="durgapur" <?php if($city=="durgapur"){echo "selected";}?>>DURGAPUR</option>
        <option value="GUNNAUR" <?php if($city=="GUNNAUR"){echo "selected";}?>>GUNNAUR</option>
        <option value="Mussoorie" <?php if($city=="Mussoorie"){echo "selected";}?>>Mussoorie</option>
        <option value="Lucknow" <?php if($city=="Lucknow"){echo "selected";}?>>Lucknow</option>
    </select><br>
    <input type="submit" name="update" value="Update">
</form>
</body>
</html>