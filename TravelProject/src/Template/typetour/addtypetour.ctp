<article id="main-content" >
	<div style="background-color:">
		<div class="container-fluid" id="Loaitour">
	   	<div id="addtypetour" style="padding-top: 90px; ">
	    	<form style="margin-left: 20%;width: 70%;height:;border: 1px solid #cdd4d1;text-align: center;padding-top: 5px;margin-bottom: 10px; background-color: #cbecec">
	        	<p style="">THÊM LOẠI TOUR</p>
	      	</form>
	      	<form action="addtypetour" method="POST" style="margin-left: 20%;width: 70%;border: 1px solid #cdd4d1;padding: 10PX">
		        <label style="">Loại Tour</label><br><input type="text" name="LoaiTour" style="width: 100%"><br><br>
		        <div >
		            <button type="button" class="btn btn-default" style="background-color: #A9F5F2;"><?php echo $this->HTML->link('Quay lại',array('controller' => 'typetour', 'action' => 'typecttour'));?></button>
		            <button type="submit" name="" class="btn btn-success" style="margin-left: 32%; background-color: ">Lưu lại
		            </button>
		        </div>
	      	</form>
	    </div>
	</div>
	</div>
	
</article>