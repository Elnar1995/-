<!Doctype html>
<html>
    <head>
        <title>
            Автозапчасти от вовки, результаты заказа:
</title>
</head>
<body>
    <h1>Автозапчасти от Вовки</h1>
    <h2>Результаты заказа</h2>
</body>
</html>

<?php
$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];

$totalqty = $tireqty + $oilqty + $sparkqty;
echo "<p>Заказано товаров: ".$totalqty."<br>";
$totalamount = 0.00;

define('TIREPRICE', 100);
define('OILPRICE', 10);
define('SPARKPRICE', 4);

$totalamount = $tireqty * TIREPRICE + $oilqty * OILPRICE + $sparkqty * SPARKPRICE;

echo "Итого: $".number_format($totalamount, 2) . "<br>";

$taxrate = 0.10;
$totalamount = $totalamount * (1 + $taxrate);
echo "Всего, включая налог с продаж: $" . number_format($totalamount,2)."<p>";

echo "<p>Заказ отработан в ".date('H:i, jS F Y'). "</p>";
if ($totalqty == 0)  {
    echo " Вы ничего не заказали на предыдущей странице!<br />";
} else {
    if ($tireqty > 0)echo htmlspecialchars($tireqty). 'шин<br/>';
    if ($oilqty > 0)echo htmlspecialchars($oilqty).' бутылок масла<br/>';
    if ($sparkqty > 0)echo htmlspecialchars($sparkqty).' свечей зажигания<br/>';

}
?>