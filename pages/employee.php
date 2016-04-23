<?php include '../controllers/employee.ctrl.php'; ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Orientanda - Employees</title>
    <link rel="stylesheet" href="//storage.googleapis.com/code.getmdl.io/1.0.1/material.teal-red.min.css" />
    <script src="//storage.googleapis.com/code.getmdl.io/1.0.1/material.min.js"></script>

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
        <div id='employee'></div>
      </div>
    </div>
    <script type="text/javascript" src='../js/employee.js'></script>
    <script type="text/javascript">
      importData('<?php echo $user;?>')
    </script>
  </body>
</html>
