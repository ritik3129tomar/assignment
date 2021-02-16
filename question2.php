<html>
    <head>
        <title>Addition of two numbers using form</title>
    </head>
    <body>
        <form method="post" action="question2.php">

            Variable1=<input type="text" name="var1">

            Variable2=<input type="text" name="var2">

            <input type="submit" name="submit">

        </form>

    </body>

</html>
<?php
if(isset($_POST['submit']))
{
    if(empty($_POST['var1'])||empty($_POST['var2']))
    echo "no input provided please add values";

    else
    {
      $sum=$_POST['var1']+ $_POST['var2'];
      echo "sum of two number is $sum";
    }
}
else
{
   echo "No data submitted yet. Click submit to submit the form.";
}
?>