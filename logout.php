<?php 

session_start();

if(isset($_SESSION['username']))
{
	session_destroy();

	echo "<script>location.href='form.php'</script>";
}
else
{
	echo "<script>location.href='form.php'</script>";
}
?>