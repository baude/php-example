<?php
$con= new mysqli("127.0.0.1", "root", "mypasswd", "world");
if ($con->connect_errno) {
    printf("connection failed: %s\n", $con->connect_error());
    exit();
}
#$res = $con->query("SELECT VERSION()");
if ($res = $con->query("SELECT * FROM city WHERE CountryCode = 'USA' AND District = 'Minnesota'")) {
    printf("Returned %d rows.\n\n", $res->num_rows);
    while ($row = $res->fetch_row())
    {
        printf("%s %s %s %s %s\n", $row[0], $row[1], $row[2], $row[3], $row[4]);
    }

}



$res->close();
$con->close();

?>
