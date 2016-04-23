<?php include "../controllers/search.ctrl.php" ?>
<head>
	<link rel="stylesheet" href="../css/style.css" media="screen" title="no title" charset="utf-8">
</head>

<body>
<div id ="container">
	<form>
		Name: <select id="namelist" name = "namelist" form="nameform">
				<option value ="" disabled="" selected="" hidden="">Name</option>
				<option value ="Bob">Bob</option>
				<option value ="Mark">Mark</option>
				<option value ="123456789">123456789101112</option>
			</select><br>
		Surname: <select id="surnamelist" name = "surnamelist" form="surnameform">
				<option value ="" disabled="" selected="" hidden="">Surname</option>
				<option value ="Johnson">Johnson</option>
				<option value ="Smith">Smith</option>
				<option value ="123456789">123456789101112</option>
				</select><br>
		Role: <select id="rolelist" name = "rolelist" form="roleform">
				<option value ="" disabled="" selected="" hidden="">Role</option>
				<option value ="sales manager">Sales Manager</option>
				<option value ="boss">Boss</option>
				<option value ="123456789">123456789101112</option>
				</select><br>

	</form>
</div>
</body>
