
 <article id="main-content">
      <div class="container-fluid">
        <div style="margin: 50px 0;">
          <input type="text" name="" style="border-radius: 3px;width: 25%;" placeholder="Nhập từ khóa và nhấn Enter">
         <button type="button" class="btn btn-success" style="">Tìm kiếm</button>
         <!-- <button type="button" class="btn btn-success" style="width: 15%; float: right;" > Thêm mới</button> -->
         <button type="button" class="btn btn-success" style="width: 15%; float: right;"><?php echo $this->HTML->link('Thêm thành viên',array('controller' => 'Users', 'action' => 'add'));?></button>
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
      <!--  <th></th>
        <th><label><input class="checkall" type="checkbox" value=""></label></th> -->
        <th></th> 
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
       foreach ($result as $key => $value) { ?>
             <tr>
            <!--  <td></td>
             <td><label><input class="check" type="checkbox" value=""></label></td> -->
            <td></td>
             <td> 
               
             <?php
           //  $query = 'SELECT group_tbl.name
           //  FROM group_tbl, user_group_tbl, user_tbl
           //  WHERE group_tbl.group_id = user_group_tbl.group_id
           // AND user_group_tbl.user_id = user_tbl.user_id';
           //   print_r(mysql_query($query));die;
           //   $re = mysql_query($query) or die(mysql_error());
           //   echo $re;  
              ?> 
            </td> 
             <td><?php echo $value['personal_email'];?></td>
             <td><?php echo $value['fullname'];?></td>
             <td><?php echo $value['slogan'];?></td>
             <td>MEMBER</td>
              <td><input id="hoat5" type="button" name="" value="Hoạt động" onclick="btnHoatdong(this.id)"></td>
           </tr> 
      <?php  
         }
      ?> 
     <!--  <?php 

        $re="SELECT group_tbl.name, user_tbl.personal_email, user_tbl.fullname, user_tbl.slogan FROM user_tbl, user_group_tbl, group_tbl WHERE user_tbl.user_id=user_group_tbl.user_id and user_group_tbl.group_id=group_tbl.group_id";
          while($row = mysql_fetch_array($re))
        { ?>
         
           <tr >
                <td>
                    <?php echo $row['NHÓM']; ?>
                </td>
                <td>
                    <?php echo $row['EMAIL']; ?>
                </td>
                <td>
                    <?php echo $row['HỌ VÀ TÊN']  ?>
                </td>
                <td>
                    <?php echo $row['KHẨU HIỆU']  ?>
                </td>
                
            </tr>
            <?php }
      ?> -->
    </tbody>
  </table>
  <script type="text/javascript">
    
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
  </div>
    </div>