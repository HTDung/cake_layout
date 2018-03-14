<article id="main-content" >
	<div style="background-color:">
		<div class="container-fluid" id="khuyenmai">
	   	<div id="addtourkm" style="padding-top: 90px; ">
	    	<form style="margin-left: 15%;width: 70%;height:;border: 1px solid #cdd4d1;text-align: center;padding-top: 5px;margin-bottom: 10px; background-color: #cbecec">
	        	<p style="">THÊM CHƯƠNG TRÌNH KHUYẾN MÃI</p>
	      	</form>
	      	<form action="addtourkm" method="POST" style="margin-left: 15%;width: 70%;border: 1px solid #cdd4d1;padding: 10PX">
		        <label style="">Tên Tour</label><br>
		        <select class="form-control" name="selecttour" style="width: 40%; display: inline-block;">
            		<?php 
            			foreach ($tour1 as $key => $value) {?>
            				<option style="color: #000000" value="<?php echo $value['MaTour']; ?>" ><?php echo $value['TenTour']; ?></option>
            			<?php
            			}
            		?>
            	</select><br>
		        <label style="">Tên Khuyến Mãi</label><br><input id="" type="text" style="width: 40%; " name="TenKMai"><br>
		        <label style="">Ngày Bắt Đầu</label><br><input id="" type="date" style="width: 40%; " name="NgayBD"><br>
		        <label style="">Ngày Kết Thúc</label><br><input id="" type="date" style="width: 40%; " name="NgayKT"><br>
		       	<label style="">Ghi chú</label><br><textarea rows="5" type="text" style="width: 100%; " name="Ghichu"></textarea><br>
		        <div >
		            <button type="button" class="btn btn-default" style="background-color: #A9F5F2;"><?php echo $this->HTML->link('Quay lại',array('controller' => 'saletour', 'action' => 'tourkm'));?></button>
		            <button type="submit" name="" class="btn btn-success" style="margin-left: 32%; background-color: ">Lưu lại
		            </button>
		        </div>
	      	</form>
	    </div>
	</div>
	</div>
	
</article>