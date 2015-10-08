<!DOCTYPE html>
<html>
<head>
	<title>สำนักงานคณะกรรมการป้องกันและปรายปรามการทุจริตแห่งชาติ</title>

	<link rel="shortcut icon" href="media/images/logo.png" /> 

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="media/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	

	<!-- Latest compiled and minified JavaScript -->
	<script src="media/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<!-- Bootstrap plugin (flat design) -->
	<link href="media/Flat-UI-master/dist/css/flat-ui.css" rel="stylesheet">
    <link href="media/Flat-UI-master/docs/assets/css/demo.css" rel="stylesheet">

	<style type="text/css">	
		@font-face {
			font-family:THSarabunNew;
			src:url(media/fonts/THSarabunNew/THSarabun.woff);
		}
		body {
			 background: url(media/images/background2.png) no-repeat center center fixed; 
			  -webkit-background-size: cover;
			  -moz-background-size: cover;
			  -o-background-size: cover;
			  background-size: cover;

			  color:#fff;
		}

		.thsarabun {
			font-family:THSarabunNew;
		}

		.logo {
			display:inline-block;
			width:270px;
			height:320px;
			background: url(media/images/logo.png) no-repeat center center; 
			  -webkit-background-size: cover;
			  -moz-background-size: cover;
			  -o-background-size: cover;
			  background-size: cover;
		}

		.panel {
			display:inline-block;
		}

	</style>
</head>
<body>
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-md-4 col-md-offset-4 text-center' style='padding:70px 0; padding-bottom:50px;'>
				<span class='logo'></span>	
				<div class='thsarabun' style='font-size:30px;'>สำนักงานคณะกรรมการป้องกันและปรายปรามการทุจริตแห่งชาติ</div>
				<div class='thsarabun' style='font-size:25px;'>ระบบกำกับดูแลการจัดซื้อจัดจ้างภาครัฐ</div>
				<div class='thsarabun' style='font-size:25px;'>(Government Procurement System)</div>
				<div class='thsarabun' style='font-size:25px;'>สำหรับหน่วยงานราชการ, คู่สัญญาภายในประเภท และคู่สัญญาต่างประเทศ</div>
			</div>
		</div>
		
		<div class='row'>
			<div class='col-md-2 col-md-offset-5 text-center'>
				<div class="form-group">
	            	<input type="text" name='username' value="" placeholder="Username" class="form-control" style='background:none; color:#fff;' autofocus>
	            	<input type="password" value="" placeholder="Password" class="form-control" style='background:none; color:#fff; margin-top:10px;'>
	          	</div>
		    	<a href="home_login.php" id='btnSignin' class="btn btn-block btn-lg btn-inverse">Signin</a>

		    	<div style="padding:20px 0;" class='text-left'>
		    		<a href='#ForgotPassword' class='small' style='color:#aaa;'>Forgot Password</a> | <a href='register.php' class='small' style='color:#aaa;'>Register</a>
		    	</div>
		    	
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$('#btnSignin').on('click', function(){
			if($('[name=username]').val() == 'admin') {
				window.location=$(this).attr('href')+"?p=admin";
				return false;
			}
		});
	</script>
</body>
</html>