<h1 class="text-info">Add Book</h1>
<FORM  action="<?php echo site_url('books/add_books'); ?>" method="POST">
<TABLE>
	<div class="form-group"><label>Book ID:</label><input type="text" class="form-control" name="BookID" required></div>
	<div class="form-group"><label>Book Name:</label><input type="text" class="form-control" name="Book_name" required></div>
	<div class="form-group"><label>Price per item (€):</label><input step="any" name="Price_per_item" type="number" class="form-control" required></div>
	<div class="form-group"><label>Number of the book:</label><input class="form-control" type="number" name="Number" required></div>
	<input class="btn btn-info" type="submit" name="btnSave" value="Save"/>
</TABLE>
</FORM>

<?php
if (isset($books)) {
	if ($books)
		echo 'Data Inserted';
	else
		echo 'Something went wrong';
}
?>
