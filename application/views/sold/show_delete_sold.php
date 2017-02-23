<?php
foreach ($sold as $row) {
  echo "Do you really want to delete bill ".$row['Bill_ID'].'?<br>';
  echo '<button class="btn btn-danger"><a href="'.site_url('sold/remove_sold').'/'.
  $row['Bill_ID'].'">Delete</a></button>';
  echo '</td></tr> ';
  echo '<button class="btn btn-info"><a href="'.site_url('sold/delete_sold').'">Cancel</a></button>';
  echo '</td></tr>';
}
?>
