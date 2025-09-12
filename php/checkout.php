<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['total-price'];
    echo "Received: " . $username;
}

?>