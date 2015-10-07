<?php 
	include('template/header.php'); 
		

	function db_to_date($data = false) {
		if(!$data) return false;

		$data = strtotime($data);
		$rs = 'วันที่ '.date('d/m/', $data).(date('Y', $data)+543).' เวลา '.date('H:i', $data);
		return $rs;
	}
?>
		<div class='row'>
			<div class='col-md-12'>
				<div class='col-md-8 col-md-offset-2'>
					<div style='display:inline-block; width:100%; min-height:750px; background:#fff; padding:30px;'>
						<h4 style='margin:0;'>ข้อมูลสัญญา</h4>
						<div style='color:#aaa;'>เจ้าหน้าที่ดูแลระบบ</div>
						<hr style='margin:20px 0; margin-top:5px;'>
						<div style='padding:20px; padding-top:10px; background:#eee; margin:10px 0; border:solid 1px #aaa; margin-bottom:25px;'>
							<div style='font-weight:bold;'>ค้นหา</div>
							<div>เลขที่สัญญา : <input type='text' placeholder='เลขที่สัญญา' class='form-control' style="display:inline-block; width:250px;"></div>
							<div>เลขประจาตัวผู้เสียภาษี : <input type='text' placeholder='เลขประจาตัวผู้เสียภาษี' class='form-control' style="display:inline-block; width:300px;"></div>
							<div>ชื่อผู้ประกอบการ : <input type='text' placeholder='เลขประจาตัวผู้เสียภาษี' class='form-control' style="display:inline-block; width:350px;"></div>

							<div class="div_btn_search">
								<a href='#Search' class='btn btn-inverse' style='padding:6px; margin-bottom:5px;'><i class=""></i>ค้นหา</a>
							</div>
						</div>
						
						<div class='tableLayout list'>
							<div class='header'>
								<div class="text-center" style="width:50px;">#</div>
								<div style='width:200px;'>วันที่ร้องเรียน</div>
								<div>เรื่องร้องเรียน</div>
								<div style='width:120px;'>สถานะ</div>
								<div>การปรับปรุงข้อมูล</div>
								<div style='width:160px;'>
									<?php 
										if(@$_GET['p'] != 'admin') {
											echo "<a href='pComplain.php' class='btn' style='background:#0D7D21; color:#fff; padding:5px 10px; display:inline-block; font-family:THSarabunNew;'><span style='font-size:20px;'>เขียนคำร้องเรียน</span></a>";
										}
									?>
									
								</div>
							</div>


							<?php 
								$dataList = array(
									array('2015-09-10 22:49:12', 'เรื่องร้องเรียน 4', '1', '2015-09-10 22:49:12', 'นาย ประชาชน ', 'ทำรายการยื่นคำร้อง "เรื่องร้องเรียน 4"', 4),
									array('2015-08-24 19:57:28', 'เรื่องร้องเรียน 3', '2', '2015-09-26 10:19:54', 'จนท. ศูนย์ดำรงธรรม', 'ตั้งคณะกรรมการสอบสวน', 3),
									array('2015-07-12 09:23:34', 'เรื่องร้องเรียน 2', '3', '2015-08-25 13:22:59', 'จนท. ศูนย์ดำรงธรรม', 'สิ้นสุดกระบวนการสอบสวน', 2),
									array('2015-06-01 22:24:20', 'เรื่องร้องเรียน 1', '1', '2015-06-01 22:24:20', 'นาย ประชาชน ', 'ทำรายการยื่นคำร้อง "เรื่องร้องเรียน 1"', 1),
								);

								$statusText = array('', 'ยื่นคำร้อง', 'กำลังดำเนินการ', 'สิ้นสุดการดำเนินการ');
								$statusClass = array('', 'warning', 'primary', 'success');

								for($i=0; $i<5; $i++) {
									// echo rand(24,30);
									// echo '<br>';
								}

								foreach($dataList as $item) {
									echo '<div>';
										echo '<div class="text-center">'.((empty($no))?$no = 1:++$no).'</div>';
										echo '<div style="font-size:20px;">'.db_to_date($item[0]).'</div>';
										echo '<div>'.$item[1].'</div>';
										echo '<div><span class="label label-'.$statusClass[$item[2]].'" style="display:inline-block; min-width:110px; padding:3px 10px; padding-top:7px;">'.$statusText[$item[2]].'</span></div>';
										echo '<div style="font-size:20px;">';
											echo '<div style="padding:0px 0px;">'.db_to_date($item[3]).'</div>';
											echo '<div style="padding:0px 0px;"><span style="font-weight:bold;">โดย:</span> '.$item[4].'</div>';
											echo '<div><span style="font-weight:bold;">รายละเอียด: </span>'.$item[5].'</div>';
										echo '</div>';
										echo '<div>';
											echo '<a href="pComplain.php?p='.@$_GET['p'].'&id='.$item[6].'" class="btn btn-sm" style="background:#4A89DC; color:#fff;">รายละเอียด</a>';
										echo '</div>';
									echo '</div>';
								}
							?>
									
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<br>
		
<?php include('template/footer.php'); ?>