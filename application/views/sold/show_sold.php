<h1>Sold books</h1>
<TABLE BORDER="1">
	<TR><TH>Bill ID</TH><TH>Book ID</TH><TH>Book name</TH><TH>Sold number</TH><TH>Price of each item</TH><TH>Revenue</TH></TR>
	<?php
	foreach ($sold as $row) {
		echo '<tr><td>'.$row['Bill_ID'].'</td>';
		echo '<td>'.$row['BookID'].'</td>';
		echo '<td>'.$row['Book_name'].'</td>';
		echo '<td>'.$row['Sold_number'].'</td>';
    echo '<td>'.$row['Price_per_item'].'</td>';
    echo '<td>'.$row['Sold_number']*$row['Price_per_item'].'</td></tr>';
	}
	?>
</TABLE>
