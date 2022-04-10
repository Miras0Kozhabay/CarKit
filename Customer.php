<?php
include 'index.php';
$customer_id=$_POST['emlpoyee_id'];
$customer_name=$_POST['emlpoyee_name'];
$customer_address=$_POST['emlpoyee_address'];
$customer_position=$_POST['emlpoyee_position'];
$query = "SELECT FROM Customer('customer_id','emlpoyee_name', 'emlpoyee_address', 'emlpoyee_position') VALUES ('emlpoyee_id', 'customer_name', 'customer_address', 'customer_position') or DIE("Помилка")";
?>