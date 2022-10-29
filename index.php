<?php 

$response = ["slackUsername" => "arakunrinbambam", "backend"=> true, "age" => 30, "bio" => "I'm a tech enthusiast, I love programming and I do music at my leisure"];

header("Content-Type: application/json");
echo json_encode($response);
exit();


?>