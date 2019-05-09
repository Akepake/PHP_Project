<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "pikkusuutaridb";



$db = new mysqli($servername, $username, $password, $database);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

echo "Connected succesfully";



//lapsi:

$first = mysqli_real_escape_string($db, $_POST["first"]);

$last = mysqli_real_escape_string($db, $_POST["last"]);

$id = mysqli_real_escape_string($db, $_POST["id"]);

$address = mysqli_real_escape_string($db, $_POST["address"]);

$postcode = mysqli_real_escape_string($db, $_POST["postcode"]);

$city = mysqli_real_escape_string($db, $_POST["city"]);

$county = mysqli_real_escape_string($db, $_POST["county"]);

// huoltaja:

$a_first = mysqli_real_escape_string($db, $_POST["a_first"]);

$a_last = mysqli_real_escape_string($db, $_POST["a_last"]);

$a_id = mysqli_real_escape_string($db, $_POST["a_id"]);

$email = mysqli_real_escape_string($db, $_POST["email"]);

$phone = mysqli_real_escape_string($db, $_POST["phone"]);

$profession = mysqli_real_escape_string($db, $_POST["profession"]);

$job = mysqli_real_escape_string($db, $_POST["job"]);




$date = mysqli_real_escape_string($db, $_POST["date"]);

$dailyhours = mysqli_real_escape_string($db, $_POST["dailyhours"]);

$info = mysqli_real_escape_string($db, $_POST["info"]);


$query= "

INSERT INTO child (first, last, id, address, postcode, city, county, info) VALUES ('$first', '$last', '$id', '$address', '$postcode', '$city', '$county', '$info');

INSERT INTO adult (first, last, id, email, phone, profession, job) VALUES ('$a_first', '$a_last','$a_id', '$email', '$phone', '$profession', '$job');


INSERT INTO contract (idcontract, start, daily) VALUES ('NULL', '$date', '$dailyhours');

";


mysqli_multi_query($db, $query);



?>