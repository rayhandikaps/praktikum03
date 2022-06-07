<?php
require_once "pdo.php";
if (isset($POST['Name']) && isset($_POST['Email']) && isset($_POST['Password'])) {
    $sql = "INSERT INTO user (Name, Email, Password)
    values (:Name, Email, Password)";
    echo("<pre>\n".$sql."\n</pre>\n");
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':Name' => $_POST['Name'],
        ':Email' => $_POST['Email'],
        ':Password' => $_POST['Password']));
}
?><html><head></head><body>
    <p>Add A New User</p>
    <form method="post">
        <p>Nama:<input type="text" name="name" size="40"></p>
        <p>Email:<input type="text" name="email"></p>
        <P>Password:<input type="password" name="password"></p>
        <p><input type="submit" value="Add New" /></p>
</form>
</body>