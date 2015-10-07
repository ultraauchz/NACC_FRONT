<?php
	include('template/header.php');

	if (empty($_GET['p']) || $_GET['p'] == 'list') {
		include('modules/contractparty/list.php');
	} else if ($_GET['p'] == 'view' || $_GET['p'] == 'edit') {
		include('modules/contractparty/form.php');
	}

	include('template/footer.php');
?>