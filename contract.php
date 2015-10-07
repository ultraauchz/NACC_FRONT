<?php
	include('template/header.php');

	if (empty($_GET['p']) || $_GET['p'] == 'list') {
		include('modules/contract/list.php');
	} else if ($_GET['p'] == 'view' || $_GET['p'] == 'edit') {
		include('modules/contract/form.php');
	}

	include('template/footer.php');
?>