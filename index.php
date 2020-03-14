<?php 

	// functions

	function sayHello($name = 'shaun', $time = 'morning'){
		echo "Good $time, $name";
	}

	//sayHello();
	//sayHello('mario');
	sayHello('yoshi', 'night');

	function formatProduct($product){
		// echo "{$product['name']} costs £{$product['price']} to buy <br />";
		return "The {$product['name']} costs £{$product['price']} to buy <br />";
	}
	
	//formatProduct(['name' => 'gold star', 'price' => 20]);

	// $formatted = formatProduct(['name' => 'gold star', 'price' => 20]);
	// echo $formatted;
	// echo 'hello, ninjas';

?>

<!DOCTYPE html>
<html>
<head>
	<title>my first PHP file</title>
</head>
<body>

	<h1><?php echo 'hello, ninjas' ?></h1>
</body>
</html>
