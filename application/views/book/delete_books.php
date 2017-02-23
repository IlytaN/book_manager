<h1 class="text-info">Delete Books</h1>
<TABLE class="table table-bordered" BORDER="1">
	<TR ><TH class="text-center">BookID</TH><TH class="text-center">Book name</TH><TH class="text-center">Delete selected</TH></TR>
	<?php
	foreach ($books as $row) {
		echo '<tr><td>'.$row['BookID'].'</td>';
		echo '<td>'.$row['Book_name'].'</td>';
		echo '<td>';
		echo '<button class="btn btn-info btn-block"><a href="'.site_url('books/show_remove_books').'/'.
		$row['BookID'].'">Delete</a></button>';
		echo '</td></tr>';
	}
	?>
</TABLE>
