<!DOCTYPE html>
<html>
<head>
<title>Book manager</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/mystyle.css');?>">
</head>
<body>

<h1>This is the Book Manager</h1>
<ul>
	<li><a href="<?php echo site_url('main') ?>">Main Page</a></li>
	<li><a href="<?php echo site_url('book/show_books');?>">Show books</a></li>
	<li><a href="<?php echo site_url('book/add_books');?>">Add a book</a></li>
	<li><a href="<?php echo site_url('book/delete_books');?>">Delete a book</a></li>
	<li><a href="<?php echo site_url('book/update_books');?>">Update books</a></li>
</ul>
