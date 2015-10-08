<div class='row'>
	<div class='col-md-12'>
		<div class='col-md-10 col-md-offset-1'>
			<div style='display:inline-block; width:100%; min-height:750px; background:#fff; padding:30px;'>
				<h4 style='margin:0;'>ลงทะเบียนขอใช้บริการ</h4>
				<hr>
				<div class="row">
					   <div style="border:#CCCCCC 1px solid;padding-top:20px;padding-bottom:20px;background:#fcf8e3;" align="center">
					           <div style="text-align:center;">
					                       <h4 style="color:;">ลงทะเบียนเสร็จเรียบร้อย</h4>
					                       รอการตรวจสอบจากเจ้าหน้าที่<br>
					                       แล้วระบบจะแจ้งผลการลงทะเบียนไปยังอีเมล์ของท่าน
					           </div>
					   </div>
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