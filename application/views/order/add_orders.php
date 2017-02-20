<h1>Add an order</h1>
<FORM action="<?php echo site_url('order/add_orders'); ?>" method="POST">
  <h4>(!) Please notice that you can only add an order of an existing book (which must be present in "Books" table).
   <br>If you wish to add an order of a new book, you must first add the book's information to "Books" table</h4>
<TABLE>
  <TR><TD>Order ID</TD><TD><input type="number" name="Order_ID" required /></TD></TR>
	<TR><TD>BookID</TD><TD>
    <!-- This is a drop down menu, it shows BookID of the existing books in table "Books". -->
    <select name="BookID" required>
      <?php
        foreach ($books as $row) {
          echo '<option value="'.$row['BookID'].'">'.$row['BookID'].'</option>';
        }
       ?>
    </select>
  </TD></TR>
  <TR><TD>Order date</TD><TD><input type="date" name="Order_date" required /></TD></TR>
  <TR><TD>Estimated comming date</TD><TD><input type="date" name="Transport_time" required /></TD></TR>
	<TR><TD>Number of ordered items</TD><TD><input type="number" name="Number_of_books"/></TD></TR>
  <TR><TD>Cost of the order</TD><TD><input type="number" step="any" name="Payment"/></TD></TR>
	<TR><TD></TD><TD><input type="submit" name="btnSave" value="Save"/></TD></TR>
</TABLE>
</FORM>

<?php
if (isset($orders)) {
	if ($orders)
		echo 'Data Inserted';
	else
		echo 'Something went wrong';
}
?>
