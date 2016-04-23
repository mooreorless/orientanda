<?php include "../controllers/search.ctrl.php" ?>

<head>
	<link rel="stylesheet" href="//storage.googleapis.com/code.getmdl.io/1.0.1/material.teal-red.min.css" />
	<script src="//storage.googleapis.com/code.getmdl.io/1.0.1/material.min.js"></script>

	<meta charset="utf-8">
  <title>Orientanda - Search </title>
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

			<div class="mdl-layout mdl-js-layout mdl-color--grey-100">
				<main class="mdl-layout__content">
				<form action="#">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
						<label class="mdl-button mdl-js-button mdl-button--icon" for="site-search">
							<i class="material-icons">search</i>
						</label>
						<div class="mdl-textfield__expandable-holder">
							<input class="mdl-textfield__input" type="search" id="site-search" />
							<label class="mdl-textfield__label" for="site-search">Search</label>
						</div>
					</div>
				</form>
			</main>
			</div>
	    </div>
	  </div>
	</body>
