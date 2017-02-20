<h1>Update orders</h1>
<FORM method="POST" action="<?php echo site_url('order/update_orders'); ?>">
<TABLE>
	<TR><TH>Book ID</TH><TH>Book_name</TH><TH>Order date</TH>
    <TH>Estimated comming date</TH><TH>Number of ordered books</TH><TH>Costs</TH></TR>
	<?php
	foreach ($orders as $row) {
		echo '<input type="hidden" name=Order_ID[] value="'.$row['Order_ID'].'"/>';
    echo '<td>'.$row['BookID'].'</td>';
		echo '<td>'.$row['Book_name'].'</td>';
		echo '<td><input type="date" name="Order_date[]" value="';
				echo $row['Order_date'];
        echo '"/></td>';
    echo '<td><input type="date" name="Transport_time[]" value="';
    		echo $row['Transport_time'];
        echo '"/></td>';
    echo '<td><input type="number" name="Number_of_books[]" value="';
    		echo $row['Number_of_books'];
        echo '"/></td>';
    echo '<td><input type="number" step="any" name="Payment[]" value="';
    		echo $row['Payment'];
				echo '"/></td></tr>';
	}
	?>
	<tr><td></td><td><input type="submit" name="btnSave" value="Save"/></td>
</TABLE>
