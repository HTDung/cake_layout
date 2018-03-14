
 <article id="main-content">
      <div class="container-fluid">
        <div style="margin: 50px 0;">
          <input type="text" name="" style="border-radius: 3px;width: 25%;" placeholder="Nhập từ khóa và nhấn Enter">
         <button type="button" class="btn btn-success" style="">Tìm kiếm</button>
         <!-- <button type="button" class="btn btn-success" style="width: 15%; float: right;" > Thêm mới</button> -->
         <button type="button" class="btn btn-success" style="width: 15%; float: right;"><?php echo $this->HTML->link('Thêm mới',array('controller' => 'Users', 'action' => 'add'));?></button>
       </div>
     
      </div>
    </article>
    <div class="">
      <p style="
    text-align: center;background: #cbecec;padding: 8px;">DANH SÁCH THÀNH VIÊN</p>
    </div>
    <div>
      <table class="table table-bordered" style="margin: 5px">
    <thead>
      <tr>
        <th>STT</th> 
        <th>NHÓM</th>
        <th>EMAIL</th>
        <TH>HỌ VÀ TÊN</TH>
        <TH>KHẨU HIỆU</TH>
        <TH>VỊ TRÍ</TH>
        <TH>TRẠNG THÁI</TH>
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
              <tr>
              <td style="width: 5%"><?php echo $i++?></td>
              <td style="width: 10%"><?php echo $group[$value['UserGroupTbl']['group_id']]; ?></td>
              <td style="width: 20%"><?php echo $value['personal_email'];?></td>
              <td style="width: 20%"><?php echo $value['fullname'];?></td>
              <td style="width: 20%"><?php echo $value['slogan'];?></td>
             <td style="width: 10%"><?php echo $role[$value['UserRoleTbl']['role_id']];?></td>
             <td style="width: 15%; text-align: center;">
              <button type="button" class="btn btn-primary" style="width: 40% ; background: #86B404" ><?php echo $this->HTML->link('Sửa',array('controller' => 'Users', 'action' => 'edit', $value['user_id']));?></button>
              <button type="button" class="btn btn-primary" style="width: 40%; background: #86B404"; ><?php echo $this->HTML->link('Xóa',array('controller' => 'Users', 'action' => 'delete', $value['user_id']));?></button>
             </td>
              </tr>
              <?php
           }
          }
      ?>
    </tbody>
  </table>
 <!--  <script type="text/javascript">
    
    function btnHoatdong2(idbutton){
      var val = document.getElementById(idbutton).value;
      if(confirm("Bạn có muốn chuyển trạng thái")==true)
      {
        if(val=="Hoạt động"){
          document.getElementById(idbutton).value = "Không hoạt động";
        }else{
          document.getElementById(idbutton).value = "Hoạt động";
        }
        
      }
    }
  </script>
  <div style="">
     <button type="button" class="btn btn-primary">1</button>
      <button type="button" class="btn btn-primary">2</button>
       <button type="button" class="btn btn-primary">3</button>
  </div> -->
    </div>