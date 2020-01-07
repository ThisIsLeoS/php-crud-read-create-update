<?php
  header('Content-Type: application/json');
  $serverName = "localhost";
  $username = "root";
  $password = "root";
  $dbName = "hotel_db";
  $conn = new mysqli($serverName, $username, $password, $dbName);
  if ($conn->connect_errno) {
    echo json_encode(-1);
    return;
  }
  $sql = "
      SELECT *
      FROM configurazioni
  ";
  $res = $conn->query($sql);
  if ($res->num_rows < 1) {
    echo json_encode(-2);
    return;
  }
  $configurations = [];
  while($configuration = $res->fetch_assoc()) {
    $configurations[] = $configuration;
  }
  echo json_encode($configurations);