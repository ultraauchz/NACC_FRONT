<div class='row'>
	<div class='col-md-12'>
		<div class='col-md-10 col-md-offset-1'>
			<div style='display:inline-block; width:100%; min-height:750px; background:#fff; padding:30px;'>
				<h4 style='margin:0;'>ข้อมูลราคากลาง</h4>
				<div style='color:#aaa;'>
					อัพเดตล่าสุด ณ วันที่ 30/09/2558
				</div>
				<hr style='margin:20px 0; margin-top:5px;'>
				<div style='padding:20px; padding-top:10px; background:#eee; margin:10px 0; border:solid 1px #aaa; margin-bottom:25px;'>
					<div style='font-weight:bold;'>
						ค้นหา
					</div>
					<form class="form-horizontal" action="#" method="post">
						<div class="col-sm-12">
							<div class="col-sm-2">
								หน่วยงานเจ้าของโครงการ :
							</div>
							<div class="col-sm-2">
								<input type='text' placeholder='หน่วยงานเจ้าของโครงการ' class='form-control' style="display:inline-block; width:300px;">
							</div>
						</div>
						<div class="div_index_search col-sm-12">
							<div class="col-sm-2">
								ชื่อโครงการ :
							</div>
							<div class="col-sm-3">
								<input type='text' placeholder='ชื่อรายการ' class='form-control' style="display:inline-block; width:300px;">
							</div>
						</div>
						<div class="div_index_search col-sm-12">
							<div class="col-sm-2">
								ช่วงราคา :
							</div>
							<div class="col-sm-4">
								<select class="form-control">
									<option value="">-- แสดงทั้งหมด --</option>
									<option value="">ต่ำกว่า 50,000 บาท</option>
									<option value="">มากกว่า 50,000 ถึง 100,000 บาท</option>
									<option value="">มากกว่า 100,000 ถึง 500,000 บาท</option>
									<option value="">มากกว่า 500,000 ถึง 1,000,000 บาท</option>
									<option value="">มากกว่า 1,000,000 ถึง 3,000,000 บาท</option>
									<option value="">มากกว่า 3,000,000 บาท</option>
								</select>
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
							ลำดับ
						</div>
						<div>
							หน่วยงานเจ้าของโครงการ
						</div>
						<div>
							โครงการ
						</div>
						<div>
							วงเงินงบประมาณ
						</div>
						<div>
                            วันที่กำหนดราคากลาง
                        </div>
						<div style='width:160px;'>
						    <a href='member.php?q=form' class='btn' style='background:#0D7D21; color:#fff; padding:5px 10px; display:inline-block; font-family:THSarabunNew;'> <span style='font-size:20px;'>เพิ่ม</span> </a>
						</div>
					</div>
					<div class="tbody">
						<div style="text-align:center;">1</div>
						<div style="text-align:left;">ศูนย์เทคโนโลยีสารสนเทศและการและการสื่อสาร สำนักงานปลัดกระทรวงการพัฒนาสังคมและความมั่นคงของมนุษย์</div>
						<div style="text-align:left;">การจ้างบำรุงรักษาโปรแกรมประยุกต์ระบบงานบริการทางสังคม ของ สป.พม. ประจำปีงบประมาณ ๒๕๕๙</div>
						<div style="text-align:left;">475,080</div>
						<div style="text-align:left;">สิงหาคม 2558</div>
						<div style="text-align:left;">
							<a href="standard_price.php?q=form" class="btn btn-sm btn-blue">ดูรายละเอียด</a>							
                            <a href="standard_price.php?q=form" class="btn btn-sm btn-info">แก้ไข</a>
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