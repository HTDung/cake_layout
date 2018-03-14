<?php
if($data==NULL){
 echo "<h2>Dada Empty</h2>";
}
else{
 echo "<table>
 <tr>
   <td>id</td>
   <td>Name</td>
   <td>Email</td>
 </tr>";
 foreach($data as $item){
   echo "<tr>";
   echo "<td>".$item['Users']['id']."</td>";
   echo "<td>".$item['Users']['name']."</td>";
   echo "<td>".$item['Users']['email']."</td>";
   echo "</tr>";
 }
}
?>