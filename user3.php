<?php
require_once "pdo.php";
if (isset($_POST['delete']) && isset($_POST['id'])) {
        $sql = "DELETE FROM user WHERE id = :zip";
        echo("<pre>\n$sql\n</pre>\n");
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(':zip'=>$_POST['id']));
}
$stmt = $pdo->query("SELECT Nama, Email, Password, id FROM user");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<html><head></head>
<body>
    <table border ="1">
    <?php
    foreach ( $rows as $row ) {
        echo "<tr><td>";
        echo($row['Nama']);
        echo("</td><td>");
        echo($row['Email']);
        echo("</td><td>");
        echo($row['Password']);
        echo("</td><td>");
        echo('<form method="post"><input type="hidden" ');
        echo('name="id" value="'.$row['id'].'">'."\n");
        echo('<input type="submit" value="Del" name="delete">');
        echo("\n</form>\n");
        echo("</td></tr>\n");
    }
    ?>
    </table>
</body>

</html>