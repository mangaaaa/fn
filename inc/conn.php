<?php
$host = "ec2-52-21-153-207.compute-1.amazonaws.com";
$port="5432";
$dbname="da9hdrc59ohrr7";
$us="vxjxguhqyfsiqn";
$ps="e088a9a86be067fc05ddd327c96ddb861b566f6c8810c1930269fac782399b61";
$conn = "host={$host},port = {$port},dbname={$dbname},username={$us},password={$ps}";
$dbconn = pg_connect($conn);
if (!$dbconn){
    echo "loi";
}
?>
