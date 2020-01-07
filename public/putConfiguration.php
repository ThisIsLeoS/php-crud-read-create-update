<?php

header('Content-Type: application/json');

list($name, $lastname, $address) = [
    $_POST['name'],
    $_POST['lastname'],
    $_POST['address']
];

if (!$name || !$lastname || !$address) {

    echo json_encode(-2);
    return;
}

$server = "localhost";
$username = "root";
$password = "bool";
$dbname = "HotelDB";

$conn = new mysqli($server, $username, $password, $dbname);
if ($conn->connect_errno) {

    echo json_encode(-1);
    return;
}

$sql = "

      INSERT INTO paganti (name, lastname, address)
      VALUES ( ? , ? , ? )

  ";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $lastname, $address);

$res = $stmt->execute();
echo json_encode($res);
