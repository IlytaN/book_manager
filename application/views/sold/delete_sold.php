<h1 class="text-info">Delete a bill</h1>
<TABLE class="table table-striped">
	<TR><TH>Bill ID</TH><TH>Book ID</TH><TH>Book name</TH><TH>Sold number</TH><TH>Price per item</TH><TH>Delete selected</TH></TR>
	<?php
	foreach ($sold as $row) {
		echo '<tr><td>'.$row['Bill_ID'].'</td>';
		echo '<td>'.$row['BookID'].'</td>';
    echo '<td>'.$row['Book_name'].'</td>';
    echo '<td>'.$row['Sold_number'].'</td>';
    echo '<td>'.$row['Price_per_item'].'</td>';
		echo '<td>';
		echo '<a class="btn btn-info btn-block" href="'.site_url('sold/show_remove_sold').'/'.
		$row['Bill_ID'].'">Delete</a></button>';
		echo '</td></tr>';
	}
	?>
</TABLE>
