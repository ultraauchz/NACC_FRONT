<div class='row'>
	<div class='col-md-12'>
		<div class='col-md-10 col-md-offset-1'>
			<div style='display:inline-block; width:100%; min-height:750px; background:#fff; padding:30px;'>
				<h4 style='margin:0;'>ข้อมูลราคากลาง </h4>
				<hr style='margin:20px 0; margin-top:5px;'>
				<div class="row">
					<form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">

						<!-- ข้อมูลคู่สัญญา -->
						<div class="form-group">
							<label class="col-sm-3 control-label">เลขที่สัญญา<span class="text-red">*</span></label>
							<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="เลขที่สัญญา" id="" name="" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">โครงการ : <span class="text-red">*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" placeholder="โครงการ" id="" name="การจ้างบำรุงรักษาโปรแกรมประยุกต์ระบบงานบริการทางสังคม ของ สป.พม. ประจำปีงบประมาณ ๒๕๕๙" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">หน่วยงานเจ้าของโครงการ : <span class="text-red">*</span></label>
							<div class="col-sm-7">
								<select class="form-control">
									<option>-- ระบุหน่วยงาน --</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">วงเงินงบประมาณที่ได้รับจัดสรร : <span class="text-red">*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" placeholder="วงเงินงบประมาณที่ได้รับจัดสรร" id="" name="475,080" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">วันที่กำหนดราคากลาง : <span class="text-red">*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" placeholder="วันที่" id="" name="สิงหาคม 2558" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">ราคากลาง : <span class="text-red">*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" placeholder="ราคากลาง" id="" name="475,080" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">แหล่งที่มาของราคากลาง : <span class="text-red">*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" placeholder="แหล่งที่มาของราคากลาง" id="" name="อัตราค่าจ้างที่ปรึกษา ศูนย์ข้อมูลที่ปรึกษาไทย กระทรวงการคลัง" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">เจ้าหน้าที่ผู้กำหนดราคากลาง (ราคาอ้างอิง) : <span class="text-red">*</span></label>
							<div class="col-sm-7">
								<textarea class="form-control">
								    1. นางสาวปิติพร ปิติเสรี
								    2. นายภควัต สิทธิวงศ์
								    3. นายจำเริญ นิจจรัลกุล
								</textarea>
							</div>
						</div>
						<div class="col-sm-12 text-center">
							<button type="button" class="btn btn-primary" >
								บันทึก
							</button>
							<a href="standard_price.php" class="btn btn-default">ย้อนกลับ</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

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

		$('.btn-select-cp').on('click', function() {
			$('#cboxClose').click();
		});
	}); 
</script>