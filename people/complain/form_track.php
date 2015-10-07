<?php 
	function db_to_date($data = false) {
		if(!$data) return false;

		$data = strtotime($data);
		$rs = 'วันที่ '.date('d/m/', $data).(date('Y', $data)+543).' เวลา '.date('H:i', $data);
		return $rs;
	}


	$getValue = '';
	if(!empty($_GET)) {
	foreach($_GET as $key => $item) {
		$getValue .= (((empty($i))?$i=1:++$i) == 1)?'?':'&';
		$getValue .= $key.'='.$item;
	}	
	}


	$dataList[1] = array(
		array('2015-06-01 22:24:20', 'นาย ประชาชน ', 'ทำรายการยื่นคำร้อง "เรื่องร้องเรียน 1"')
	);

	$dataList[2] = array(
		array('2015-08-25 13:22:59', 'คณะกรรมการสอบสวน ', 'สิ้นสุดกระบวนการสอบสวน'),
		array('2015-08-20 19:57:28', 'จนท. ศูนย์ดำรงธรรม ', 'ตั้งคณะกรรมการสอบสวน'),
		array('2015-08-11 13:22:28', 'จนท. ศูนย์ดำรงธรรม ', 'อยู่ระหว่างขั้นตอนการรวบรวมหลักฐาน'),
		array('2015-07-16 09:36:28', 'จนท. ศูนย์ดำรงธรรม ', 'จนท. รับคำร้องและเปลี่ยนสถานะเป็น "กำลังดำเนินการ"'),
		array('2015-07-12 09:23:34', 'นาย ประชาชน ', 'ทำรายการยื่นคำร้อง "เรื่องร้องเรียน 3"'),
	);

	$dataList[3] = array(
		array('2015-09-26 10:19:54', 'จนท. ศูนย์ดำรงธรรม ', 'ตั้งคณะกรรมการสอบสวน'),
		array('2015-08-20 09:32:54', 'จนท. ศูนย์ดำรงธรรม ', 'จนท. รับคำร้องและเปลี่ยนสถานะเป็น "กำลังดำเนินการ"'),
		array('2015-08-24 19:57:28', 'นาย ประชาชน ', 'ทำรายการยื่นคำร้อง "เรื่องร้องเรียน 2"')
	);

	$dataList[4] = array(
		array('2015-09-10 22:49:12', 'นาย ประชาชน ', 'ทำรายการยื่นคำร้อง "เรื่องร้องเรียน 4"')
	);



	if(empty($dataList[$_GET['id']])) {
		echo '<div class="text-center" style="line-height:100px; color:#aaa;">Error404:ไม่พบข้อมูลที่ต้องการ</div>';
		return false;
	}
?>
<div class='tableLayout list'>
	<div class='header'>
		<div style="width:80px; text-align:center;">#</div>
		<div style="width:200px;">ผู้ทำรายการ</div>
		<div>รายละเอียด</div>
		<div style='width:200px;'>วันที่ทำรายการ</div>
		<?php 
			if(@$_GET['p'] == 'admin') {
				echo '<div style="width:160px; text-align:center;"><a href="addComplain.php'.$getValue.'" class="btn " style="background:#0D7D21; color:#fff; padding:5px 20px;">เพิ่ม</a></div>';
			}
		?>
	</div>
	<?php 
		foreach($dataList[$_GET['id']] as $item) {
			echo '<div>';
				echo '<div style="width:80px; text-align:center;">'.((empty($no))?$no = 1:++$no).'</div>';
				echo '<div>';
					echo '<div>'.$item[1].'</div>';
				echo '</div>';
				echo '<div>';
					echo '<div>'.$item[2].'</div>';
				echo '</div>';
				echo '<div>'.db_to_date($item[0]).'</div>';
				if(@$_GET['p'] == 'admin') {
					echo '<div class="text-center"><a href="#remove" class="btn btn-danger">ลบ</a></div>';
				}
			echo '</div>';
		}
	?>
</div>