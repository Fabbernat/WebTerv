<?php
/**Egy kis infó ehhez kapcsolódóan:
 * When you type “localhost” into a browser’s address bar, it refers to your own computer.
 * The IP address of your computer is 127.0.0.1
 */
// Ellenőrizzük a kapcsolatot
$conn = null;
if ($conn->connect_error) {
    die("Kapcsolódási hiba: " . $conn->connect_error);
}

// Ellenőrizzük, hogy be van-e jelentkezve a felhasználó (például a bejelentkezési adatokat tároljuk session változóban)
session_start();
if (!isset($_SESSION['bejelentkezve']) || $_SESSION['bejelentkezve'] !== true) {
    // A felhasználó nincs bejelentkezve, visszairányítjuk a bejelentkezési oldalra vagy hibát jelenítünk meg
    header("Location: bejelentkezes.php");
    exit;
}

// Ellenőrizzük, hogy POST kérés érkezett-e az űrlapról
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ellenőrizzük, hogy az űrlap mezői kitöltésre kerültek-e
    if (!empty($_POST['jelszo']) && !empty($_POST['szuletesi_datum']) && !empty($_POST['bemutatkozas'])) {
        // Ellenőrizzük, hogy a jelszó és a születési dátum érvényes formátumban van-e
        // Itt például a jelszónak legalább 6 karakter hosszúnak kell lennie, és a születési dátumnak dátum formátumban kell lennie
        $jelszo = $_POST['jelszo'];
        $szuletesiDatum = $_POST['szuletesi_datum'];
        $bemutatkozas = $_POST['bemutatkozas'];

        // Ellenőrizzük, hogy az új jelszó egyezik-e az eredeti jelszóval, ha azonos, hibát jelenítünk meg
        if ($jelszo === $_SESSION['jelszo']) {
            echo "Az új jelszó nem lehet azonos az eredeti jelszóval!";
            exit;
        }

        // Ellenőrizzük, hogy a születési dátum dátum formátumú-e, ha nem, hibát jelenítünk meg
        if (!strtotime($szuletesiDatum)) {
            echo "A születési dátum érvénytelen formátumban van!";
            exit;
        }
        // Ellenőrizzük, hogy az új bemutatkozás nem tartalmaz-e veszélyes karaktereket, ha tartalmaz, hibát jelenítünk meg
        if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $bemutatkozas)) {
            echo "Az új bemutatkozás nem tartalmazhat veszélyes karaktereket!";
            exit;
        }

        // Módosítjuk a felhasználói adatokat az adatbázisban
        $felhasznalo_id = $_SESSION['felhasznalo_id'];
        $sql = "UPDATE felhasznalok SET jelszo = ?, szuletesi_datum = ?, bemutatkozas = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $jelszo, $szuletesiDatum, $bemutatkozas, $felhasznalo_id);

        if ($stmt->execute()) {
            // Sikeres adatmódosítás
            echo "A felhasználói adatok módosítása sikeres volt!";
        } else {
            // Sikertelen adatmódosítás, hibát jelenítünk meg
            echo "Hiba történt a felhasználói adatok módosítása során: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    } else {
        // Hiányzó mezők esetén hibát jelenítünk meg
        echo "Minden mező kitöltése kötelező!";
    }
}
?>