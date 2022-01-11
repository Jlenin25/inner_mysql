<?php

require_once 'db/db.php';

// $obj = new DB();

if(isset($_POST)) {
    $name = $_POST['name'];
    $query = "INSERT INTO clients(name) VALUES('$name')";
    $obj->query($query);
}