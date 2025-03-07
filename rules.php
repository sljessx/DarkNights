<?php
// rules.php
$uuid = $_GET['uuid'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dark Nights SL - Rules</title>
  <link rel="stylesheet" href="common.css">
  <style>
    html, body {
      background: #000; 
      color: #fff;
    }
    .content {
      max-width: 900px;
      margin: 50px auto;
      text-align: left;
      padding: 30px;
      font-size: 27px;
      background: #000; 
    }
    h1 {
      font-size: 48px;
      text-align: center;
      margin-bottom: 30px;
    }
    ol {
      font-size: 36px;
      line-height: 1.5;
      padding-left: 40px;
    }
    li {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <!-- Common Header -->
  <div class="custom-header-bar">
    <div class="site-name">Dark Nights SL</div>
    <div class="nav">
      <button type="button" class="nav-button" onclick="window.location.href='home.php<?php echo ($uuid ? '?uuid=' . urlencode($uuid) : ''); ?>'">Home</button>
      <button type="button" class="nav-button" onclick="window.location.href='index.php?page=profile&uuid=<?php echo urlencode($uuid); ?>'">Profile</button>
      <button type="button" class="nav-button" onclick="window.location.href='search.php<?php echo ($uuid ? '?uuid=' . urlencode($uuid) : ''); ?>'">Search</button>
      <button type="button" class="nav-button" onclick="window.location.href='messages.php<?php echo ($uuid ? '?uuid=' . urlencode($uuid) : ''); ?>'">Messages</button>
      <button type="button" class="nav-button" onclick="window.location.href='rules.php<?php echo ($uuid ? '?uuid=' . urlencode($uuid) : ''); ?>'">Rules</button>
    </div>
  </div>

  <!-- Rules Content -->
  <div class="content">
    <h1>Rules</h1>
    <ol>
      <li>This is not a prude app like Thundr. Feel free to be as naughty or explicit as you desire.</li>
      <li>This is an escorting app. Attempts to negotiate free sex will result in an immediate ban.</li>
      <li>Do not use this app to advertise your own business or sim.</li>
      <li>Do not use this app to sell products that are not related to sex or sex‑related acts.</li>
      <li>Do not harass other users.</li>
      <li>Do not engage in racist, homophobic, or transphobic behavior.</li>
    </ol>
  </div>
</body>
</html>
