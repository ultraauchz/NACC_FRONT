<div class='row'>
	<div class='col-md-12'>
		<div class='col-md-10 col-md-offset-1'>
			<div style='display:inline-block; width:100%; min-height:750px; background:#fff; padding:30px;'>
				<h4 style='margin:0;'>บันทึกข้อมูลรายละเอียดสัญญา</h4>
				<div style='color:#aaa;'>เจ้าหน้าที่ดูแลระบบ</div>
				<hr style='margin:20px 0; margin-top:5px;'>
				<div class="row">
					<form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">

						<!-- ข้อมูลคู่สัญญา -->
						<div class="form-group" style="margin-left:20px;">
							<h6><b>ข้อมูลคู่สัญญา</b></h6>
						</div>

						<div class="form-group">
						    <label class="col-sm-3 control-label">เลขประจำตัวผู้เสียภาษี/เลขประจำตัวประชาชน : <span class="text-red">*</span></label>
						    <div class="col-sm-5">
						      <input type="text" class="form-control" placeholder="เลขประจำตัวผู้เสียภาษี/เลขประจำตัวประชาชน" id="" name="" />
						    </div>
						    <div class="col-sm-2">
						    	<a href="#div_contractparty" class='btn btn-inverse modal_fade'>ค้นหา</a>
						    </div>
						</div>

						<div class="form-group">
						    <label class="col-sm-3 control-label">ชื่อผู้ประกอบการ : <span class="text-red">*</span></label>
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
						    <label class="col-sm-3 control-label">โทรศัพท์ : </label>
						    <div class="col-sm-3">
						      <input type="text" class="form-control" placeholder="โทรศัพท์" id="" name="" />
						    </div>
						</div>

						<hr style='margin:20px 0; margin-top:5px;'>
						<!-- ข้อมูลคู่สัญญา -->

						<!-- ข้อมูลสัญญา -->
						<div class="form-group" style="margin-left:20px;">
							<h6><b>ข้อมูลสัญญา</b></h6>
						</div>

						<div class="form-group">
							<div class="col-sm-6">
							    <label class="col-sm-2 control-label">เลขที่สัญญา : </label>
							    <div class="col-sm-5">
							      <input type="text" class="form-control" placeholder="เลขที่สัญญา" id="" name="" />
							    </div>
						    </div>
						    <div class="col-sm-6">
						    	<label class="col-sm-2 control-label">เลขคุมสัญญา : </label>
							    <div class="col-sm-5">
							      <input type="text" class="form-control" placeholder="เลขคุ่มสัญญา" id="" name="" />
							    </div>
						    </div>
						</div>

						<div class="form-group">
							<div class="col-sm-6">
							    <label class="col-sm-2 control-label">ชื่อสัญญา : </label>
							    <div class="col-sm-10">
							      <input type="text" class="form-control" placeholder="ชื่อสัญญา" id="" name="" />
							    </div>
						    </div>
						</div>

						<div class="form-group">
							<div class="col-sm-6">
							    <label class="col-sm-2 control-label">วันที่เริ่มต้น : </label>
							    <div class="col-sm-5">
							      	<div class='input-group'>
								      <input type="input" class="form-con form-control datepicker" id="date_start" name="date_start" />
								      <span class="input-group-addon">
				                        <span class="glyphicon glyphicon-calendar"></span>
				                      </span>
				                    </div>
							    </div>
						    </div>
						    <div class="col-sm-6">
						    	<label class="col-sm-2 control-label">วันที่สิ้นสุด : </label>
							    <div class="col-sm-5">
							    	<div class='input-group'>
								      <input type="input" class="form-con form-control datepicker" id="date_end" name="date_end" />
								      <span class="input-group-addon">
				                        <span class="glyphicon glyphicon-calendar"></span>
				                      </span>
				                    </div>
							    </div>
						    </div>
						</div>

						<div class="form-group">
							<div class="col-sm-6">

							    <label class="col-sm-2 control-label">อายุสัญญา : </label>
							    <div class="col-sm-2">
							      <input type="text" class="form-control" placeholder="" id="" name="" />
							    </div>

							    <label class="col-sm-2 control-label">ปี : </label>
							    <div class="col-sm-2">
							      <input type="text" class="form-control" placeholder="" id="" name="" />
							    </div>

							    <label class="col-sm-2 control-label">เดือน : </label>
							    <div class="col-sm-2">
							      <input type="text" class="form-control" placeholder="" id="" name="" />
							    </div>

						    </div>
						</div>

						<div class="form-group">
							<div class="col-sm-6">
							    <label class="col-sm-2 control-label" style="line-height: 1;">ระยะเวลาประกันผลงาน : </label>
							    <div class="col-sm-2">
							      <input type="text" class="form-control" placeholder="" id="" name="" />
							    </div>

							    <label class="col-sm-2 control-label">ปี : </label>
							    <div class="col-sm-2">
							      <input type="text" class="form-control" placeholder="" id="" name="" />
							    </div>

							    <label class="col-sm-2 control-label">เดือน : </label>
							    <div class="col-sm-2">
							      <input type="text" class="form-control" placeholder="" id="" name="" />
							    </div>
						    </div>
						    <div class="col-sm-6">
						    	<label class="col-sm-2 control-label" style="line-height: 1;">สิ้นสุดภาระผูกพันวันที่ : </label>
							    <div class="col-sm-5">
							      	<div class='input-group'>
								      <input type="input" class="form-con form-control datepicker" id="" name="" />
								      <span class="input-group-addon">
				                        <span class="glyphicon glyphicon-calendar"></span>
				                      </span>
				                    </div>
							    </div>
						    </div>
						</div>

						<div class="form-group">
							<div class="col-sm-6">
							    <label class="col-sm-2 control-label">มูลค่าสัญญา : </label>
							    <div class="col-sm-5">
							      <input type="text" class="form-control" placeholder="มูลค่าสัญญา" id="" name="" />
							    </div>
						    </div>
						</div>

						<div class="form-group">
							<div class="col-sm-6">
							    <label class="col-sm-2 control-label" style="line-height: 1;">จำนวน<br />งวดงาน : </label>
							    <div class="col-sm-3">
							      <input type="text" class="form-control" placeholder="" id="" name="" />
							    </div>
							    <div class="col-sm-1">  งวด</div>
						    </div>
						    <div class="col-sm-6">
						    	<label class="col-sm-2 control-label" style="line-height: 1;">จำนวนงวด<br />การรับเงิน : </label>
							    <div class="col-sm-3">
							      <input type="text" class="form-control" placeholder="" id="" name="" />
							    </div>
							    <div class="col-sm-1">  งวด</div>
						    </div>
						</div>

						<div class="form-group">
							<div class="col-sm-6">
							    <label class="col-sm-2 control-label" style="line-height: 1;">ประเภทการ<br />ทำสัญญา : </label>
							    <div class="col-sm-10">
							      	<label class="checkbox-inline"><input type="radio" id="contract_type" name="contract_type" value="1"> ทำสัญญาตั้งแต่ 1 เมษายน 2555</label><br />
					      			<label class="checkbox-inline"><input type="radio" id="contract_type" name="contract_type" value="2"> ทำสัญญาก่อน 1 เมษายน 2555 และมีการแก้ไขสัญญาในส่วนที่เป็นสาระสำคัญ</label>
							    </div>
						    </div>
						</div>
						<!-- ข้อมูลสัญญา -->

						<div class="col-sm-12 text-center">
							<button type="button" class="btn btn-primary" >บันทึก</button>
							<a href="contract.php" class="btn btn-default">ย้อนกลับ</a>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<div style="display:none;">
	<div id="div_contractparty">
		<h4>ข้อมูลคู่สัญญา</h4>
		<div style='padding:20px; padding-top:10px; background:#eee; margin:10px 0; border:solid 1px #aaa; margin-bottom:25px;'>
			<div style='font-weight:bold;'>ค้นหา</div>
			<form class="form-horizontal" action="#" method="post">
				<div class="div_index_search col-sm-12">
					<div class="col-sm-3" style="line-height: 1;">เลขประจาตัวผู้เสียภาษี/เลขประจำตัวประชาชน : </div> 
					<div class="col-sm-3">
						<input type='text' placeholder='เลขประจาตัวผู้เสียภาษี' class='form-control' style="display:inline-block; width:300px;">
					</div>
				</div>
				<div class="div_index_search col-sm-12">
					<div class="col-sm-3">ชื่อผู้ประกอบการ : </div>
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
				<div>เลขประจำตัวผู้เสียภาษี/เลขประจำตัวประชาชน</div>
				<div>ชื่อผู้ประกอบการ</div>
				<div>ที่อยู่</div>
				<div>เลือก</div>
			</div>


			<?php 
				$dataList = array(
					array('1100701061554', 'ชื่อคู่สัญญา4 นามสมมุติ', 'กทม.', 4),
					array('1100705648690', 'ชื่อคู่สัญญา3 นามสมมุติ', 'กทม.', 3),
					array('1100705001221', 'ชื่อคู่สัญญา2 นามสมมุติ', 'นนทบุรี', 2),
					array('1055801061554', 'ชื่อคู่สัญญา1 นามสมมุติ', 'ปทุมธานี ', 1),
					array('', '', '', 10),
					array('', '', '', 9),
					array('', '', '', 8),
					array('', '', '', 7),
					array('', '', '', 6),
					array('', '', '', 5),
				);

				foreach($dataList as $item) {
					echo '<div>';
						echo '<div class="text-center">'.((empty($no))?$no = 1:++$no).'</div>';
						echo '<div>'.$item[0].'</div>';
						echo '<div>'.$item[1].'</div>';
						echo '<div>'.$item[2].'</div>';
						echo '<div>';
							echo '<button class="btn btn-sm btn-blue btn-select-cp">เลือก</button>';
						echo '</div>';
					echo '</div>';
				}
			?>
					
		</div> <!-- <div class='tableLayout list'> -->
		
		<?php include('template/pagination.php'); ?>
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