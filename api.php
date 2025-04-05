<?php
header('Content-Type: application/json');

$projects = [
  ["title" => "Portfolio Website", "tech" => "Next.js"],
  ["title" => "API Server", "tech" => "Node.js"],
  ["title" => "Data Analysis", "tech" => "Python"]
];

echo json_encode($projects);
?>
