<!-- Argument -->
<?

// function salesTax($price, $tax){

// 	return $price + ($price * $tax);
// }

// //echo salesTax(2000, 0.15);

// $productPrice = 10000;
// $taxPrice = 0.25;

// echo SalesTax($productPrice, $taxPrice);

?>

<!-- Default Argument Values -->

<?

function salesTax($price, $tax=.05){

	return $price + ($price * $tax);
}

//echo salesTax(2000, 0.15);

$productPrice = 10000;
$taxPrice = 0.25;

//0echo SalesTax($productPrice);
echo SalesTax($productPrice, $taxPrice);

?>