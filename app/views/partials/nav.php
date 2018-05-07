<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="/">Second-Hand Shop</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="/">Home</a></li>
			<li><a href="/companies">Companies</a></li>
			<?php if (isset($_SESSION["login"])): ?>
				<li ><a href="/">Profile</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">My Products
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/my_products">My Products</a></li>
						<li><a href="/add_product">Add Product</a></li>
						
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">My Apartments
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/my_apartments">My Apartment</a></li>
						<li><a href="/add_apartment">Add Apartment</a></li>
					</ul>
				</li>
				<li ><a href="/my_posts">My Posts</a></li>
			<?php endif; ?>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<?php if (!isset($_SESSION["login"])): ?>
				<li><a href="/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			<?php else: ?>
				<li><a href="/logout"><span class="glyphicon glyphicon-user">&nbspLogout</a></li>
			<?php endif; ?>
		</ul>
	</div>
</nav>
