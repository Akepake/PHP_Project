<?php

require "includes/dbh.inc.php";

//mysql delete query used with GET superglobal
$sql = "DELETE FROM child WHERE idchild='$_GET[id]'";

//if deletion is succesfull the user will be redirected to search2.php
if (mysqli_query($conn, $sql)){
    header("refresh:1; url=search2.php");
} else {
    echo "Ei voitu poistaa.";
}

?>