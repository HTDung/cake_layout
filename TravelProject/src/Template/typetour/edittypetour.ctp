<article id="main-content">
		<div id="edittypetour" style="padding-top: 90px">
			<form style="margin-left: 15%;width: 70%;border: 1px solid #cdd4d1;text-align: center;padding-top: 5px;margin-bottom: 10px; background-color: #cbecec">
	        	<p style="">SỬA THÔNG TIN LOẠI TOUR</p>
	      	</form>
	      	<form action="edittypetour" method="POST" style="margin-left: 15%;width: 70%;border: 1px solid #cdd4d1;padding: 10PX">
		       	<input type="hidden" name="MaLoaiTour" value="<?php echo $data['MaLoaiTour'];?>">
		        <label>Loại Tour</label><br><input id="" type="text" style="width: 100%" name="LoaiTour" value="<?php echo $data['LoaiTour'];?>"><br><br>
		        <div >
			        <button type="button" class="btn btn-default" style="background-color: #A9F5F2;"><?php echo $this->HTML->link('Quay lại',array('controller' => 'typetour', 'action' => 'typecttour'));?></button>
			        
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
