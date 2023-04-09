<!doctype html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <title>Aczélzivatar halászcsárda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/Rendeles_es_foglalas.css">
    <link rel="stylesheet" href="css/Bejelentkezes.css">
    <link rel="icon" type="image/png" href="img/Kormanykerek-350.png">
</head>

<body>
<div class="topnav">
    <a href="index.php">Főoldal</a>
    <a href="Rendeles_es_foglalas.php">Rendelés, Foglalás</a>
    <a href="Szemelyzet.php">Legénységünk</a>
    <a href="Terkep.php">Térkép</a>
    <a href="Tortenetunk.php">Történetünk</a>
    <a href="Vendegkonyv.php">Vendégkönyv</a>
    <a class="active" href="Bejelentkezes.php" style="float:right">Bejelentkezés</a>
</div>

<section class="alsoSor">

    <h1>Regisztráció</h1>

    <form method="post" onsubmit="return validateForm()">
        <label for="full-name">Teljes név:</label>
        <input type="text" id="full-name" name="full-name" required><br><br>

        <label for="email">Email cím:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone-number">Telefonszám:</label>
        <input type="tel" id="phone-number" name="phone-number" pattern="^\+[0-9]{1,11}$" required><br><br>


        <label for="address">Lakcím:</label>
        <textarea id="address" name="address" required></textarea><br><br>

        <label for="password">Jelszó:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="confirm-password">Jelszó megerősítése:</label>
        <input type="password" id="confirm-password" name="confirm-password" required><br><br>

        <input type="reset" value="Beírt értékek törlése" style="padding: 10px">
        <input type="submit" value="Regisztráció">
    </form>

    <form method="POST" onsubmit="return validateForm()">
        <fieldset>
            <legend>Bejelentkezés</legend>
            <label for="email">E-mail cím:</label>
            <input type="email" id="email" name="email"> <br><br>
            <label for="password">Jelszó:</label>
            <input type="password" id="password" name="passwd"> <br><br>
            <input type="reset" value="Beírt értékek törlése" style="padding: 10px">
            <input type="submit" value="Bejelentkezés">
        </fieldset>
    </form>
</section>
<?php
// adatbázis kapcsolódás
$servername = "localhost";
$username = "felhasznalonev";
$password = "jelszo";
$dbname = "adatbazis_neve";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kapcsolódási hiba: " . $conn->connect_error);
}

// űrlap adatok ellenőrzése és feldolgozása
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = test_input($_POST["full-name"]);
    $email = test_input($_POST["email"]);
    $phone_number = test_input($_POST["phone-number"]);
    $address = test_input($_POST["address"]);
    $password = test_input($_POST["password"]);
    $confirm_password = test_input($_POST["confirm-password"]);

// ellenőrizzük, hogy a jelszavak egyeznek-e
    if($password != $confirm_password) {
        echo "A két jelszó nem egyezik meg!";
    }
    else {
// ellenőrizzük, hogy az email cím még nem foglalt-e
        $check_email = "SELECT * FROM felhasznalok WHERE email='$email'";
        $result = $conn->query($check_email);
        if($result->num_rows == 0) {
// adatok mentése az adatbázisba
            $password = password_hash(test_input($_POST["password"]), PASSWORD_DEFAULT);
            $sql = "INSERT INTO felhasznalok (full_name, email, phone_number, address, password)
VALUES ('$full_name', '$email', '$phone_number', '$address', '$password')";
            if(password_verify($_POST["password"], $password)) {
                echo "Sikeres bejelentkezés!";
            } else {
                echo "Helytelen jelszót adott meg!";
            }

            if ($conn->query($sql) === TRUE) {
                echo "Sikeres regisztráció!";
            } else {
                echo "Hiba: " . $sql . "<br>" . $conn->error;
            }
        }
        else {
            echo "Ez az email cím már foglalt!";
        }
    }

// adatbázis kapcsolat bezárása
    $conn->close();
}

// adatok ellenőrzése és formázása
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
</body>

</html>
