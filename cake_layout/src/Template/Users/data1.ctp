
 <article id="main-content">

      <table class="table table-bordered" style="margin: 5px">
    <thead>
      <tr>
       <th style="width: 10%"><p style="text-align: center;">ID</p></th>
        <th style="width: 30%"><p style="text-align: center;">NAME</p></th>
        <th style="width: 40%"><p style="text-align: center;">PASSWORD</p></th>
      </tr>
    </thead>
    <tbody>
    
      <?php
        foreach ($result as $key => $value) { ?>
          <tr>
            <td style="width: 10%; text-align: center;"><?php echo $value['user_id'];?></td>
            <td style="width: 30%; text-align: center;"><?php echo $value['username'];?></td>
            <td style="width: 40%; text-align: center;"><?php echo $value['password'];?></td>
          </tr>
      <?php  
        }
      ?>

    </tbody>
  </table>

  </article>
 