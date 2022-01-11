<?php
require_once 'db/db.php';

// $obj = new DB();

$query1 = "SELECT * FROM clients";
$res1 = $con->query($query1);

// $query2 = "SELECT * FROM products";
// $res12 = $obj->query($query2);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $option='';
    while($row = mysqli_fetch_array($res1)) {
        $option .= "<option value=\"$row[id]\">$row[name]</option>";
    }
    ?>
    <form action="">
        <select name="" id="">
            <option value="-">Seleciona</option>
            <?php echo $option; ?>
        </select>
    </form>
    <p>
        <h2>Producto</h2>
        <input type="text" name="product">
    </p>
    <p>
        <h2>Cliente</h2>
    </p>
</body>
</html>