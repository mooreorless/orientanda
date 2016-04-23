<?php include "../controllers/search.ctrl.php" ?>
<head>
	<style type="text/css"> body {font-family:Arial, Sans-Serif;} #container {width:300px; margin:250 auto;} form label {display:inline-block; width:140px;}
   form input[type="text"], form input[type="password"], form input[type="email"] {width:160px;} form .line {clear:both;}
   form .line.submit {text-align:right;} </style>
</head>

<body>
<div id ="container">
	<form>
		Name: <select id="namelist" name = "namelist" form="nameform">
				<option value ="-">-</option>
				<option value ="bob jackson">Bob Jackson</option>
				<option value ="mark svensson">Mark Svensson</option>
				<option value ="123456789">123456789101112</option>
			</select><br>
		Role: <select id="rolelist" name = "rolelist" form="roleform">
				<option value ="-">-</option>
				<option value ="sales manager">Sales Manager</option>
				<option value ="boss">Boss</option>
				<option value ="123456789">123456789101112</option>
				</select><br>

	</form>
</div>



</body>
