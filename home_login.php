<?php
include ('template/header_login.php');
?>
<script src="media/Highcharts/js/highcharts.js"></script>
<script src="media/Highcharts/js/modules/exporting.js"></script>
<script type="text/javascript">
	$(function() {

		// Radialize the colors
		Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function(color) {
			return {
				radialGradient : {
					cx : 0.5,
					cy : 0.3,
					r : 0.7
				},
				stops : [[0, color], [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
				]
			};
		});

		// Build the chart
		$('#contract-chart').highcharts({
			chart : {
				plotBackgroundColor : null,
				plotBorderWidth : null,
				plotShadow : false
			},
			title : {
				text : 'จำนวนข้อมูลคู่สัญญาที่มีอยู่ในระบบ ณ ปัจจุบัน'
			},
			tooltip : {
				pointFormat : '{series.name}: <b>{point.percentage}%</b>',
				percentageDecimals : 1
			},
			plotOptions : {
				pie : {
					allowPointSelect : true,
					cursor : 'pointer',
					dataLabels : {
						enabled : true,
						color : '#000000',
						connectorColor : '#000000',
						formatter : function() {
							return '<b>' + this.point.name + '</b>: ' + this.percentage + ' % ';
						}
					}
				}
			},
			series : [{
				type : 'pie',
				name : 'แบ่งตามสถานะคู่สัญญา',
				data : [['ปกติ', 900], ['ไม่ส่งแบบ บช.1 เกิน 100 วัน', 20], ['ไม่ส่งแบบ บช.1 เกิน 120 วัน', 50], ['ไม่ส่งแบบ บช.1 เกิน 150 วัน (ยังไม่ติด Black List)', 10], ['ไม่ส่งแบบ บช.1 เกิน 150 วัน (ติด Black List)', 20]]
			}]
		});
	});

</script>
<div class='row'>
	<div class='col-md-12'>
		<div class='col-md-10 col-md-offset-1'>
			<div style='display:inline-block; width:100%; min-height:750px; background:#fff; padding:30px;'>
				<h4 style='margin:0;'>ยินดีต้อนรับ</h4>
				<hr style='margin:20px 0; margin-top:5px;'>
				<ul class="nav nav-tabs" role="tablist">
					<li class="active">
						<a href="#home" role="tab" data-toggle="tab"> <icon class="fa fa-home"></icon> ข้อมูลคู่สัญญา </a>
					</li>
					<li>
						<a href="#profile" role="tab" data-toggle="tab"> <i class="fa fa-user"></i> ข้อมูลราคากลาง </a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade active in" id="home">
						<?php include "modules/home/tab1.php"?>
					</div>
					<div class="tab-pane fade" id="profile">
						<?php include "modules/home/tab2.php"?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<?php
include ('template/footer.php');
?>