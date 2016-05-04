<!DOCTYPE html>
<html>
<head>
    <title>Jawa Walikan - Jawa Gaol Jogja</title>
    <style type="text/css">
        body {font-size: 20px;}
        span {font-size: 15px;}
    </style>
</head>
<body>
<?php
# created by warizzmann
# 2016
if (isset($_GET['opo'])) {
    include 'walik.php';
    $opo = $_GET['opo'];
    $opo_asli = str_replace(',','',$opo);
    $opo_asli = str_replace(' ','',$opo_asli);
    $opo_array = explode(',',$opo);
    echo $opo_asli.' = ';
    foreach ($opo_array as $o) {
        echo '<strong>'.diwalik($o).'</strong>';
        // echo "<br />";
    }
}
?>
<form method="get">
    <input type="text" name="opo">
    <span>*pisahkan tiap suku kata dengan koma (ex = da,ga,du)</span>
</form>
</body>
</html>
