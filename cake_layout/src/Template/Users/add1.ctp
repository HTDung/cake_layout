 <article id="main-content">
      <div class="container-fluid" id="thanhvien">

       <div id="add1" style="padding-top: 10px">
          <form style="margin-left: 15%;width: 70%;height: 30px;border: 1px solid #cdd4d1;text-align: center;padding-top: 5px;margin-bottom: 10px;">
            <p>THÊM THÀNH VIÊN</p>
          </form>
          <form action="add.php" method="POST" style="margin-left: 15%;width: 70%;border: 1px solid #cdd4d1;padding: 10PX">
            <label>Tên đăng nhập</label><br><input id="" type="text" name="username"><br>
            <label>Mật khẩu</label><br><input id="" type="text" name="password"><br>
            <label>Email</label><br><input id="" type="text" name="personal_email"><br>
            <label>Tên đầy đủ</label><br><input id="" type="text" name="fullname"><br>
            <label>Nickname</label><br><input id="" type="text" name="nickname"><br>
            <label>Nhóm</label><br>
            <label>Khẩu hiệu</label><br><textarea  rows="5" style="width: 100%" name="sloga"></textarea><br>
            <button type="button" class="btn btn-default">Quay lại</button>  
            <button type="submit" name="btnThemThanhVien" class="btn btn-success" style="margin-left: 32%;">Lưu lại</button>
          </form>
        </div>
      </div>
    </article>