<?php
// adatmodositas.php

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Get input values from form
$jelszo = $_POST["jelszo"];
$jelszo2 = $_POST["jelszo2"];
$szuletesi_datum = $_POST["szuletesi_datum"];
$bemutatkozas = $_POST["bemutatkozas"];

// Store input values in an array
$adatok = array(
"jelszo" => $jelszo,
"jelszo2" => $jelszo2,
"szuletesi_datum" => $szuletesi_datum,
"bemutatkozas" => $bemutatkozas
);

// Open file in write mode
$file = fopen("../txt/felhasznaloadatok.txt", "w");

// Write values to file
foreach ($adatok as $key => $value) {
fprintf($file, "%s: %s\n", $key, $value);
}

// Close file
fclose($file);

// Redirect to success page or display success message
// header("Location: success.php"); // Uncomment this line to redirect to success page
header("Location: ../Profil.php");
exit;
}