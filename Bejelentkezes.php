<?php
// a rendszer által ismert felhasználókat tartalmazó 2-dimenziós tömb
$fiokok = [["felhasznalonev" => "fabbernat", "jelszo" => "password", "nem" => "F", "szuletesiDatum" => 19]];

// az űrlapfeldolgozás során keletkező hibákat ebbe a tömbbe fogjuk gyűjteni
$hibak = [];

// űrlapfeldolgozás

if (isset($_POST["bejelentkezes"])) {   // ha az űrlapot elküldték...
    // a kötelezően kitöltendő mezők ellenőrzése
    if (!isset($_POST["felhasznalonev"]) || trim($_POST["felhasznalonev"]) === "")
        $hibak[] = "A felhasználónév megadása kötelező!";

    if (!isset($_POST["jelszo"]) || trim($_POST["jelszo"]) === "")
        $hibak[] = "A jelszó megadása kötelező!";

    // űrlapadatok lementése változókba
    $felhasznalonev = $_POST["felhasznalonev"];
    $jelszo = $_POST["jelszo"];

    // bejelentkezés sikerességének ellenőrzése
    if (count($hibak) === 0) {   // ha nem történt hiba a bejelentkezés során, hozzáadjuk az újonnan bejelentkezett felhasználót a $fiokok tömbhöz
        $fiokok[] = ["felhasznalonev" => $felhasznalonev, "jelszo" => $jelszo];
        $siker = TRUE;
    } else {                    // ha voltak hibák, akkor a bejelentkezés sikertelen
        $siker = FALSE;
    }
}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Bejelentkezés</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="css/Bejelentkezes.css">
    <style>
        form input {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="topnav">
    <a <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"'; ?> href="index.php">Főoldal</a>
    <a <?php if(basename($_SERVER['PHP_SELF']) == 'Rendeles_es_foglalas.php') echo 'class="active"'; ?> href="Rendeles_es_foglalas.php">Rendelés, Foglalás</a>
    <a <?php if(basename($_SERVER['PHP_SELF']) == 'Szemelyzet.php') echo 'class="active"'; ?> href="Szemelyzet.php">Legénységünk</a>
    <a <?php if(basename($_SERVER['PHP_SELF']) == 'Terkep.php') echo 'class="active"'; ?> href="Terkep.php">Térkép</a>
    <a <?php if(basename($_SERVER['PHP_SELF']) == 'Tortenetunk.php') echo 'class="active"'; ?> href="Tortenetunk.php">Történetünk</a>
    <a <?php if(basename($_SERVER['PHP_SELF']) == 'Vendegkonyv.php') echo 'class="active"'; ?> href="Vendegkonyv.php">Vendégkönyv</a>
    <a <?php if(basename($_SERVER['PHP_SELF']) == 'Bejelentkezes_es_regisztracio.php') echo 'class="active"'; ?>href="Bejelentkezes_es_regisztracio.php" style="float:right">Bejelentkezés</a>
</div>

<form action="Bejelentkezes.php" method="POST" class="zoldhatter">
    <label>Felhasználónév: <input type="text" name="felhasznalonev"
                                  value="<?php if (isset($_POST['felhasznalonev'])) echo $_POST['felhasznalonev']; ?>"/></label>
    <br/>
    <label>Jelszó: <input type="password" name="jelszo"/></label> <br/>
    <input type="submit" name="bejelentkezes" value="Bejelentkezés"/> <br/><br/>
</form>
<?php
if (isset($siker) && $siker === TRUE) {  // ha nem volt hiba, akkor a bejelentkezés sikeres
    echo "<p>Sikeres bejelentkezés!</p>";
    session_start();
    echo session_id() . "<br/>";
    $_SESSION["username"] = $_POST[$felhasznalonev];    // egyszerű adatok tárolása a $_SESSION szuperglobális tömbben
    $_SESSION["birthDate"] = $_POST["szuletesiDatum"];

    $_SESSION["user"] = ["username" => $_POST[$felhasznalonev], "birthDate" => $_POST["szuletesiDatum"]]; // természetesen összetett adatok is tárolhatók a $_SESSION-ben

    if (isset($_SESSION["user"])) {     // ha be lett állítva a "user" munkamenet-változó értéke...
        if (isset($_SESSION["user"]["username"])) {
            echo "<p>Üdvözöllek, " . $_SESSION["user"]["username"] . "! </p>";
        }
    }
    echo "<a href='Profil.php' target='_blank'>Profil.php</a>"; // Output link to Profil.php
    header("Location: Profil.php");//Redirecting to Profil.php
} else {                                // az esetleges hibákat kiírjuk egy-egy bekezdésben
    foreach ($hibak as $hiba) {
        echo "<p class='zoldhatter'>" . $hiba . "</p>";
    }
}
?>
</body>
</html>
