<h1 class="text-info">Update Books</h1>
<FORM method="POST" action="<?php echo site_url('books/update_books'); ?>">
<TABLE class="table table-bordered">
	<TR><TH>Price per item</TH><TH>Book_name</TH><TH>Number of books</TH></TR>
	<?php
	foreach ($books as $row) {
		echo '<input type="hidden" name=BookID[] value="'.$row['BookID'].'"/>';
		echo '<tr><td><input class="form-control" type="number" step="any" name="Price_per_item[]" value="';
			echo $row['Price_per_item'];
			echo '"/></td>';
		echo '<td><input class="form-control" type="text" name="Book_name[]" value="';
			echo $row['Book_name'];
			echo '"/></td>';
		echo '<td><input class="form-control" type="number" name="Number[]" value="';
				echo $row['Number'];
				echo '"/></td></tr>';
	}
	?>
	<tr><td></td><td><input class="btn btn-primary" type="submit" name="btnSave" value="Save"/></td>
</TABLE>
