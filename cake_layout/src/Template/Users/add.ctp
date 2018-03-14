 <article id="main-content">
      <div class="container-fluid" id="thanhvien">

       <div id="add" style="padding-top: 10px">
          <form style="margin-left: 15%;width: 70%;height: 30px;border: 1px solid #cdd4d1;text-align: center;padding-top: 5px;margin-bottom: 10px;">
            <p>THÊM THÀNH VIÊN</p>
          </form>
          <form action="add" method="POST" style="margin-left: 15%;width: 70%;border: 1px solid #cdd4d1;padding: 10PX">
            <label>Tên đăng nhập</label><br><input id="" type="text" name="username"><br>
            <label>Mật khẩu</label><br><input id="" type="password" name="password"><br>
            <label>Email</label><br><input id="" type="text" name="personal_email"><br>
            <label>Tên đầy đủ</label><br><input id="" type="text" name="fullname"><br>
            <label>Nickname</label><br><input id="" type="text" name="nickname"><br>
            <label>Nhóm</label><br> 
            	<select class="form-control" name="selgroup">
            		<?php 
            			foreach ($group as $key => $value) {?>
            				<option value="<?php echo $value['group_id']; ?>"><?php echo $value['name']; ?></option>
            			<?php
            			}
            		?>
            		
            	</select>
            <label>Vị trí</label><br><select class="form-control" name="selrole">
            	 <?php 
            			foreach ($role as $key => $value) {?>
            				<option value="<?php echo $value['role_id']; ?>"><?php echo $value['value']; ?></option>
            			<?php
            			}
            		?>
            </select>
            <label>Khẩu hiệu</label><br><textarea  rows="5" style="width: 100%" name="slogan"></textarea><br>
            <div >
            <button type="button" class="btn btn-default" style=""><?php echo $this->HTML->link('Quay lại',array('controller' => 'Users', 'action' => 'data'));?></button>
            
            <button type="submit" name="btnThemThanhVien" class="btn btn-success" style="margin-left: 32%;">Lưu lại
            </button>
            </div>
          </form>
        </div>
      </div>
    </article>