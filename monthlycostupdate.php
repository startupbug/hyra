<?php include('header.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-8 services_top">

			<div class="image_services"><img src="assets/images/services_one.png" alt="services_images" class="img-responsive"></div>
			<h3 class="content_services">
				MONTHLY COST UPDATE
			</h3>
			<p class="text_services">
			Perspiciatis unde omnis iste natus error sit volupte tem accusantium dolor laudantium totam remas iste natus error sit voluptatem accusantium dolor laudantium...Perspiciatis unde omnis iste natus error sit volupte tem accusantium dolor laudantium totam remas iste natus error sit voluptatem accusantium dolor laudantium. Perspiciatis unde omnis iste natus error sit volupte tem accusantium dolor laudantium totam remas iste natus error sit voluptatem accusantium dolor laudantium. Perspiciatis unde omnis iste natus error sit volupte tem accusantium dolor laudantium totam remas iste natus error sit voluptatem accusantium dolor laudantium. Perspiciatis unde omnis iste natus error sit volupte tem accusantium dolor laudantium totam remas iste natus error sit voluptatem accusantium dolor laudantium. Perspiciatis unde omnis iste natus error sit volupte tem accusantium dolor laudantium totam remas iste natus error sit voluptatem accusantium dolor laudantium.</p>

			<p class="text_services_content">Eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil proto.</p>
			

			<p class="text_services_last">Perspiciatis unde omnis iste natus error sit volupte tem accusantium dolor laudantium totam remas iste natus error sit voluptatem accusantium dolor laudantium...Perspiciatis unde omnis iste natus error sit volupte tem accusantium dolor laudantium totam remas iste natus error sit voluptatem accusantium dolor laudantium. Perspiciatis unde omnis iste natus error sit volupte tem accusantium dolor laudantium totam remas iste natus error sit voluptatem accusantium dolor laudantium. Perspiciatis unde omnis iste natus error sit volupte tem accusantium dolor laudantium totam remas iste natus error sit voluptatem accusantium dolor laudantium.</p>
			<hr>
			<h3 class="contact_heading">Contact Us</h3>
			<div class="col-md-9 col-sm-8">

				<form method="post" id="monthlycost_form" name="contactform" class="contact-form clearfix" action="mail/contact.php">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group_form">
								<input id="name" name="Name" class="form-control required fullname input-lg" placeholder="Name" type="text">
							</div>
							<div class="form-group_form">
								<input id="email" name="email" class="form-control required email input-lg" placeholder="Email" type="email">
							</div>
							<div class="form-group_form">
								<input id="website" name="website" class="form-control optional defaultInvalid url input-lg" placeholder="Website" type="email">
							</div>
							<div class="button_cost"><input id="submit" name="submit" class="btn btn-primary" value="SUBMIT" type="submit"></div>
							
						</div>
						<div class="col-md-6">
							<div class="form-group_form">
								<textarea cols="6" rows="8" id="comments" name="comments" class="form-control input-lg" placeholder="Your Comment:"></textarea>
							</div>
							
						</div>
					</div>
				</form>
				<div class="clearfix"></div>
				<div id="message"></div>
			</div>

		</div>

		
		
		

		
		<div class="col-md-4 services_last col-sm-6 col-xs-12">
			<form action="/search.html" class="search-wrapper cf">
				<input type="text" placeholder="Search...">
				<button type="button"><span class="glyphicon glyphicon-search"></span></button>
			</form>
			<h3 class="services_left">
				Recent Services
			</h3>

			
			<div class="media">
				<a href="#" class="pull-left"><img src="assets/images/media_one.png" class="media-object" /></a>
				<div class="media-body">
					<h4 class="media-heading">
						Monthly Cost Update
					</h4> 
					<div class="media_button"><a href="#" class="btn" type="button">READ MORE</a></div>
				</div>
				
				
			</div>
			<hr>

			<div class="media">
				<a href="#" class="pull-left"><img src="assets/images/media_two.png" class="media-object" /></a>
				<div class="media-body">
					<h4 class="media-heading">
						Customizing Printer
					</h4> 
					<div class="media_button"><a href="#" class="btn" type="button">READ MORE</a></div>
				</div>
				
				
			</div>
			<hr>

			<div class="media">
				<a href="#" class="pull-left"><img src="assets/images/media_three.png" class="media-object" /></a>
				<div class="media-body">
					<h4 class="media-heading">
						Adding Features
					</h4> 
					<div class="media_button"><a href="#" class="btn" type="button">READ MORE</a></div>
				</div>
				
				
			</div>
			<hr>
		</div>
	</div>
</div>




<?php include('footer.php'); ?>