<h1>Update bills</h1>
<FORM method="POST" action="<?php echo site_url('sold/update_sold'); ?>">
<TABLE>
	<TR><TH>Book ID</TH><TH>Book_name</TH><TH>Sold amount</TH></TR>
	<?php
	foreach ($sold as $row) {
		echo '<input type="hidden" name=Bill_ID[] value="'.$row['Bill_ID'].'"/>';
    echo '<td>'.$row['BookID'].'</td>';
		echo '<td>'.$row['Book_name'].'</td>';
		echo '<td><input type="number" name="Sold_number[]" value="';
				echo $row['Sold_number'];
				echo '"/></td></tr>';
	}
	?>
	<tr><td></td><td><input type="submit" name="btnSave" value="Save"/></td>
</TABLE>
