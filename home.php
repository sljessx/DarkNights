<?php
$uuid = $_GET['uuid'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dark Nights SL - Home</title>
  <link rel="stylesheet" href="common.css">
  <style>
    html, body {
      background: #000; /* Black background */
      color: #fff;     /* White text */
    }
    .home-content {
      max-width: 900px;
      margin: 50px auto;
      text-align: center;
    }
    .home-content h1 {
      font-size: 48px;
      margin-bottom: 20px;
    }
    .home-content p {
      font-size: 36px;
      margin-bottom: 30px;
    }
    .home-content img {
      display: block;
      margin: 0 auto 30px;
      max-width: 100%;
      height: auto;
    }
  </style>
</head>
<body>
  <?php include 'header.php'; ?>
  <div class="home-content">
    <h1>Welcome to Dark Nights SL</h1>
    <p>Brought to you by:</p>
    <img src="x-sisters.png" alt="x-sisters">
    <img src="sw.png" alt="sw">
  </div>
</body>
</html>
