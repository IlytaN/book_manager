<?php
foreach ($books as $row) {
  echo "Do you really want to delete book ".$row['BookID'].'?<br>';
  echo '<button class="btn btn-danger"><a href="'.site_url('books/remove_books').'/'.
  $row['BookID'].'">Delete</a></button>';
  echo '</td></tr> ';
  echo '<button class="btn btn-info"><a href="'.site_url('books/delete_books').'">Cancel</a></button>';
  echo '</td></tr>';
}
?>
