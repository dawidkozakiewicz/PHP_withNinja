<?php 
// connect to database
$conn = mysqli_connect('localhost', 'dawid', 'Potaspotas1', 'ninja_pizza');

//check connection
if(!$conn) {
	echo 'Connection error: ' . mysqli_connect_error();
}
?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<?php include('templates/footer.php'); ?>

</html>