<div class='row'>
	<div class='col-md-12'>
		<div class='col-md-10 col-md-offset-1'>
			<div style='display:inline-block; width:100%; min-height:750px; background:#fff; padding:30px;'>
				<h4 style='margin:0;'>ข้อมูลคู่สัญญา</h4>
				<div style='color:#aaa;'>เจ้าหน้าที่ดูแลระบบ</div>
				<hr style='margin:20px 0; margin-top:5px;'>
				<div style='padding:20px; padding-top:10px; background:#eee; margin:10px 0; border:solid 1px #aaa; margin-bottom:25px;'>
					<div style='font-weight:bold;'>ค้นหา</div>
					<form class="form-horizontal" action="#" method="post">
						<div class="div_index_search col-sm-12">
							<div class="col-sm-2" style="line-height: 1;">เลขประจำตัวผู้เสียภาษี/<br />เลขประจำตัวประชาชน : </div> 
							<div class="col-sm-3">
								<input type='text' placeholder='เลขประจาตัวผู้เสียภาษี' class='form-control' style="display:inline-block; width:300px;">
							</div>
						</div>
						<div class="div_index_search col-sm-12">
							<div class="col-sm-2">ชื่อผู้ประกอบการ : </div>
							<div class="col-sm-4">
								<input type='text' placeholder='เลขประจาตัวผู้เสียภาษี' class='form-control' style="display:inline-block;">
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
						<div style="width:160px">เลขประจำตัวผู้เสียภาษี/<br />เลขประจำตัวประชาชน</div>
						<div style="width:260px">ชื่อคู่สัญญา</div>
						<div>ที่อยู่</div>
						<div style="width:160px">เบอร์โทร</div>
						<div style='width:160px;' class="text-center">
							<a href='contractparty.php?p=view' class='btn' style='background:#0D7D21; color:#fff; padding:5px 10px; display:inline-block; font-family:THSarabunNew;'>
								<span style='font-size:20px;'>เพิ่ม</span>
							</a>
						</div>
					</div>


					<?php 
						$dataList = array(
										array('1100701061554', 'ชื่อคู่สัญญา4 นามสมมุติ', 'กทม.', '-', 4),
										array('1100705648690', 'ชื่อคู่สัญญา3 นามสมมุติ', 'กทม.', '026569999', 3),
										array('1100705001221', 'ชื่อคู่สัญญา2 นามสมมุติ', 'นนทบุรี', '028564492', 2),
										array('1055801061554', 'ชื่อคู่สัญญา1 นามสมมุติ', 'ปทุมธานี ', '025556666', 1),
										array('', '', '', '', 10),
										array('', '', '', '', 9),
										array('', '', '', '', 8),
										array('', '', '', '', 7),
										array('', '', '', '', 6),
										array('', '', '', '', 5),
									);

						foreach($dataList as $item) {
							echo '<div>';
								echo '<div class="text-center">'.((empty($no))?$no = 1:++$no).'</div>';
								echo '<div>'.$item[0].'</div>';
								echo '<div>'.$item[1].'</div>';
								echo '<div>'.$item[2].'</div>';
								echo '<div>'.$item[3].'</div>';
								echo '<div class="text-center">';
									echo '<a href="contractparty.php?p=view&id='.$item[4].'" class="btn btn-sm btn-view"></a>';
									echo '<a href="contractparty.php?p=edit&id='.$item[4].'" class="btn btn-sm btn-edit"></a>';
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