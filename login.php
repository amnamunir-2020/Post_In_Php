<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head>
<!--css-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<title>HOME</title>
</head>
<body>

<div class="container " >
 

<form action="home.php" method="post">

  <div class="mt-3"> <input type="email" name="email"  placeholder="abc@gmail.com" value="email"></div>

  <div class="mt-3"> <input type="password"  name="password"  placeholder="Password"> </div>
 
<div class="mt-3"><button type="submit" name= "submit" value="submit"> Submit</button></div> 

</form>

</div>




</body>

</html>