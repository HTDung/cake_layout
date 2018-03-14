<div id="thanhviencu">

            <div style="margin: 50px 0;">
            <input type="text" name="searchinput" style="border-radius: 3px;width: 25%;" placeholder="Nhập từ khóa và nhấn Enter">
            <button type="submit" class="btn btn-success" name="search">Tìm kiếm</button>
            <p align="right"><button id="themthanhvien" ><a href="/imdev/users/add"> Thêm mới</a></button></p></div>
           <p align="right"><button id="delete" ><a href="/imdev/users/delete"> Delete</a></button></p></div>
          <div class="">
            <p style="text-align: center;background: #cbecec;padding: 8px;">DANH SÁCH THÀNH VIÊN</p>
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
                  <TH colspan="2">Action</TH>
                 
                </tr>
              </thead>
              <tbody>
                
                <?php
                    if($data==NULL){
                     echo "<h2>Dada Empty</h2>";
                    }
                    else{
                        
                     foreach($data as $key => $value){
                       echo "<tr>";
                       echo "<td></td>";
                       echo "<td>".$group[$value['UserGroup']['group_id']]."</td>";
                       echo "<td>".$value['personal_email']."</td>";
                       echo "<td>".$value['fullname']."</td>";
                       echo "<td>".$value['slogan']."</td>";
                       echo "<td>".$role[$value['UserRole']['role_id']]."</td>";
                       // echo $this->HTML->url('delete',array('controller'=>'Users','action'=>'list2'));
                       echo "</tr>";
                     }
                     // print_r($role[$value['UserRole']['role_id']]);
                    }
                    ?>

         
              </tbody>
            </table>
        <!-- <script type="text/javascript">
          
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
        </script> -->
        <div style="">
           <button type="button" class="btn btn-primary">1</button>
            <button type="button" class="btn btn-primary">2</button>
             <button type="button" class="btn btn-primary">3</button>
        </div>
          </div>
  
        </div>
        </div>
        </article>