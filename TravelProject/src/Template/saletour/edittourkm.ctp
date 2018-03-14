<article id="main-content">
		<div id="edittourkm" style="padding-top: 90px">
			<form style="margin-left: 15%;width: 70%;border: 1px solid #cdd4d1;text-align: center;padding-top: 5px;margin-bottom: 10px; background-color: #cbecec">
	        	<p style="">SỬA THÔNG TIN KHUYẾN MÃI</p>
	      	</form>
	      	<form action="edit" method="POST" style="margin-left: 15%;width: 70%;border: 1px solid #cdd4d1;padding: 10PX">
		       	<input type="hidden" name="MaKMai" value="<?php echo $data['MaKMai'];?>">
		        <label>Tên khuyến mãi</label><br><input id="" type="text" style="width: 40%" name="TenKMai" value="<?php echo $data['TenKMai'];?>"><br>
		        <label>Ngày bắt đầu</label><br><input id="" type="text" name="NgayBD" style="width: 40%" value="<?php echo $data['NgayBD'];?>"><br>
		        <label>Ngày kết thúc</label><br><input id="" type="text" name="NgayKT" style="width: 40%" value="<?php echo $data['NgayKT'];?>"><br>
		        <label>Ghi chú</label><br><textarea rows="5" type="text" style="width: 100%" name="Ghichu" value=""><?php echo $data['Ghichu'];?></textarea><br>
		        <div >
			        <button type="button" class="btn btn-default" style="background-color: #A9F5F2;"><?php echo $this->HTML->link('Quay lại',array('controller' => 'saletour', 'action' => 'tourkm'));?></button>
			        
			        <button type="submit" name="update" class="btn btn-success" style="margin-left: 32%;">Cập nhật</button>
		        </div>
	   		</form>
		</div>
</article>
<!-- <script>
            angular.module('myapp', [])
                .controller('DateController', ['$scope', function($scope) {
                    $scope.value = new Date();
                }]);
        </script> -->
