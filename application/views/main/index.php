<h1>User guide</h1>
     <h2>About Book Manager</h2>
	<p>This application can be used by an owner of a small/ average sized bookstore to manage the books in the store and the availability of them. 
	With this application, the owner can know which books are in stock, how many books have been sold, and which books are ordered and in delivery. 
	Prices and costs of the books are also calculated so that the user can easily keep track on the money flow.</p>
     <h2>How to use Book Manager</h2>
        <p>There are 3 tables: Books, Orders and Sold.</p>
	<p>Basically, BOOKS table is the mother table, it means that this table contains information about all the books (in stock, sold, ordered). 
           The user can find from this table the book’s name, price per item and the availability (it can be 0 if the books are sold out or in delivery).<p>
	<p>The two other tables are ORDERS and SOLD. Table SOLD includes the information of the sold books and their revenues. 
   	   Table ORDERS includes the information of the ordered books, their delivery time and their costs.</p>
	<p>All three tables are joined and integrated in a way that the user does not have to switch between the tables many times to check or to update the same information.</p>
	<h4 class="text-info">&diams;The user can read, create, delete and update the information of all the tables easily by selecting the relevant option in the menu. </h4>
<h2>CodeIgniter Configurations</h2>
	<p>The application has following configurations:</p>
	<p>autoload.php 	$autoload['helper'] = array('url');</p>
	<p>config.php	$config['base_url'] = '';<br>
		$config['index_page'] = 'index.php';</p>



<h2>MySQL codes</h2> 
<p>Create database Book_manager</p>
<p>CREATE TABLE Books </p>
<p>(BookID INT(225) PRIMARY KEY NOT NULL, </p>
<p>Book_name VARCHAR(255),</p>
<p>Price_per_item DECIMAL(7,2),</p>
<p>Number INT(225)) Engine=InnoDB;</p>
<hr>

<p>CREATE TABLE Sold</p>
<p>(Bill_ID INT(225) PRIMARY KEY,</p>
<p>BookID INT(225) NOT NULL,</p>
<p>FOREIGN KEY (BookID) REFERENCES Books(BookID),</p>
<p>Sold_number INT(225)) Engine=InnoDB;</p>
<hr>
<p>CREATE TABLE Orders</p>
<p>(Order_ID INT(225) PRIMARY KEY,</p>
<p>FOREIGN KEY (BookID) REFERENCES Books(BookID),</p>
<p>Order_date DATE,</p>
<p>Transport_time DATE,</p>
<p>Number_of_books INT(225),</p>
<p>Payment DECIMAL(7,2)) Engine=InnoDB;</p>

