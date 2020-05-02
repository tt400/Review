// success.php
<!DOCTYPE HTML>
<?php        
             session_start();	if(!isset($_SESSION['logged_in'])||$_SESSION['logged_in']==false){		         		header("location:index.php");        
              }
?>
<html>
<body>     
     <h3> Hello Welcome to SoftWare Inc. </h3>
</body>
</html>
