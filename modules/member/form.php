<div class='row'>
	<div class='col-md-12'>
		<div class='col-md-10 col-md-offset-1'>
			<div style='display:inline-block; width:100%; min-height:750px; background:#fff; padding:30px;'>
				<h4 style='margin:0;'>ลงทะเบียนขอใช้บริการ</h4>
				<div class="row">
					<form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">

						<!-- ข้อมูลคู่สัญญา -->
						<p></p>
						<div class="form-group">
						    <label class="col-sm-3 control-label">กลุ่มผู้ใช้ : <span class="text-red">*</span></label>
						    <div class="col-sm-5">
						    	<select class="form-control">
						    		<option value="">-- กรุณาระบุ --</option>
						    		<option value="1">หน่วยงานราชการ</option>
						    		<option value="2">คู่สัญญาภายในประเทศ</option>
						    		<option value="2">คู่สัญญาต่างประเทศ</option>
						    	</select>
						    </div>
						</div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">ประเภทหน่วยงาน : <span class="text-red">*</span></label>
                            <div class="col-sm-4">
                                    <select class="form-control">
                                    <option value="">-- กรุณาระบุ --</option>
                                    <option value="1">บุคคลทั่วไป</option>
                                    <option value="2">ห้างหุ้นส่วนจำกัด</option>
                                    <option value="2">บริษัท จำกัด</option>
                                    <option value="2">บริษัท จำกัด (มหาชน)</option>
                                </select>
                            </div>
                        </div>

						<div class="form-group">
						    <label class="col-sm-3 control-label">ชื่อหน่วยงาน : <span class="text-red">*</span></label>
						    <div class="col-sm-4">
						      <input type="text" class="form-control" placeholder="ชื่อผู้ประกอบการ" id="" name="" />
						    </div>
						</div>
						
						<div class="form-group">
						    <label class="col-sm-3 control-label">ที่อยู่ : <span class="text-red">*</span></label>
						    <div class="col-sm-7">
						      <input type="text" class="form-control" placeholder="ที่อยู่" id="" name="" />
						    </div>
						</div>
											
						<div class="form-group">
						    <label class="col-sm-3 control-label"></label>
						    <div class="col-sm-7">
						      <input type="text" class="form-control" placeholder="ที่อยู่" id="" name="" />
						    </div>
						</div>
						
						<div class="form-group">
						    <label class="col-sm-3 control-label">ชื่อผู้ติดต่อ : <span class="text-red">*</span></label>
						    <div class="col-sm-7">
						      <input type="text" class="form-control" placeholder="ชื่อผู้ติดต่อ" id="" name="" />
						    </div>
						</div>

						<div class="form-group">
						    <label class="col-sm-3 control-label">โทรศัพท์ : <span class="text-red">*</span></label>
						    <div class="col-sm-3">
						      <input type="text" class="form-control" placeholder="โทรศัพท์" id="" name="" />
						    </div>
						</div>
						
						<div class="form-group">
						    <label class="col-sm-3 control-label">อีเมล์ : <span class="text-red">*</span></label>
						    <div class="col-sm-3">
						      <input type="text" class="form-control" placeholder="อีเมล์" id="" name="" />
						    </div>
						</div>
						
						<div class="form-group">
						    <label class="col-sm-3 control-label">ชื่อผู้ใช้ : <span class="text-red">*</span></label>
						    <div class="col-sm-3">
						      <input type="text" class="form-control" placeholder="ชื่อผู้ใช้" id="" name="" />
						    </div>
						</div>
						
						<div class="form-group">
						    <label class="col-sm-3 control-label">รหัสผ่าน : <span class="text-red">*</span></label>
						    <div class="col-sm-3">
						      <input type="text" class="form-control" placeholder="รหัสผ่าน" id="" name="" />
						    </div>
						</div>
						
						<div class="form-group">
						    <label class="col-sm-3 control-label">ยืนยันรหัสผ่าน : <span class="text-red">*</span></label>
						    <div class="col-sm-3">
						      <input type="text" class="form-control" placeholder="ยืนยันรหัสผ่าน" id="" name="" />
						    </div>
						</div>
						
						<div class="form-group">
						    <label class="col-sm-3 control-label"></label>
						    <div class="col-sm-3">
						      <input type="checkbox"  id="" name="" /> เปิดการใช้งาน
						    </div>
						</div>

						<div class="col-sm-12 text-center">
							<a href="member.php?q=success" class="btn btn-primary">บันทึก</a>
							<a href="member.php" class="btn btn-default">ย้อนกลับ</a>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>

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

		$('.btn-select-cp').on('click', function() {
			$('#cboxClose').click();
		});
	});
</script>