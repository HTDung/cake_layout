<article id="main-content">
		<div class="col-md-9" style="border: 1px solid aquamarine;">
			<form style="margin-left: 15%;width: 70%;height: 30px;border: 1px solid #cdd4d1;text-align: center;padding-top: 5px;margin-bottom: 10px;">
            <p>SỬA THÔNG TIN THÀNH VIÊN</p>
          </form>
           <form action="edit" method="POST" style="margin-left: 15%;width: 70%;border: 1px solid #cdd4d1;padding: 10PX">
           	<input type="hidden" name="user_id" value="<?php echo $data['user_id'];?>">
            <label>UserName</label><br><input id="" type="text" name="username" value="<?php echo $data['username'];?>"><br>
            <label>Password</label><br><input id="" type="password" name="password" value="<?php echo $data['password'];?>"><br>
            <label>Email</label><br><input id="" type="text" name="personal_email" value="<?php echo $data['personal_email'];?>"><br>
            <label>FullName</label><br><input id="" type="text" name="fullname" value="<?php echo $data['fullname'];?>"><br>
            <label>Slogan</label><br><textarea  rows="5" style="width: 100%" name="slogan" value="<?php echo $data['slogan'];?>"></textarea><br>
            <div >
            <button type="button" class="btn btn-default" style=""><?php echo $this->HTML->link('Quay lại',array('controller' => 'Users', 'action' => 'data'));?></button>
            
            <button type="submit" name="update" class="btn btn-success" style="margin-left: 32%;">Cập nhật
            </button>
            </div>
        </form>
			
		</div>
		
</article>
