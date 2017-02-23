<h1 class="text-info">Orders</h1>
<!-- I added column "Number_of_books" and "Payment" into table "Orders" of the database
    (design document didn't have them, but I think they're necessary) -->
<TABLE class="table table-bordered">
	<TR><TH>Order ID</TH><TH>Book ID</TH><TH>Book name</TH><TH>Order date</TH><TH>estimated comming date</TH>
      <TH>Number of ordered books</TH><TH>Order costs</TH></TR>
	<?php
	foreach ($orders as $row) {
		echo '<tr><td>'.$row['Order_ID'].'</td>';
		echo '<td>'.$row['BookID'].'</td>';
		echo '<td>'.$row['Book_name'].'</td>'; //Book_name is taken from table "Books"
		echo '<td>'.$row['Order_date'].'</td>';
    echo '<td>'.$row['Transport_time'].'</td>';
    echo '<td>'.$row['Number_of_books'].'</td>';
    echo '<td>'.$row['Payment'].'</td></tr>'; //"Payment" is the amount of money that the bookstore needs to pay for the its suppliers
	}
	?>
</TABLE>
