<h1 class="text-info">Add a bill</h1>
<FORM class="form-group" action="<?php echo site_url('sold/add_sold'); ?>" method="POST">
  <h4>(!) Please notice that you can only add a bill of an existing book (which must be present in "Books" table).
   <br>If you wish to add a bill of a new book, you must first add the book's information to "Books" table</h4>
<TABLE class="table table-striped">
  <TR><TD>Bill ID</TD><TD><input class="form-control" type="number" name="Bill_ID" required /></TD></TR>
	<TR><TD>BookID</TD><TD>
    <!-- This is a drop down menu, it shows BookID of the existing books in table "Books". -->
    <select class="form-control" name="BookID" required>
      <?php
        foreach ($books as $row) {
          echo '<option value="'.$row['BookID'].'">'.$row['BookID'].'</option>';
        }
       ?>
    </select>
  </TD></TR>
	<TR><TD>Number of sold books</TD><TD><input class="form-control" type="number" name="Sold_number"/></TD></TR>
	<TR><TD></TD><TD><input class="btn btn-primary" type="submit" name="btnSave" value="Save"/></TD></TR>
</TABLE>
</FORM>

<?php
if (isset($sold)) {
	if ($sold)
		echo 'Data Inserted';
	else
		echo 'Something went wrong';
}
?>
