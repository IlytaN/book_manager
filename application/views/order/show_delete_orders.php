<?php
foreach ($orders as $row) {
  echo "Do you really want to delete order ".$row['Order_ID'].'?<br>';
  echo '<button class="btn btn-danger"><a href="'.site_url('order/remove_order').'/'.
  $row['Order_ID'].'">Delete</a></button>';
  echo '</td></tr> ';
  echo '<button class="btn btn-info"><a href="'.site_url('order/delete_orders').'">Cancel</a></button>';
  echo '</td></tr>';
}
?>
