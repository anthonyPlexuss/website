<div class="preloader"></div>
<header class="header transp sticky"> <!-- available class for header: .sticky .center-content .transp -->
	<nav class="navbar navbar-inverse">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo"></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="@if($current_page == 'home'){{'active'}}@endif"><a href="/">Home</a></li>
					<li class="@if($current_page == 'vehicles'){{'active'}}@endif"><a href="/vehicles">Vehicles</a></li>
					<li class="@if($current_page == 'aboutus'){{'active'}}@endif"><a href="/about-us">About Us</a></li>
					<li class="@if($current_page == 'contactus') {{'active'}} @endif"><a href="/contact-us">Contact Us</a></li>
				
				</ul>
			</div><!-- /.navbar-collapse -->
			<div class="mg-search-box-cont pull-right">
				<a href="#" class="mg-search-box-trigger"><i class="fa fa-search"></i></a>
				<div class="mg-search-box">
					<form>
						<input type="text" name="s" class="form-control" placeholder="Type Keyword...">
						<button type="submit" class="btn btn-main"><i class="fa fa-search"></i></button>
					</form>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
</header>