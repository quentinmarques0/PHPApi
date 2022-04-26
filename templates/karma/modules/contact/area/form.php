<div class="col-lg-9">
	<form class="row contact_form" action="?<?= API::$RouteRequestStr ?>=<?= API::$RoutesPHPFunction ?>&<?= API::$PHPAction ?>=contact_process" method="post" id="contactForm" novalidate="novalidate">
		<div class="col-md-6">
			<div class="form-group">
				<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'">
			</div>
			<div class="form-group">
				<input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"></textarea>
			</div>
		</div>
		<div class="col-md-12 text-right">
			<button type="submit" value="submit" class="primary-btn">Send Message</button>
		</div>
	</form>
</div>