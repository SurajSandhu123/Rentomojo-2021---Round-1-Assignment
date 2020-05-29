<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
 <link rel="stylesheet" href="styles.css">
 <link rel="stylesheet" href="style1.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>

<div class="container">
<header class="header mx-auto w-75 p-3 mt-3 mb-0  bg-dark text-white" ><h4><i class="fa fa-address-book" ></i> RM-PHONEBOOK</h4></header>
<div class="row mx-auto w-75 p-3 border border-top-0 border-dark rounded-bottom">

<div class="mx-auto w-75 p-3 ">
<form>
<input type="text" placeholder="Search" class="search"><i class="fa fa-search fa-2x icon"></i>
</form>
<?php
$db = mysqli_connect('localhost', 'root', '','Contect');
$q= " select * from Details";
$result = mysqli_query($db,$q);
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result)) {
echo "<button class=\"accordion\">".$row['name']."</button>
<div class=\"panel bg-light text-dark\"><p>".$row['Dob']." <button type=\"button\" class=\"btn btn-info mb-2 mt-4 ml-5 space\">Edit</button> <button type=\"button\" class=\"btn btn-warning  mt-4  mb-2 ml-2 \">Remove</button></p><div class=\"border p-3 mt-2 mb-2 bg-dark text-white\"><p>
<i class=\"m-2 fa fa-phone-square\" aria-hidden=\"true\"> " .$row['mobile'] ."</i><i class=\"m-2 fa fa-commenting\" aria-hidden=\"true\"> ". $row['email'] ."</i></p></div></div>";
}
}
mysqli_close($db);
?>

<nav aria-label="Page navigation example" class=" w-50 p-2 navigationsettings" > 
  <ul class="pagination">
    <li class="page-item ">
      <a class="page-link bg-dark text-white" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item "><a class="page-link bg-dark text-white " href="#">1</a></li>
    <li class="page-item "><a class="page-link bg-dark text-white" href="#">2</a></li>
    <li class="page-item "><a class="page-link bg-dark text-white" href="#">3</a></li>
    <li class="page-item ">
      <a class="page-link bg-dark text-white" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
<i class="fa fa-plus-circle fa-3x plus" id="plussign" onclick="clickme()"></i>

</div>
</div>
</div>
<div id="box" class=" w-100" >
<div class="containerforContact mx-auto mt-5 mb-5  " id="container" >
   <form method="post" action="adding.php">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name.." required>
    
    <label for="bday">Birthday</label>
    <input type="date" id="bday" name="birthday"  required>
    
    <label for="mnuber">Mobile Number </label><input type="number" id="mnuber" name="Mobilenumber" required><i class="fa fa-plus-circle  pull-right pull-up Number fa-2x" aria-hidden="true"></i>
    
    <label for="email">Email </label>
    <input type="email" id="email" name="Email" required><i class="fa fa-plus-circle pull-right Email fa-2x" ></i>
    <input type="submit" value="Save" name="submit" >
  </form>
</div>

   
    
  </div>
</div>
<script>
function clickme()
{

document.getElementById("box").style.display="block";
document.getElementById("box").style.zIndex="1";
window.onclick = function(event) {
  if (event.target == document.getElementById("box")) {
    document.getElementById("box").style.display = "none";
  }
}
}
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

</body>
</html> 
