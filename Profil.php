<?php
session_start();
$_SESSION["birthDate"] = "ismeretlen";
$_SESSION["bemutatkozas"] = "nincs";

// adatmodositas.php

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input values from form
    $jelszo = isset($_POST["jelszo"]) ? $_POST["jelszo"] : "";
    $jelszo2 = isset($_POST["jelszo2"]) ? $_POST["jelszo2"] : "";
    $szuletesi_datum = isset($_POST["szuletesi_datum"]) ? $_POST["szuletesi_datum"] : "";
    $bemutatkozas = isset($_POST["bemutatkozas"]) ? $_POST["bemutatkozas"] : "";


    // Store input values in an array
    $adatok = array(
        "jelszo" => $jelszo,
        "jelszo2" => $jelszo2,
        "szuletesi_datum" => $szuletesi_datum,
        "bemutatkozas" => $bemutatkozas
    );

    // Open file in write mode
    $file = fopen("txt/felhasznaloadatok.txt", "w");

    // Write values to file
    foreach ($adatok as $key => $value) {
        fprintf($file, "%s: %s\n", $key, $value);
    }

    // Close file
    fclose($file);

    // Set success message
    $success_message = "Adatok mentve!";
}

?>

<body>
<div class="topnav">
    <a <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"'; ?> href="index.php">Főoldal</a>
    <a <?php if (basename($_SERVER['PHP_SELF']) == 'Rendeles_es_foglalas.php') echo 'class="active"'; ?>
            href="Rendeles_es_foglalas.php">Rendelés, Foglalás</a>
    <a <?php if (basename($_SERVER['PHP_SELF']) == 'Szemelyzet.php') echo 'class="active"'; ?> href="Szemelyzet.php">Legénységünk</a>
    <a <?php if (basename($_SERVER['PHP_SELF']) == 'Terkep.php') echo 'class="active"'; ?> href="Terkep.php">Térkép</a>
    <a <?php if (basename($_SERVER['PHP_SELF']) == 'Tortenetunk.php') echo 'class="active"'; ?> href="Tortenetunk.php">Történetünk</a>
    <a <?php if (basename($_SERVER['PHP_SELF']) == 'Vendegkonyv.php') echo 'class="active"'; ?> href="Vendegkonyv.php">Vendégkönyv</a>
    <a <?php if (basename($_SERVER['PHP_SELF']) == 'Bejelentkezes_es_regisztracio.php') echo 'class="active"'; ?>href="Bejelentkezes_es_regisztracio.php"
       style="float:right">Bejelentkezés</a>
</div>


<div class="zoldhatter">
    <h1 class="header">Fiókom</h1>
</div>
</body>

<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Fiókom</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="css/Profil.css">
</head>
<body>
<div class="side-menu zoldhatter">
    <a href="#" onclick="showContent(1)">1. Profilkép cseréje</a>
    <a href="#" onclick="showContent(2)">Felhasználói adatok módosítása</a>
    <a href="#" onclick="showContent(3)">Adataim</a>
    <a href="#" onclick="showContent(4)">Felhasználói fiók törlése</a>
    <a href="#" onclick="showContent(5)">Más felhasználók kizárólag privát és titkos adatainak megtekintése</a>
    <a href="#" onclick="showContent(6)">Webáruház</a>
    <a href="#" onclick="showContent(7)">Üzenetküldés</a>
    <a href="#" onclick="showContent(8)">Jogosultságok</a>
</div>


<div class="content">
    <div class="zoldhatter" id="content1">
        <iframe src="Kepfeltoltes.php" width="80% viewport"></iframe>
        -->
    </div>


    <div class="zoldhatter" id="content2">
        <div class="modositas" id="block1">
            <div style="margin: 0 auto; max-width: 500px;">
                <form method="post" action="Profil.php">
                    <label for="jelszo">Új jelszó:</label>
                    <input type="password" name="jelszo" id="jelszo">
                    <br>
                    <label for="jelszo2">Új jelszó megerősítése:</label>
                    <input type="password" name="jelszo2" id="jelszo2">
                    <br>
                    <label for="szuletesi_datum">Születési dátum módosítása:</label>
                    <p>Jelenlegi születési dátum: <?php echo $_SESSION["birthDate"]; ?></p>
                    <p>Új születési dátum: </p>
                    <input type="date" name="szuletesi_datum" id="szuletesi_datum">
                    <br>
                    <p>Jelenlegi
                        bemutatkozás: <?php echo ($_SESSION["bemutatkozas"] != "") ? $_SESSION["bemutatkozas"] : "Még nem írt magáról bemutatkozást!"; ?></p>
                    <label for="bemutatkozas">Új bemutatkozás:</label>
                    <textarea name="bemutatkozas" id="bemutatkozas"></textarea>
                    <br>
                    <input type="submit" value="Mentés">
                </form>
            </div>
        </div>


        <div class="zoldhatter" id="content3"><?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST["email"])) {
                    echo "E-mail címem: " . $_POST["email"] . "<br>";
                }
                if (isset($_POST["szuletesi_datum"])) {
                    echo "Születési dátumom: " . $_POST["szuletesi_datum"] . "<br>";
                }
                if (isset($_POST["bemutatkozas"])) {
                    echo "Bemutatkozásom: " . $_POST["bemutatkozas"] . "<br>";
                }

                // Print all other elements in $_POST
                foreach ($_POST as $key => $value) {
                    if ($key != "email" && $key != "szuletesi_datum" && $key != "bemutatkozas") {
                        echo "$key: $value nincs<br>";
                    }
                }
            }
            ?></div>


        <div class="zoldhatter" id="content4"><input type="submit" value="Fiók törlése"><?php
            foreach ($_POST as $adat) {
                $adat = null;
            }
            ?>
        </div>
        <div class="zoldhatter" id="content5"><a href="">Adatbázis</a></div>


        <div class="zoldhatter" id="content6"><a href="Webshop.php">Webáruház</a></div>


        <div class="zoldhatter" id="content7"><a href="Vendegkonyv.php">vendégkönyv</a></div>


        <div class="zoldhatter" id="content8"><a href="Jogosultsagok.php">Jogosultságok</a></div>
    </div>
    <script>
        // JavaScript to handle menu item click
        function showContent(section) {
            // Hide all content divs
            var contentDivs = document.querySelectorAll('.content div');
            for (var i = 0; i < contentDivs.length; i++) {
                contentDivs[i].style.display = 'none';
            }

            // Show selected content div
            var selectedContentDiv = document.getElementById('content' + section);
            selectedContentDiv.style.display = 'block';
        }
    </script>
</body>
</html>

