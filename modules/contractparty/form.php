<div class='row'>
	<div class='col-md-12'>
		<div class='col-md-10 col-md-offset-1'>
			<div style='display:inline-block; width:100%; min-height:750px; background:#fff; padding:30px;'>
				<h4 style='margin:0;'>บันทึกข้อมูลคู่สัญญา</h4>
				<div style='color:#aaa;'>เจ้าหน้าที่ดูแลระบบ</div>
				<hr style='margin:20px 0; margin-top:5px;'>
				<ul class="nav nav-tabs" role="tablist">
					<li class="active">
						<a href="#contract" role="tab" data-toggle="tab"> <icon class="fa fa-user"></icon> ข้อมูลคู่สัญญา </a>
					</li>
					<li>
						<a href="#contractparty" role="tab" data-toggle="tab"> <i class="fa fa-archive"></i> ข้อมูลสัญญา </a>
					</li>
				</ul>

				<!-- begin tab-content -->
				<div class="tab-content">

					<!-- begin contract -->
					<div class="tab-pane fade active in" id="contract">
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
								<!-- ข้อมูลคู่สัญญา -->

								<div class="col-sm-12 text-center">
									<button type="button" class="btn btn-primary" >บันทึก</button>
									<a href="contractparty.php" class="btn btn-default">ย้อนกลับ</a>
								</div>

							</form>
						</div> <!-- <div class="row">-->
					</div>
					<!-- end contract -->

					<!-- begin contractparty -->
					<div class="tab-pane fade" id="contractparty">
						<div class="row">
							<!-- ข้อมูลสัญญา -->
							<div class="form-group" style="margin-left:20px;">
								<h6><b>ข้อมูลสัญญา</b></h6>
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
						</div> <!-- <div class="row">-->
					</div>
					<!-- end contractparty -->

				</div>
				<!-- begin tab-content -->

			</div>
		</div>
	</div>
</div>