<div class='row'>
	<div class='col-md-12'>
		<div class='col-md-10 col-md-offset-1'>
			<div style='display:inline-block; width:100%; min-height:750px; background:#fff; padding:30px;'>
				<h4 style='margin:0;'>ข้อมูลสัญญา</h4>
				<div style='color:#aaa;'>เจ้าหน้าที่ดูแลระบบ</div>
				<hr style='margin:20px 0; margin-top:5px;'>
				<div style='padding:20px; padding-top:10px; background:#eee; margin:10px 0; border:solid 1px #aaa; margin-bottom:25px;'>
					<div style='font-weight:bold;'>ค้นหา</div>
					<form class="form-horizontal" action="#" method="post">
						<div class="col-sm-12">
							<div class="col-sm-2">เลขที่สัญญา : </div>
							<div class="col-sm-2">
								<input type='text' placeholder='เลขที่สัญญา' class='form-control' style="display:inline-block;">
							</div>
						</div>
						<div class="div_index_search col-sm-12">
							<div class="col-sm-2">เลขประจาตัวผู้เสียภาษี : </div> 
							<div class="col-sm-3">
								<input type='text' placeholder='เลขประจาตัวผู้เสียภาษี' class='form-control' style="display:inline-block;">
							</div>
						</div>
						<div class="div_index_search col-sm-12">
							<div class="col-sm-2">ชื่อผู้ประกอบการ : </div>
							<div class="col-sm-4">
								<input type='text' placeholder='ชื่อผู้ประกอบการ' class='form-control' style="display:inline-block;">
							</div>
						</div>
						<div class="div_index_search col-sm-12">
							<div class="col-sm-2">ชื่อสัญญา : </div>
							<div class="col-sm-4">
								<input type='text' placeholder='ชื่อสัญญา' class='form-control' style="display:inline-block;">
							</div>
						</div>
						<div class="div_index_search col-sm-12">
							<div class="col-sm-2">ตั้งแต่วันที่ทำสัญญา :</div>
							<div class="col-sm-2">
								<div class='input-group' id="div_date_of_issue">
							      <input type="input" class="form-con form-control datepicker" id="datepicker_s" name="date_start" />
							      <span class="input-group-addon">
			                        <span class="glyphicon glyphicon-calendar"></span>
			                      </span>
			                    </div>
		                    </div>
		                    <div class="col-sm-2">ถึงวันที่ทำสัญญา :</div>
		                    <div class="col-sm-2">
								<div class='input-group' id="div_date_of_issue">
							      <input type="input" class="form-con form-control datepicker" id="datepicker_e" name="date_end" />
							      <span class="input-group-addon">
			                        <span class="glyphicon glyphicon-calendar"></span>
			                      </span>
			                    </div>
		                    </div>
						</div>

						<div class="div_btn_search">
							<button type="button" class='btn btn-inverse'>ค้นหา</button>
						</div>
					</form>
				</div>
				
				<?php include('template/pagination.php'); ?>

				<div class='tableLayout list'>
					<div class='header'>
						<div class="text-center" style="width:50px;">ลำดับ</div>
						<div style='width:160px;'>เลขที่สัญญา</div>
						<div style='width:160px;'>เลขที่คุมสัญญา</div>
						<div style='width:160px;'>เลขประจาตัวผู้เสียภาษี</div>
						<div>ชื่อคู่สัญญา</div>
						<div>ชื่อสัญญา</div>
						<div>วันที่ทาสัญญา</div>
						<div>มูลค่าสัญญา</div>
						<div style='width:160px;' class="text-center">
							<a href='contract.php?p=view' class='btn' style='background:#0D7D21; color:#fff; padding:5px 10px; display:inline-block; font-family:THSarabunNew;'>
								<span style='font-size:20px;'>เพิ่ม</span>
							</a>
						</div>
					</div>


					<?php 
						$dataList = array(
							array('2/2557', 'N555000023', '1100701061554', 'ชื่อคู่สัญญา4 นามสมมุติ', '1/10/2557', '2,000,000,000.00', 4, 'ชื่อสัญญา4'),
							array('1/2557', 'N555000022', '1100705648690', 'ชื่อคู่สัญญา3 นามสมมุติ', '15/05/2557', '5,000,000.00', 3, 'ชื่อสัญญา3'),
							array('2/2556', 'N554000023', '1100705001221', 'ชื่อคู่สัญญา2 นามสมมุติ', '25/02/2556', '6,580,100.00', 2, 'ชื่อสัญญา2'),
							array('1/2556', 'N554000022', '1055801061554', 'ชื่อคู่สัญญา1 นามสมมุติ', '30/01/2256 ', '50,000.00', 1, 'ชื่อสัญญา1'),
							array('', '', '', '', '', '', 10),
							array('', '', '', '', '', '', 9),
							array('', '', '', '', '', '', 8),
							array('', '', '', '', '', '', 7),
							array('', '', '', '', '', '', 6),
							array('', '', '', '', '', '', 5)
						);

						foreach($dataList as $item) {
							echo '<div>';
								echo '<div class="text-center">'.((empty($no))?$no = 1:++$no).'</div>';
								echo '<div>'.$item[0].'</div>';
								echo '<div>'.$item[1].'</div>';
								echo '<div>'.$item[2].'</div>';
								echo '<div>'.$item[3].'</div>';
								echo '<div>'.$item[7].'</div>';
								echo '<div>'.$item[4].'</div>';
								echo '<div>'.$item[5].'</div>';
								echo '<div class="text-center">';
									echo '<a href="contract.php?p=view&id='.$item[6].'" class="btn btn-sm btn-view"></a>';
									echo '<a href="contract.php?p=edit&id='.$item[6].'" class="btn btn-sm btn-edit"></a>';
									echo '<a href="#" class="btn btn-sm btn-delete"></a>';
								echo '</div>';
							echo '</div>';
						}
					?>
							
				</div>
				
				<?php include('template/pagination.php'); ?>

			</div>
		</div>
	</div>
</div>
<br>
<script language='javascript'>
	$(function(){
		$('[name=date_start]').on('change', function(){
			date_start = $('[name=date_start]').val();
			datepicker_($('[name=date_end]'), $('[name=date_start]').val());
		});
		
		$('[name=date_end]').on('change', function(){
			date_end = $('[name=date_end]').val();
			datepicker_($('[name=date_start]'), $('[name=date_start]').val(), $('[name=date_end]').val());
		});
	});
</script>