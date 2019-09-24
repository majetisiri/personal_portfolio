<?php

  $servername = 'localhost';
   $username = 'root';
    $password = 'siri';
    $dbname = 'personal_portfolio';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die('Connection failed: '.$conn->connect_error);
    }

    $dance_id = $_POST['id'];
  $sql = "UPDATE dance SET views=views+1 WHERE id='$dance_id'";
    $result = $conn->query($sql);
    print_r($result);
