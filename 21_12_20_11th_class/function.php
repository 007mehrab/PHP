<?

function calcSalesTax($price, $tax){
$total = $price + ($price * $tax);
echo "Total cost: $total";
}
$price = 10;
$tax = 5;


calcSalesTax($price,$tax);

?>