<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=praktikum03', 'root', '');
$stmt = $pdo->query("SELECT Nama, Email, Password FROM user");
$rows = $stmt->fetchALL(PDO::FETCH_ASSOC);

echo '<table border="1">'."\n";
foreach ( $rows as $row ) {       
    echo "<tr><td>";
    echo($row['Nama']);
    echo("</td><td>");
    echo($row['Email']);
    echo("</td><td>");
    echo($row['Password']);
    echo("</td></tr>\n");
}
echo "</table>\n";?>
    