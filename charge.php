<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
  <title>QRCharge</title>

  <link rel="stylesheet" href="css/main.css" />
</head>
<body>
  <header>
    <div class="content">
      <h1>QRC<span>harge</h1>
      <h2>TEMPS RESTANT DE RECHARGE</h2>
      <div class="countdown">00 : 00 : 00 : 00</div>
      <h1 class="countdownDate"></h1>
    </div>
  </header>
  <script src="js/request.js"></script>
  <script src="js/main.js"></script>

  <?php
  
  include('config/session.php');
  include('navbar.php');
  ?>
</body>
</html>
