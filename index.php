<?php 

<<<<<<< HEAD
	$ninjas = ['shaun', 'ryu', 'yoshi'];

	// for($i = 0; $i < count($ninjas); $i++){
	// 	echo $ninjas[$i] . '<br />';
	// }

	// foreach($ninjas as $ninja){
	// 	echo $ninja . ' <br/>';
	// }
=======
	// conditional statements
	
	$price = 20;

	if($price < 30){
		echo 'if condition met';
	} elseif($price === 20) {
		echo 'elseif condition met';
	} else {
		echo 'condition not met';
	}
>>>>>>> 11_conditional_statements

	$products = [
		['name' => 'shiny star', 'price' => 20],
		['name' => 'green shell', 'price' => 10],
		['name' => 'red shell', 'price' => 15],
		['name' => 'gold coin', 'price' => 5],
		['name' => 'lightning bolt', 'price' => 40],
		['name' => 'banana skin', 'price' => 2]
	];

<<<<<<< HEAD
	// foreach($products as $product){
	// 	echo $product['name'] .' - '. $product['price'];
	// 	echo '<br />';
	// }

	$i = 0;
=======
	foreach($products as $product){

		if($product['price'] < 15 && $product['price'] > 2){
			echo $product['name'] . '<br />';
		}

		if($product['price'] > 20 || $product['price'] < 10){
			echo $product['name'] . '<br />';
		}
>>>>>>> 11_conditional_statements

	while($i < count($products)){
		echo $products[$i]['name'];
		echo '<br />';
		$i++;
	}


	// comparisons & booleans (true or false)
	//echo true // echo's "1"
	//echo false // echo's ""

	// numbers
	//echo 5 < 10;
	//echo 5 > 10;
	//echo 5 == 10;
	//echo 10 == 10;
	//echo 5 != 10;
	//echo 5 <= 5;
	//echo 5 >= 5;

	// strings
	//echo 'shaun' < 'yoshi';
	//echo 'shaun' > 'yoshi';
	//echo 'shaun' > 'Shaun';
	//echo 'mario' == 'mario';
	//echo 'mario' == 'Mario';

	// loose vs strict equal comparison

	//echo 5 == '5';
	//echo 5 === '5';
	//echo 5 === 5;

	echo true == 1;
	// echo true === 1;
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

	<h1>Products</h1>
	<ul>
		<?php foreach($products as $product){ ?>
			<h3><?php echo $product['name']; ?></h3>
			<p>£<?php echo $product['price']; ?></p>
		<?php } ?>
	</ul>

</body>
</html>
