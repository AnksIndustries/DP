<html>
<body>
<?php

if (($_POST['email']=="ankit.see") && ($_POST['password']=="security")){
	include "hi.html";
}else{
	echo "<h1><center>Wrong Email or Password</center><h1>";
}
?>
</body>
</html>