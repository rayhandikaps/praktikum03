<?php
require_once "pdo.php";
echo "<pre>\n";
$stmt = $pdo->query("SELECT * FROM user");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($rows);
echo "</pre>\n";?>