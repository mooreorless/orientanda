<?php include "../controllers/search.ctrl.php" ?>
<head>
	<link rel="stylesheet" href="../css/style.css" media="screen" title="no title" charset="utf-8">
</head>

<body>
  <div id ="container">
  	<form>
  		Name: <select id="nameList" name = "namelist" form="nameform">
  				<option value ="-">-</option>
  				<option value ="bob">Bob</option>
  				<option value ="mark">Mark</option>
  				<option value ="123456789">123456789101112</option>
  			</select><br>
  		Role: <select id="roleList" name = "rolelist" form="roleform">
  				<option value ="-">-</option>
  				<option value ="sales manager">Sales Manager</option>
  				<option value ="boss">Boss</option>
  				<option value ="123456789">123456789101112</option>
  				</select><br>
  	</form>
  </div>

	<script src="../js/search.js" type="text/javascript"></script>
  <script type="text/javascript"> importData('<?php echo $data; ?>') </script>
</body>
