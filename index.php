<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Fábián Bernát & Szabó Zalán">
  <meta name="description" content="Ez a halászcsárda weboldala">
  <meta name="keywords" content="étterem, restaurant, halászcsárda, fish soup">
  <title>Aczélzivatar halászcsárda</title>
  <link rel="icon" type="image/png" href="img/Kormanykerek-350.png">
  <link rel="stylesheet" href="css/Index.css">
  <link rel="stylesheet" href="css/Style.css">

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

<h1 class="header">ACZÉLZIVATAR HALÁSZCSÁRDA <span class="alcim"> <span class="year"><br>Alapítva: 1888</span></span>
</h1>

<div class="alsoSor">
  <h2 class="header2">Köszöntünk az oldalunkon</h2>
  <div class="hajocska">
    <img class="kepAVegen" src="img/hajocska.png" alt="illusztáció">
  </div>

</div>

<div class="alsoSor">
  <h6 class="csakfont" style="font-size: medium">Elérhetőség:</h6>
  <pre style="font-size: large">
  E-mail: h259147@stud.u-szeged.hu
  Telefon: +36308375338
  Facebook:
  Instagram:
  Twitter:
  Github:
  Discord:
  Coospace:
  </pre>
  Fabbernat & Magyarkebab©
  <footer class="header2">
    kérlek válaszd ki melyik oldalt szeretnéd megtekinteni <a
          class="fennGomb" href="#">Fent</a>!
  </footer>
</div>
</body>

</html>
