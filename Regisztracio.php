<?php
// a rendszer által ismert felhasználókat tartalmazó 2-dimenziós tömb
$fiokok = [["felhasznalonev" => "fabbernat", "jelszo" => "password", "nem" => "F","szuletesiDatum" => 19]];

// az űrlapfeldolgozás során keletkező hibákat ebbe a tömbbe fogjuk gyűjteni
$hibak = [];

// űrlapfeldolgozás

if (isset($_POST["regiszt"])) {   // ha az űrlapot elküldték...
    // a kötelezően kitöltendő mezők ellenőrzése
    if (!isset($_POST["felhasznalonev"]) || trim($_POST["felhasznalonev"]) === "")
        $hibak[] = "A felhasználónév megadása kötelező!";

    if (!isset($_POST["jelszo"]) || trim($_POST["jelszo"]) === "" || !isset($_POST["jelszo2"]) || trim($_POST["jelszo2"]) === "")
        $hibak[] = "A jelszó és az ellenőrző jelszó megadása kötelező!";

    if (!isset($_POST["szuletesiDatum"]) || trim($_POST["szuletesiDatum"]) === "")
        $hibak[] = "Az életkor megadása kötelező!";

    if (!isset($_POST["nem"]) || trim($_POST["nem"]) === "")
        $hibak[] = "A nem megadása kötelező!";

    // űrlapadatok lementése változókba
    $felhasznalonev = $_POST["felhasznalonev"];
    $jelszo = $_POST["jelszo"];
    $jelszo2 = $_POST["jelszo2"];
    $szuletesiDatum = $_POST["szuletesiDatum"];
    $email = $_POST['email'];
    $nem = NULL;

    if (isset($_POST["nem"]))           // csak akkor kérjük le a nemet, ha megadták
        $nem = $_POST["nem"];

    // foglalt felhasználónév ellenőrzése
    foreach ($fiokok as $fiok) {
        if ($fiok["felhasznalonev"] === $felhasznalonev)  // ha egy regisztrált felhasználó neve megegyezik az űrlapon megadott névvel...
            $hibak[] = "A felhasználónév már foglalt!";
    }

    // túl rövid jelszó
    if (strlen($jelszo) < 5)
        $hibak[] = "A jelszónak legalább 5 karakter hosszúnak kell lennie!";

    // a két jelszó nem egyezik
    if ($jelszo !== $jelszo2)
        $hibak[] = "A jelszó és az ellenőrző jelszó nem egyezik!";

    // 18 év alatti életkor
    if ($szuletesiDatum < 18)
        $hibak[] = "Csak 18 éves kortól lehet regisztrálni!";

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Az e-mail cím (" . $email . ") érvényes.";
    } else {
        $hibak[] = "Az e-mail cím (' . $email . ') érvénytelen.";
    }
    // regisztráció sikerességének ellenőrzése
    if (count($hibak) === 0) {   // ha nem történt hiba a regisztráció során, hozzáadjuk az újonnan regisztrált felhasználót a $fiokok tömbhöz
        $fiokok[] = ["felhasznalonev" => $felhasznalonev, "jelszo" => $jelszo, "szuletesiDatum" => $szuletesiDatum, "nem" => $nem];
        $siker = TRUE;
    } else {                    // ha voltak hibák, akkor a regisztráció sikertelen
        $siker = FALSE;
    }
}
    // Adatok serializálása
    $data = serialize(array(
        'felhasznalonev' => $felhasznalonev,
        'jelszo' => $jelszo,
        'jelszo2' => $jelszo2,
        'email' => $email,
    ));

    // Fájlba írás
    $file = 'txt/felhasznaloadatok.txt';
    file_put_contents($file, $data);

    echo 'Az adatok sikeresen el lettek mentve a ' . $file . ' fájlba.';

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Regisztráció</title>
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

<form action="Regisztracio.php" method="POST" class="zoldhatter">
    <label>Felhasználónév: <input type="text" name="felhasznalonev" value="<?php if (isset($_POST['felhasznalonev'])) echo $_POST['felhasznalonev']; ?>"/></label> <br/>
    <label>E-mail cím: <input type="text" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"/></label> <br/>
    <label>Jelszó: <input type="password" name="jelszo"/></label> <br/>
    <label>Jelszó ismét: <input type="password" name="jelszo2"/></label> <br/>
    <label>Életkor: <input type="number" name="szuletesiDatum" value="<?php if (isset($_POST['szuletesiDatum'])) echo $_POST['szuletesiDatum']; ?>"/></label> <br/>
    <h3>Nem:</h3>
    <label><input type="radio" name="nem" value="F" <?php if (isset($_POST['nem']) && $_POST['nem'] === 'F') echo 'checked'; ?>/> Férfi</label>
    <label><input type="radio" name="nem" value="N" <?php if (isset($_POST['nem']) && $_POST['nem'] === 'N') echo 'checked'; ?>/> Nő</label>
    <input type="submit" name="regiszt" value="Regisztráció"/> <br/><br/>
</form>
<?php
if (isset($siker) && $siker === TRUE) {  // ha nem volt hiba, akkor a regisztráció sikeres
    echo "<p>Sikeres regisztráció!</p>";
    session_start();
    echo session_id() . "<br/>";
    $_SESSION["username"] = $_POST[$felhasznalonev];    // egyszerű adatok tárolása a $_SESSION szuperglobális tömbben
    $_SESSION["birthDate"] = $_POST[$szuletesiDatum];

    $_SESSION["user"] = ["username" => $_POST[$felhasznalonev], "birthDate" => $_POST[$szuletesiDatum]]; // természetesen összetett adatok is tárolhatók a $_SESSION-ben

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