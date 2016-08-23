<div class="mg-page-title parallax">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Contact Us</h2>
					<p>We Welcome Your Feedback and Comments</p>
				</div>
			</div>
		</div>
	</div>

	<div class="mg-page">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="alert alert-success hideThisElement">
					  <strong>Thank you!</strong> We will contact you shortly.
					</div>
					<h2 class="mg-sec-left-title">Request a quote</h2>
					{{Form::open(array('data-abide' => 'ajax', 'id' => 'contact-id', 'data-toggle' => 
					'validator', 'role' => "form"))}}
					  <div class="mg-contact-form-input form-group">
					    	<label for="inputName" class="control-label">Full Name</label>
					    	<input type="text" class="form-control" id="inputName" placeholder="Cina Saffary" required>
					  </div>
					  <div class="mg-contact-form-input form-group">
					    	<label for="inputEmail" class="control-label">Email</label>
					    	<input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
					    <div class="help-block with-errors"></div>
					  </div>

					   <div class="mg-contact-form-input form-group">
					  		<label for="inputPhone">Phone</label>
							<input id="inputPhone" type="text" class="form-control input-medium bfh-phone" data-format="+1 (ddd) ddd-dddd">
							<div class="help-block with-errors"></div>
					  </div>

					  
					   <div class="mg-contact-form-input form-group">
					   		<label for="inputName" class="control-label">Subject Name</label>
					    	<input type="text" class="form-control" id="inputSubject" placeholder="New Leasing Offers!" required>
					  </div>
					  <div class="mg-contact-form-input form-group">
					  		<label for="inputMessage">Message</label>
							<textarea class="form-control" id="inputMessage" rows="5"></textarea>
							<div class="help-block with-errors"></div>
					  </div>
					  <div class="form-group">
					  		<input type="submit" class="btn btn-dark-main pull-right" value="Send">
					  </div>
					{{ Form::close() }}
					<br />
					<br />
					<div class="alert alert-success hideThisElement">
					  <strong>Thank you!</strong> We will contact you shortly.
					</div>
				</div>
				<div class="col-md-7">
					<h2 class="mg-sec-left-title">Office Address</h2>
					<p>Do you have questions or comments for us? We'd love to hear them! Fill out the form and we will get back to you as soon as possible. If you need help with any aspect of the leasing/buying process, please don't hesitate to ask us. Our customer service representatives will be happy to assist you in any way. Whether through email, phone or in person, we're here to help you get the customer service you deserve.</p>
					<ul class="mg-contact-info">
						<li><i class="fa fa-map-marker"></i>222 W. 6th Street Suite #406 San Pedro, CA 90731</li>
						<li><i class="fa fa-phone"></i><a href="tel:+18883865271">+1-888-386-5271 (Sale)</a></li>
						<li><i class="fa fa-envelope"></i><a href="mailto:info@optimumautonetwork.com">info@optimumautonetwork.com</a></li>
					</ul>
					<div id="mg-map" class="mg-map"></div>
				</div>
			</div>
		</div>
	</div>