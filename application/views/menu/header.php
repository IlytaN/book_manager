<!DOCTYPE html>
<html>
<head>
<title>Book manager</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/mystyle.css');?>">
</head>
<body>
<!-- Note: site_url must point to the controller's name> function. Not the view's name -->
<h1>This is the Book Manager</h1>
<ul>
	<li><a href="<?php echo site_url('main') ?>">Main Page</a></li>
	<li><a href="<?php echo site_url('main') ?>">User guide</a></li>
	<li><a href="<?php echo site_url('books/show_books');?>">Show books</a></li>
	<li><a href="<?php echo site_url('books/add_books');?>">Add a book</a></li>
	<li><a href="<?php echo site_url('books/delete_books');?>">Delete a book</a></li>
	<li><a href="<?php echo site_url('books/update_books');?>">Update books</a></li>
	<li><a href="<?php echo site_url('sold/show_sold');?>">Show sold books</a></li>
	<li><a href="<?php echo site_url('sold/add_sold');?>">Add a bill</a></li>
	<li><a href="<?php echo site_url('sold/delete_sold');?>">Delete a bill</a></li>
	<li><a href="<?php echo site_url('sold/update_sold');?>">Update sold books</a></li>
	<li><a href="<?php echo site_url('order/show_orders');?>">Show orders</a></li>
	<li><a href="<?php echo site_url('order/add_orders');?>">Add an order</a></li>
	<li><a href="<?php echo site_url('order/delete_orders');?>">Delete an order</a></li>
	<li><a href="<?php echo site_url('order/update_orders');?>">Update orders</a></li>
</ul>
