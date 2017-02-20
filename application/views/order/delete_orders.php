<h1>Delete orders</h1>
<TABLE BORDER="1">
	<TR><TH>Order ID</TH><TH>Book ID</TH><TH>Book name</TH><TH>Order date</TH>
    <TH>Estimated comming date</TH><TH>ordered amount</TH><TH>Order costs</TH><TH>Delete selected</TH></TR>
	<?php
	foreach ($orders as $row) {
		echo '<tr><td>'.$row['Order_ID'].'</td>';
    echo '<td>'.$row['BookID'].'</td>';
		echo '<td>'.$row['Book_name'].'</td>';
    echo '<td>'.$row['Order_date'].'</td>';
    echo '<td>'.$row['Transport_time'].'</td>';
    echo '<td>'.$row['Number_of_books'].'</td>';
    echo '<td>'.$row['Payment'].'</td>';
		echo '<td>';
		echo '<button><a href="'.site_url('order/remove_order').'/'.
		$row['Order_ID'].'">Delete</a></button>';
		echo '</td></tr>';
	}
	?>
</TABLE>
