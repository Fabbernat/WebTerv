<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <title>Aczélzivatar halászcsárda</title>
  <link rel="stylesheet" href="css/Rendeles_es_foglalas.css">
  <link rel="icon" type="image/png" href="img/Kormanykerek-350.png">
  <style>
    .show {
      display: block;
    }
    .hide {
      display: none;
    }
  </style>
</head>
<body>
<div class="topnav">
  <a href="index.php">Főoldal</a>
  <a class="active"  href="Rendeles_es_foglalas.php">Rendelés, Foglalás</a>
  <a href="Szemelyzet.php">Legénységünk</a>
  <a href="Terkep.php">Térkép</a>
  <a href="Tortenetunk.php">Történetünk</a>
  <a href="Vendegkonyv.php">Vendégkönyv</a>
  <a href="Bejelentkezes.php" style="float:right">Bejelentkezés</a>
</div>

<h1 class="header" style="font-size: xx-large"> ACZÉLZIVATAR HALÁSZCSÁRDA <span class="alcim"> <span class="year"><br>Alapítva: 1888</span></span></h1>

<div class="container">
  <div class="block" id="block1">Rendelés</div>
  <div class="block" id="block2">Foglalás</div>

</div>

<div id="container">
  <button id="close-btn" onclick="closeIframes()" class="hide">Bezárás</button>
  <iframe class="iframe" id="iframe1" src="Rendeles.php" class="hide"></iframe>
  <iframe class="iframe" id="iframe2" src="Foglalas.php" class="hide"></iframe>
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
