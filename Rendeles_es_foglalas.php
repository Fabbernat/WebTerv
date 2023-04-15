<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <title>Aczélzivatar halászcsárda</title>
  <link rel="stylesheet" href="css/Style.css">
  <link rel="icon" type="image/png" href="img/Kormanykerek-350.png">
  <style>
    .hide {
      display: none;
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

<h1 class="smaller_header"> ACZÉLZIVATAR HALÁSZCSÁRDA <span class="alcim"> <span class="year"><br>Alapítva: 1888</span></span></h1>

<div class="container">
  <div class="block" id="block1">Rendelés</div>
  <div class="block" id="block2">Foglalás</div>

</div>

<div id="container">
  <button id="close-btn" onclick="closeIframes()" class="hide">Bezárás</button>
  <iframe class="iframe hide" id="iframe1" src="Rendeles.php"></iframe>
  <iframe class="iframe hide" id="iframe2" src="Foglalas.php"></iframe>
</div>


<script>
  const block1 = document.getElementById("block1");
  const block2 = document.getElementById("block2");
  const iframe1 = document.getElementById("iframe1");
  const iframe2 = document.getElementById("iframe2");
  const closeBtn = document.getElementById("close-btn");

  block1.addEventListener('click', () => {
    iframe1.classList.toggle('show');
    iframe2.classList.remove('show');
    closeBtn.classList.toggle('hide');
  });

  block2.addEventListener('click', () => {
    iframe2.classList.toggle('show');
    iframe1.classList.remove('show');
    closeBtn.classList.toggle('hide');
  });

  closeBtn.addEventListener('click', () => {
    iframe1.classList.remove('show');
    iframe2.classList.remove('show');
    closeBtn.classList.toggle('hide');
  });
</script>

</body>
</html>
