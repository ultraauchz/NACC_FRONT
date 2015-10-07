<title>สำนักงานคณะกรรมการป้องกันและปรายปรามการทุจริตแห่งชาติ</title>

	<link rel="shortcut icon" href="media/images/logo.png" /> 

    <!-- JQuery -->
    <script src="media/js/jquery.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="media/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- style css -->
	<link rel="stylesheet" href="media/css/style.css">

	<!-- timeline css -->
	<link rel="stylesheet" href="media/css/timeline.css">

	<link href="media/css/font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- Optional theme -->
	
    
	<!-- Latest compiled and minified JavaScript -->
	<script src="media/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<!-- Bootstrap plugin (flat design) -->
	<link href="media/Flat-UI-master/dist/css/flat-ui.css" rel="stylesheet">
    <link href="media/Flat-UI-master/docs/assets/css/demo.css" rel="stylesheet">

    <!-- include bootstrap-datepicker -->
	<link rel="stylesheet" type="text/css" href="media/js/bootstrap-datepicker/css/datepicker.css" />
	<script type="text/javascript" src="media/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="media/js/bootstrap-datepicker/js/bootstrap-datepicker-thai.js"></script>
	<script type="text/javascript" src="media/js/bootstrap-datepicker/js/locales/bootstrap-datepicker.th.js" charset="UTF-8"></script>

	<!-- Color box loading -->
	<link rel="stylesheet" href="media/js/colorbox/colorbox.css" />
	<script src='media/js/colorbox/jquery.colorbox-min.js'></script>

	<style type="text/css">	
		@font-face {
			font-family:THSarabunNew;
			src:url(media/fonts/THSarabunNew/THSarabun.woff);
		}
		body {
			background:#eee;
			font-family:THSarabunNew;
			font-size:22px;
		}
		.logo {
			display:inline-block;
			width:90px;
			height:90px;
			background: url(media/images/logo.png) no-repeat center center; 
			  -webkit-background-size: cover;
			  -moz-background-size: cover;
			  -o-background-size: cover;
			  background-size: cover;
		}
		/*#19174F*/

		.thsarabun {
			font-family:THSarabunNew;
		}

		#sectorHeader {
			background: url(media/images/background2.png) no-repeat center center fixed; 
			  -webkit-background-size: cover;
			  -moz-background-size: cover;
			  -o-background-size: cover;
			  background-size: cover;
			  color:#fff;
			  font-weight:500;
			  font-size:40px;
			  padding:15px 0;
		}

		.btn {
			min-width:130px;
			font-size:20px;
			padding:5px;
			padding-bottom:2px;
		}

		.formList>div>div {
			margin-top:15px;
		}


		.nav.nav-tabs>li>a {
			font-size:17px;
		}


		.tableLayout {
			display:table;
			width:100%;
		}
			.tableLayout>div {
				display:table-row;

			}
				.tableLayout>div.header>div, .tableLayout.list>div.header:hover>div {
					background:#1A1750;
					color:#fff;
				}
				.tableLayout>div>div {
					display:table-cell;
					vertical-align:top;
					padding:10px;
				}
				.tableLayout>div>div:first-child {
					padding-left:0;
				}
				.tableLayout>div>div:last-child {
					padding-right:0;
				}
		.tableLayout.list>div>div {
			border-bottom:solid 1px #ddd;
		}

		.tableLayout.list>div:hover>div {
			background:#f8f8f8;
		}

	</style>

	<script type="text/javascript">
		function datepicker_(obj, start_date) {
			obj.datepicker("remove");
			if(!start_date) {
				obj.datepicker({language: "th-th",autoclose: true,clearBtn:true,todayHighlight:true,format:'dd/mm/yyyy'});
			} else {
				obj.datepicker({startDate:date_start, language: "th-th",autoclose: true,clearBtn:true,todayHighlight:true,format:'dd/mm/yyyy'});
				
				//set Default date (start);
				tmp = start_date.split('/');
				date_start = tmp[2]+tmp[1]+tmp[0];
				
				tmp = obj.val().split('/');
				date_end = tmp[2]+tmp[1]+tmp[0];
				if(date_start>date_end) {
					obj.val(start_date);
				}	
			}
			obj.attr("readonly", "readonly");
		}

		$(function(){
			// Bootstrap Datepicker
			datepicker_($('.datepicker'));

			$(".modal_fade").colorbox({width:"80%", height:"80%", inline:true});
		});
	</script>