<div class='row'>
	<div class='col-md-12'>
		<div class='col-md-10 col-md-offset-1'>
			<div style='display:inline-block; width:100%; min-height:750px; background:#fff; padding:30px;'>
				<h4 style='margin:0;'>ข้อมูลการสมัครขอใช้บริการ</h4>
				<div style='color:#000;'>
					นายทดสอบ รักชาติ  (เจ้าหน้าที่ดูแลระบบ)
				</div>
				<hr style='margin:20px 0; margin-top:5px;'>
				<div style='padding:20px; padding-top:10px; background:#eee; margin:10px 0; border:solid 1px #aaa; margin-bottom:25px;'>
					<div style='font-weight:bold;'>
						ค้นหา
					</div>
					<form class="form-horizontal" action="#" method="post">
						<div class="div_index_search col-sm-12">
							<div class="col-sm-2">
								ประเภทหน่วยงาน :
							</div>
							<div class="col-sm-3">
								<select class="form-control">
									<option value="">แสดงทั้งหมด</option>
									<option value="">หน่วยงานราชการ</option>
									<option value="">คู่สัญญาภายในประเทศ</option>
									<option value="">คู่สัญญาต่างประเทศ</option>
								</select>
							</div>
						</div>
						<div class="div_index_search col-sm-12">
							<div class="col-sm-2">
								ชื่อผู้ลงทะเบียน / ชื่อหน่วยงาน :
							</div>
							<div class="col-sm-4">
								<input type='text' placeholder='เลขประจาตัวผู้เสียภาษี' class='form-control' style="display:inline-block;">
							</div>
						</div>
						<div class="div_index_search col-sm-12">
							<div class="col-sm-2">
								วันที่ลงทะเบียน :
							</div>
							<div class="col-sm-2">
								<div class='input-group' id="div_date_of_issue">
									<input type="input" class="form-con form-control datepicker" id="datepicker_s" name="date_start" />
									<span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span> </span>
								</div>
							</div>
							<div class="col-sm-2">
								ถึงวันที่ :
							</div>
							<div class="col-sm-2">
								<div class='input-group' id="div_date_of_issue">
									<input type="input" class="form-con form-control datepicker" id="datepicker_e" name="date_end" />
									<span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span> </span>
								</div>
							</div>
						</div>

						<div class="div_btn_search">
							<button type="button" class='btn btn-inverse'>
								ค้นหา
							</button>
						</div>
					</form>
				</div>

				<div class='tableLayout list'>
					<div class='header'>
						<div class="text-center" style="width:50px;">
							#
						</div>
						<div>
							วันที่สมัคร
						</div>
						<div>
							ชื่อ-นามสกุล
						</div>
						<div>
							อีเมล์
						</div>
						<div>
							ประเภทหน่วยงาน
						</div>
						<div>
							หน่วยงาน
						</div>
						<div>
							<a href='member.php?q=form' class='btn' style='background:#0D7D21; color:#fff; padding:5px 10px; display:inline-block; font-family:THSarabunNew;'> <span style='font-size:20px;'>เพิ่ม</span> </a>
						</div>
					</div>
					<div class="tbody">
						<div style="text-align:center;">
							1
						</div>
						<div>
							09/10/2558 10:15
						</div>
						<div>
							นาย ธีรวัฒน์  สงบสุข
						</div>
						<div>
							teerawat.ss@test.com
						</div>
						<div>
							หน่วยงานราชการ
						</div>
						<div>
							ศูนย์เทคโนโลยีสารสนเทศ/สำนักงานปลัดฯ/กระทรวงการพัฒนาสังคมและความมั่นคงของมนุษย์
						</div>
						<div>
							<a href="member.php?q=form" class="btn btn-sm btn-blue">ดูรายละเอียด</a>
							<a href="member.php?q=form" class="btn btn-sm btn-info">แก้ไข</a>
							<a href="#" class="btn btn-sm btn-danger">ลบ</a>
						</div>
					</div>
					<div class="tbody">
						<div style="text-align:center;">
							2
						</div>
						<div>
							09/10/2558 11:15
						</div>
						<div>
							นาย รักสงบ  รบเมื่อพร้อม
						</div>
						<div>
							raksangob.r@test.com
						</div>
						<div>
							คู่สัญญาภายในประเทศ
						</div>
						<div>
							บริษัท บีบีบี จำกัด
						</div>
						<div>
							<a href="member.php?q=form" class="btn btn-sm btn-blue">ดูรายละเอียด</a>
							<a href="member.php?q=form" class="btn btn-sm btn-info">แก้ไข</a>
							<a href="#" class="btn btn-sm btn-danger">ลบ</a>
						</div>
					</div>
				</div>

				<?php include 'template/pagination.php';?>'

			</div>
		</div>
	</div>
</div>
<br>

<script language='javascript'>
	$(function() {
		$('[name=date_start]').on('change', function() {
			date_start = $('[name=date_start]').val();
			datepicker_($('[name=date_end]'), $('[name=date_start]').val());
		});

		$('[name=date_end]').on('change', function() {
			date_end = $('[name=date_end]').val();
			datepicker_($('[name=date_start]'), $('[name=date_start]').val(), $('[name=date_end]').val());
		});
	}); 
</script>