<table style="width:30%">
  <tr>
    <th>Bookname</th>
    <th>Bookprice</th> 
    <th>Author</th>
  </tr>
<?php 
$i=0;
  foreach ($value as $key) { 
 	echo "<tr>";
 	echo "<td>".$value[$i]['book_name']."</td>";
 	echo "<td>".$value[$i]['book_price']."</td>";
 	echo "<td>".$value[$i]['book_author']."</td>";
 	$id = $value[$i]['id'];
 	echo "<td>".anchor('api/delete/'.$id.'', 'Delete')."</td>";
  	echo "<td>".anchor('api/updatedata/'.$id.'', 'Update')."</td>";
 	echo "</tr>";
 	$i = $i+1;
 }
 ?>   
</table>