<?php
	include('template/header_login.php');
    if (@$_GET['q'] == 'form') {
        include('modules/plan/form.php');
    }else{
		include('modules/plan/list.php');
	}

	include('template/footer.php');
?>