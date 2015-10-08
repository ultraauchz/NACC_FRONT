<?php
	include('template/header.php');
    if (@$_GET['q'] == 'form') {
        include('modules/member/form.php');
    }else if(@$_GET['q']=='success'){
        include 'modules/member/success.php';
    }else{
		include('modules/member/list.php');
	}

	include('template/footer.php');
?>