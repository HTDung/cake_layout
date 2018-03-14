<article id="main-content">
	<div class="typecttour" style="margin: 50px 0; margin-left: 20%">
	    <div style="padding-top: 30px; ">
	      	<input type="text" name="" style="width: 20%;" placeholder="Nhập từ khóa và nhấn Enter">
		    <button type="button" class="btn btn-success" style="">Tìm kiếm</button>
		    <button type="button" class="btn btn-success" style="width: 15%; float: right;"><?php echo $this->HTML->link('Thêm mới',array('controller' => 'typetour', 'action' => 'addtypetour'));?></button>
	   	</div>
	</div>
	<div style="margin-left: 20%">
		<div class="" style="">
	  		<p style="text-align: center;background: #cbecec;padding: 8px;">CHI TIẾT LOẠI TOUR</p>
		</div>
		<div style=" padding-top: 5px; margin-bottom: 10px; ">
		  	<table class="table table-bordered" style="margin: ">
				<thead>
				  <tr style="">
				    <th style="text-align: center; width: 10%">STT</th> 
				    <th style="text-align: center; width: 20%">Loại Tour</th>
				    <TH style="text-align: center; width: 20%">Trạng thái</TH>
				  </tr>
				</thead>
				<tbody>
				  <?php
				      if (empty($data)) {
				         echo "<h2>Dada Empty</h2>";
				      } else {
				        $i = 1;
				        foreach($data as $key => $value){
				        ?>
				          <tr style="">
				          <td style="width: 5%"><?php echo $i++?></td>
				          <td style="width: 20%"><?php echo $value['LoaiTour'];?></td>
				         <td style="width: 20%; text-align: center;">
				          	<button type="button" class="btn btn-primary" style="width: 40%; background: #A9F5F2"; ><?php echo $this->HTML->link('Sửa',array('controller' => 'typetour', 'action' => 'edittypetour', $value['MaLoaiTour']));?></button>
				          	<button type="button" class="btn btn-primary" style="width: 40%; background: #A9F5F2"; ><?php echo $this->HTML->link('Xóa',array('controller' => 'typetour', 'action' => 'deletetypetour', $value['MaLoaiTour']));?></button>
				         </td>
				          </tr>
				          <?php
				       }
				      }
				  ?>
				</tbody>
			</table>
		</div>
	</div>
</article>