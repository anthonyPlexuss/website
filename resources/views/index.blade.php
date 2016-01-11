@extends('master')
@section('content')
		<div id="mega-slider" class="carousel slide " data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#mega-slider" data-slide-to="0" class="active"></li>
				<li data-target="#mega-slider" data-slide-to="1"></li>
				<li data-target="#mega-slider" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item beactive">
					<img src="images/miura2.png" alt="...">
					<div class="carousel-caption">
						<img src="images/stars.png" alt="...">
						<h2>Optimum Auto Network</h2>
						<p>Every Score Approved!</p>
					</div>
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#mega-slider" role="button" data-slide="prev">
			</a>
			<a class="right carousel-control" href="#mega-slider" role="button" data-slide="next">
			</a>
		</div>
		<!-- <div class="container">
			<div class="row">
				<div class="col-md-12">
					<hr>
				</div>
			</div>
		</div> -->
		<div class="mg-about parallax">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<h2 class="mg-sec-left-title">About Optimum Auto Network</h2>
						<p>Where every client is a priority our premier auto brokerage firm provides peerles services in our <b>Rancho Palos</b> Verdes location. We provide superior nationwide service and VIP treatment from start to finish. To get started please visit our Vehicle and Application page.</p>
					</div>
					<div class="col-md-5">
						<div class="video-responsive">
							<iframe src="https://player.vimeo.com/video/134008155" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="mg-features">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mg-sec-title">
							<h2>Hotel facilties</h2>
							<p>These best rooms chosen by our customers</p>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="mg-feature">
									<div class="mg-feature-icon-title">
										<i class="fp-ht-receptionist"></i>
										<h3>24-hour reception</h3>
									</div>
									<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="mg-feature">
									<div class="mg-feature-icon-title">
										<i class="fa fa-cogs"></i>
										<h3>Room service</h3>
									</div>
									<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="mg-feature">
									<div class="mg-feature-icon-title">
										<i class="fa fa-car"></i>
										<h3>Car hire</h3>
									</div>
									<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="mg-feature">
									<div class="mg-feature-icon-title">
										<i class="fa fa-phone"></i>
										<h3>Wake-up call</h3>
									</div>
									<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="mg-feature">
									<div class="mg-feature-icon-title">
										<i class="fa fa-coffee"></i>
										<h3>Coffee and tea</h3>
									</div>
									<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="mg-feature">
									<div class="mg-feature-icon-title">
										<i class="fa fa-cogs"></i>
										<h3>Free Wi-Fi</h3>
									</div>
									<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="mg-news-gallery">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h2 class="mg-sec-left-title">Recent News</h2>
						<ul class="mg-recnt-posts">
							<li>
								<div class="mg-recnt-post">
									<div class="mg-rp-date">27 <div class="mg-rp-month">may</div></div>
									<h3><a href="#">A Standard Blog Post</a></h3>
									<p>Nostram virtutem poterimus quoddam praesertim legendos libero exhorrescere saluti...</p>
								</div>
							</li>
							<li>
								<div class="mg-recnt-post">
									<div class="mg-rp-date">27 <div class="mg-rp-month">may</div></div>
									<h3><a href="#">A Standard Blog Post</a></h3>
									<p>Nostram virtutem poterimus quoddam praesertim legendos libero exhorrescere saluti...</p>
								</div>
							</li>
							<li>
								<div class="mg-recnt-post">
									<div class="mg-rp-date">27 <div class="mg-rp-month">may</div></div>
									<h3><a href="#">A Standard Blog Post</a></h3>
									<p>Nostram virtutem poterimus quoddam praesertim legendos libero exhorrescere saluti...</p>
								</div>
							</li>
						</ul>
					</div>
					<div class="col-md-7">
						<h2 class="mg-sec-left-title">Our Gallery</h2>

						<div class="mg-gallery-container">
							<ul class="mg-gallery" id="mg-gallery">
								<li><img src="images/gallery-01.png" alt="Partner Logo"></li>
								<li><img src="images/gallery-02.png" alt="Partner Logo"></li>
								<li><img src="images/gallery-05.png" alt="Partner Logo"></li>
								<li><img src="images/gallery-06.png" alt="Partner Logo"></li>
								<li><img src="images/gallery-07.png" alt="Partner Logo"></li>
								<li><img src="images/gallery-08.png" alt="Partner Logo"></li>
							</ul>
							<ul class="mg-gallery-thumb" id="mg-gallery-thumb">
								<li><img src="images/gallery-thumb-01.png" alt="Partner Logo"></li>
								<li><img src="images/gallery-thumb-02.png" alt="Partner Logo"></li>
								<li><img src="images/gallery-thumb-05.png" alt="Partner Logo"></li>
								<li><img src="images/gallery-thumb-06.png" alt="Partner Logo"></li>
								<li><img src="images/gallery-thumb-07.png" alt="Partner Logo"></li>
								<li><img src="images/gallery-thumb-08.png" alt="Partner Logo"></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
@stop