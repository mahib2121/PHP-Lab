<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
$vat = 0.15;
$totalamount= 5000;


$FinalAmount  = $totalamount + ($totalamount * $vat);


echo($FinalAmount);
?>

</body>
</html>