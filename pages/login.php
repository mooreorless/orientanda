<?php include '../controllers/login.ctrl.php'; ?>
<head>
  <meta charset="utf-8">
  <title>Orientanda - Login</title>
  <link rel="stylesheet" href="../css/style.css">
  <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
  <div class="container">
    <div class="branding">
      <div class="brand-group">
        <p id="logo"></p>
        <h1>orien<span>tanda</span></h1>
      </div>
      <button onclick="window.location.href=<?php echo $loginUrl; ?>" name="Login" id="login-btn">Login</button>
    </div>
  </div>
</body>
