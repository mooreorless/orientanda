<?php include '../controllers/employee.ctrl.php'; ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Orientanda - Employees</title>
    <link rel="stylesheet" href="//storage.googleapis.com/code.getmdl.io/1.0.1/material.teal-red.min.css" />
    <script src="//storage.googleapis.com/code.getmdl.io/1.0.1/material.min.js"></script>

    <link rel="stylesheet" href="../css/style.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <style>
      #profile {width: 100px; height: 100px; border-radius: 50%;}
      a {text-decoration: none;}
      #employee { padding: 5%; border-top: 1px solid rgba(0, 0, 0, .3); text-align: center;}
      #employee > * { display: inline-block; padding: .5rem; }
    </style>
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
