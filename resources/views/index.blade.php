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
						<p>Any Score Approved!</p>
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
						<p>Where every client is a priority. Our premier auto brokerage firm provides peerles services in our <b>Rancho Palos</b> Verdes location. We provide superior nationwide service and VIP treatment from start to finish. To get started please visit our Vehicle and Application page.</p>
					</div>
					<div class="col-md-5">
						<img src="/images/buying_a_car.jpg" style="max-width:100%; max-height:100%;">
					</div>
				</div>
			</div>
		</div>

		<div class="mg-features">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mg-sec-title">
							<h2>Service</h2>
							<p>We value our customers time. We guarantee VIP service for you</p>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="mg-feature">
									<div class="mg-feature-icon-title">
										<i class="fa fa-car"></i>
										<h3>Auto Lease</h3>
									</div>
									<p>We provide best leasing deals on any car. From an everyday car to your luxury car.</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="mg-feature">
									<div class="mg-feature-icon-title">
										<i class="fa fa-car"></i>
										<h3>Auto Purchase</h3>
									</div>
									<p>We provide best leasing deals on any car. From an everyday car to your luxury car.</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="mg-feature">
									<div class="mg-feature-icon-title">
										<i class="fa fa-car"></i>
										<h3>Car Rental</h3>
									</div>
									<p>We provide a variety range of rentals from our affiliates. Guarenteeing a VIP customer service</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="mg-news-gallery">
				@include('contactus_standalone')
		</div>
@stop