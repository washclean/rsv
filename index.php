<style>

    
    
    .titulli{
   
    background-color: rgba(72, 58, 90, 0.817);
    text-align: center;
    margin-top: 50px;
    height: 200px;
    padding-left:50%;
    text-align: center;
    padding: 1px;
    width: 30%;
    margin-top:10%;
    margin-left: 35%;
    color: whitesmoke;
    position:relative;}
   
</syle>


<?php

session_start();
$conn = mysqli_connect('localhost', 'root', '','doc') or die ('unable to connect');

?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
   body{
    text-align:center;
    color:#5283b6;
   }
   .field {
   margin-bottom: 20px;
   }
</style>

<head>
    <body>
     <div class="titulli">   
    <h2>Të dhënat e shfrytëzuesit<h2>
  <div>
    <div class="users">
  <form action = "index.php" method = "post">
    <input = "text"  name="username" class="field" placeholder="Emri i shfrytezuesit" required=""><br/>
    <input = "password"  name="password" class="field" placeholder="Fjalkalimi" required=""><br/>
    <input type="submit" name="login" class="field" value="Kyçu">

</div>
<?php
  if (isset($_POST['login'])){
   $username =$_POST['username'];
   $password =$_POST['password'];
  
   $select = mysqli_query($conn, "SELECT * FROM login WHERE username = '$username' AND password = '$password'");
 $row = mysqli_fetch_array ($select);

 if(is_array($row))  {
    $_SESSION["username"] = $row ['username'];
    $_SESSION["password"] = $row ['password'];
  } else {
    echo'<script type = "text/javascript">';
    echo'alert ("Gabim emri i shfrytezuesit ose fjalkalimi");';
    echo 'window.location.href = "index.php"';
    echo '</script>';
  }
}
    if (isset($_SESSION['username'])) {
        header("Location:home.html");
   }
?>
</body>
</html>
