<!DOCTYPE html>
<html>
<head>
<title>Book manager</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/mystyle.css');?>">
<!-- Bootstrap Core CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!-- Note: site_url must point to the controller's name> function. Not the view's name -->
	<nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand">BookManager</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
									<li><a href="<?php echo site_url('main') ?>">Guide</a></li>
									<li class="drop-down">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Books</a>
										<ul class="dropdown-menu">
											<li><a href="<?php echo site_url('books/show_books');?>">Show books</a></li>
											<li><a href="<?php echo site_url('books/add_books');?>">Add a book</a></li>
											<li><a href="<?php echo site_url('books/delete_books');?>">Delete a book</a></li>
											<li><a href="<?php echo site_url('books/update_books');?>">Update books</a></li>
										</ul>
									</li>
									<li class="drop-down">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sold books</a>
										<ul class="dropdown-menu">
											<li><a href="<?php echo site_url('sold/show_sold');?>">Show sold books</a></li>
											<li><a href="<?php echo site_url('sold/add_sold');?>">Add a bill</a></li>
											<li><a href="<?php echo site_url('sold/delete_sold');?>">Delete a bill</a></li>
											<li><a href="<?php echo site_url('sold/update_sold');?>">Update sold books</a></li>
										</ul>
									</li>
									<li class="drop-down">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Orders</a>
										<ul class="dropdown-menu">
											<li><a href="<?php echo site_url('order/show_orders');?>">Show orders</a></li>
											<li><a href="<?php echo site_url('order/add_orders');?>">Add an order</a></li>
											<li><a href="<?php echo site_url('order/delete_orders');?>">Delete an order</a></li>
											<li><a href="<?php echo site_url('order/update_orders');?>">Update orders</a></li>
										</ul>
									</li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
		<div class="container">
