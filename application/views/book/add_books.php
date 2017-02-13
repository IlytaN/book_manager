<h1>Add new Customer</h1>
<FORM action="<?php echo site_url('books/add_books'); ?>" method="POST">
<TABLE>
	<TR><TD>BookID</TD><TD><input type="text" name="BookID" required /></TD></TR>
	<TR><TD>Book name</TD><TD><input type="text" name="Book_name" required/></TD></TR>
	<TR><TD>Price per item (€)</TD><TD><input type="number" step="any" name="Price_per_item"/></TD></TR>
	<TR><TD>Number of the book</TD><TD><input type="number" name="Number"/></TD></TR>
	<TR><TD></TD><TD><input type="submit" name="btnSave" value="Save"/></TD></TR>
</TABLE>
</FORM>

<?php
if (isset($test)) {
	if ($test)
		echo 'Data Inserted';
	else
		echo 'Something went wrong';
}
?>
