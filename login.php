<?php

session_start();

?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
</head>


<h2>Welcome <?php echo $_SESSION['username']; ?><h2>
   Dil <a href = "logout.php">Dil</a>


<body>
</body>
</html>
