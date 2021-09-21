<html>

<?php
$con= new mysqli("127.0.0.1", "root", "mypasswd", "world");
if ($con->connect_errno) {
    printf("connection failed: %s\n", $con->connect_error());
    exit();
}
#$res = $con->query("SELECT VERSION()");
if ($res = $con->query("SELECT * FROM city WHERE CountryCode = 'USA' AND District = 'Minnesota'")) {
    printf("Returned %d rows.<p><p>", $res->num_rows);
    echo "<table>";
    while ($row = $res->fetch_row())
    {
        printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row[0], $row[1], $row[2], $row[3], $row[4]);
    }

    echo "</table>";
}



$res->close();
$con->close();

?>


</html>
