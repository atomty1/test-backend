<?php

require_once("vendor/autoload.php");
use CorsHelper\CorsHelper;
CorsHelper::GrantRequest();
// Read the raw POST body
$data = json_decode(file_get_contents("php://input"), true);

// Echo back the message
if (isset($data["message"])) {
    echo "PHP received: " . htmlspecialchars($data["message"]);
} else {
    echo "No message received.";
}
?>
