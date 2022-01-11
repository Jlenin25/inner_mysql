<?php

require_once 'db/db.php';

// $obj = new DB();

if(isset($_POST)) {
    $client =  $_POST['client'];
    $name = $_POST['name'];
    $query = "INSERT INTO products(client,name) VALUES('$client','$name')";
    $con->query($query);
}