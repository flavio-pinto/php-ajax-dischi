<?php include_once __DIR__ . '/../data/main-content.php';
header('Content-Type: application/json');
echo json_encode($albums);
?>