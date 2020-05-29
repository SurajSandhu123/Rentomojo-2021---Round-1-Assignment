<?php
$db = mysqli_connect('localhost:3306', 'root', '','Contect');
if(isset($_POST["submit"]))
{
$name = $_POST['name'];
$birthday = $_POST['birthday'];
$Mobilenumber = $_POST['Mobilenumber'];
$Email = $_POST['Email'];
$q = "INSERT INTO Details (name, Dob , mobile , email) VALUES('$name', '$birthday', '$Mobilenumber','$Email')";
if (mysqli_query($db, $q)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $q . "<br>" . mysqli_error($db);
}
mysqli_close($db);
header('location:Home.php');
}
?>
