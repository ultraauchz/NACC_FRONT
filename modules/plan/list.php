<div class='row'>
	<div class='col-md-12'>
		<div class='col-md-10 col-md-offset-1'>
			<div style='display:inline-block; width:100%; min-height:750px; background:#fff; padding:30px;'>
				<h4 style='margin:0;'>ข้อมูลแผนประจำปี</h4>
				<div style='color:#aaa;'>เจ้าหน้าที่ดูแลระบบ</div>
				<hr style='margin:20px 0; margin-top:5px;'>
				<div style='padding:20px; padding-top:10px; background:#eee; margin:10px 0; border:solid 1px #aaa; margin-bottom:25px;'>
					<div style='font-weight:bold;'>
						ค้นหา
					</div>
					<form class="form-horizontal" action="#" method="post">
						<div class="div_index_search col-sm-12">
							<div class="col-sm-2">
								หน่วยงาน :
							</div>
							<div class="col-sm-3">
								<select class="form-control">
									<option value="">หน่วยงานราชการ</option>
									<option value="">คู่สัญญาภายในประเทศ</option>
									<option value="">คู่สัญญาต่างประเทศ</option>
								</select>
							</div>
						</div>
						
						<div class="div_index_search col-sm-12">
							<div class="col-sm-2">
								ปีงบประมาณ :
							</div>
							<div class="col-sm-3">
								<select class="form-control">
									<option value="">2558</option>
									<option value="">2557</option>
									<option value="">2556</option>
									<option value="">2555</option>
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
				
				<div class="tree well">
				    <ul>
				        <li>
				            <span><i class="icon-folder-open"></i> ยุทธศาสตร์</span>
				            <ul>
				                <li>
				                	<span><i class="icon-minus-sign"></i> ในแผน</span> <a href="plan.php?q=form">+ เพิ่มโครงการ</a>
				                    <ul>
				                        <li>
					                        <span><i class="icon-leaf"></i> โครงการ</span> <a href="" class="btn btn-sm btn-edit" title="แก้ไข"></a> <a href="#" class="btn btn-sm btn-delete" title="ลบ"></a>
				                        </li>
				                        <li>
					                        <span><i class="icon-leaf"></i> โครงการ</span> <a href="" class="btn btn-sm btn-edit" title="แก้ไข"></a> <a href="#" class="btn btn-sm btn-delete" title="ลบ"></a>
				                        </li>
				                    </ul>
				                </li>
				                <li>
				                	<span><i class="icon-minus-sign"></i> นอกแผน</span> <a href="plan.php?q=form">+ เพิ่มโครงการ</a>
				                    <ul>
				                        <li>
					                        <span><i class="icon-leaf"></i> โครงการ</span> <a href="" class="btn btn-sm btn-edit" title="แก้ไข"></a> <a href="#" class="btn btn-sm btn-delete" title="ลบ"></a>
				                        </li>
				                        <li>
					                        <span><i class="icon-leaf"></i> โครงการ</span> <a href="" class="btn btn-sm btn-edit" title="แก้ไข"></a> <a href="#" class="btn btn-sm btn-delete" title="ลบ"></a>
				                        </li>
				                        <!-- <li>
				                        	<span><i class="icon-minus-sign"></i> Grand Child</span> <a href="">Goes somewhere</a>
				                            <ul>
				                                <li>
					                                <span><i class="icon-minus-sign"></i> Great Grand Child</span> <a href="">Goes somewhere</a>
						                            <ul>
						                                <li>
							                                <span><i class="icon-leaf"></i> Great great Grand Child</span> <a href="">Goes somewhere</a>
						                                </li>
						                                <li>
							                                <span><i class="icon-leaf"></i> Great great Grand Child</span> <a href="">Goes somewhere</a>
						                                </li>
						                             </ul>
				                                </li>
				                                <li>
					                                <span><i class="icon-leaf"></i> Great Grand Child</span> <a href="">Goes somewhere</a>
				                                </li>
				                                <li>
					                                <span><i class="icon-leaf"></i> Great Grand Child</span> <a href="">Goes somewhere</a>
				                                </li>
				                            </ul>
				                        </li>
				                        <li>
					                        <span><i class="icon-leaf"></i> Grand Child</span> <a href="">Goes somewhere</a>
				                        </li> -->
				                    </ul>
				                </li>
				            </ul>
				        </li>
				    </ul>
				</div>
				
			</div>
		</div>
	</div>
</div>
<br>

<script language='javascript'>
	$(function () {
	    $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse this branch');
	    $('.tree li.parent_li > span').on('click', function (e) {
	        var children = $(this).parent('li.parent_li').find(' > ul > li');
	        if (children.is(":visible")) {
	            children.hide('fast');
	            $(this).attr('title', 'Expand this branch').find(' > i').addClass('icon-plus-sign').removeClass('icon-minus-sign');
	        } else {
	            children.show('fast');
	            $(this).attr('title', 'Collapse this branch').find(' > i').addClass('icon-minus-sign').removeClass('icon-plus-sign');
	        }
	        e.stopPropagation();
	    });
	});
</script>


<style>
.tree {
    min-height:20px;
    padding:19px;
    margin-bottom:20px;
    background-color:#fbfbfb;
    border:1px solid #999;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius:4px;
    -webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);
    -moz-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);
    box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05)
}
.tree li {
    list-style-type:none;
    margin:0;
    padding:10px 5px 0 5px;
    position:relative
}
.tree li::before, .tree li::after {
    content:'';
    left:-20px;
    position:absolute;
    right:auto
}
.tree li::before {
    border-left:1px solid #999;
    bottom:50px;
    height:100%;
    top:0;
    width:1px
}
.tree li::after {
    border-top:1px solid #999;
    height:20px;
    top:25px;
    width:25px
}
.tree li span {
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border:1px solid #999;
    border-radius:5px;
    display:inline-block;
    padding:3px 8px;
    text-decoration:none
}
.tree li.parent_li>span {
    cursor:pointer
}
.tree>ul>li::before, .tree>ul>li::after {
    border:0
}
.tree li:last-child::before {
    height:30px
}
.tree li.parent_li>span:hover, .tree li.parent_li>span:hover+ul li span {
    background:#eee;
    border:1px solid #94a0b4;
    color:#000
}
</style>