<h1>Delete Books</h1>
<TABLE BORDER="1">
	<TR><TH>BookID</TH><TH>Book name</TH><TH>Delete selected</TH></TR>
	<?php
	foreach ($books as $row) {
		echo '<tr><td>'.$row['BookID'].'</td>';
		echo '<td>'.$row['Book_name'].'</td>';
		echo '<td>';
		echo '<button><a href="'.site_url('books/remove_book').'/'.
		$row['BookID'].'">Delete</a></button>';
		echo '</td></tr>';
	}
	?>
</TABLE>
