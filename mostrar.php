<?php
require_once 'db/db.php';

$obj = new DB();

$query1 = "SELECT * FROM clients";
$res1 = $obj->select($query1);

$query3 = "SELECT * FROM products P JOIN clients C ON P.client_id = C.client_id";
$res3 = $obj->select($query3);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <h1>Lista de Productos</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Cliente</th>
            </tr>
        </thead>
        <tbody>
        <?php //foreach($res3 as $product) { ?>
            <?php while($row = mysqli_fetch_array($res3)) { ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['product']; ?></td>
                <td><?= $row['name']; ?></td>
            </tr>
            <?php //} ?>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>