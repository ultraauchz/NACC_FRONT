<?php
	include('template/header_login.php');
    if (@$_GET['q'] == 'form') {
        include('modules/standard_price/form.php');
    }else{
		include('modules/standard_price/list.php');
	}

	include('template/footer.php');
?> 