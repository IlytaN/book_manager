<h1>Update Books</h1>
<FORM method="POST" action="<?php echo site_url('book/update_books'); ?>">
<TABLE>
	<TR><TH>BookID</TH><TH>Price per item</TH><TH>Book_name</TH></TR>
	<?php
	foreach ($books as $row) {
		echo '<input type="hidden" name=BookID[] value="'.$row['BookID'].'"/>';
		echo '<tr><td><input type="number" step="any" name="Price_per_item[]" value="';
			echo $row['Price_per_item'];
			echo '"/></td>';
		echo '<td><input type="text" name="Book_name[]" value="';
			echo $row['Book_name'];
			echo '"/></td></tr>';
	}
	?>
	<tr><td></td><td><input type="submit" name="btnSave" value="Save"/></td>
</TABLE>
