<h1>Books</h1>
<h4>(!) Information about the available books in the shop</h4>
<TABLE BORDER="1">
	<TR><TH>BookID</TH><TH>Book name</TH><TH>Price per item (€)</TH><TH>Number of books</TH></TR>
	<?php
	foreach ($books as $row) {
		echo '<tr><td>'.$row['BookID'].'</td>';
		echo '<td>'.$row['Book_name'].'</td>';
		echo '<td>'.$row['Price_per_item'].'</td>';
		echo '<td>'.$row['Number'].'</td></tr>';
	}
	?>
</TABLE>
