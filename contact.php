<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
	<!--<![endif]-->
	<?php require_once('functions.php'); 	?>
	
	<?php insert_head("Contact Us! | SOBE Organic Cleaning", "contact", "Contact us for estimates, ask your questions, or to schedule our services."); ?>

	
	<body>
		
		<div id="container">
		
			<?php include("header.php"); ?>
			
			<div id="main" role="main">
				<div class="float-left" id="content">
						<article>
						
						<div>
							<h1>Contact Us!</h1>
							<p>
								Our business hours are: Monday - Friday, 9a - 5p. 
								We can be reached at 202-885-9684 or via email at <a href="mailto:info@sobeorganic.com">info@sobeorganic.com</a>.
							</p>
						</div>
						<div class="fr"> 
							<form method="post" id="contact" action="mail.php">
								<img class="imgfix " src="img/guy-on-laptop.jpg" alt="Guy using a laptop" />
								<div class="">
									<p>
										<label>Name *</label>
										<input type="text" name="Name" placeholder="Name *">
										</input>
									</p>
									<p>
										<label>Email *</label>
										<input placeholder="Email *" name="Email" type="email">
										</input>
									</p>
								</div>
								<div>
									<p>
										<label>Phone Numbers *</label>
										<input type="text" name="Phone" placeholder="Phone Numbers *">
										</input>
									</p>
								</div>
								<br>
								<p>
									<label>Address *</label>
									<input type="text" name="Address" placeholder="Address *">
									</input>
								</p>
								<p>
									<label>City *</label>
									<input type="text" name="City" placeholder="City *">
									</input>
								</p>
								<p>
									<label >State *</label>
									<select name="State" placeholder="State *">
										<option value="">State</option>
										<option value="DC">District of Columbia</option>
										<option value="MD">Maryland</option>
										<option value="VA">Virginia</option>
									</select>
								</p>
								<p>
									<label>Zip *</label>
									<input type="text" name="Zip" placeholder="Zip *">
									</input>
								</p>
								<div class="">
                                    <p>
									<!-- <span>Own Pets? *</span> -->
									
                                    
                                    <select name="Pets" placeholder="Pets?">
                                    	<option value="">Own Pets?</option>
                                    	<option value="Yes">Yes</option>
                                    	<option value="No">No</option>
                                    </select>
                                    </p>
								</div>
                                
								<br>
								<div class="clearfix">
									<p>
										<label>Approximate Square Feet *</label>
										<input type="text" placeholder="Approximate Square Feet *" name="ApproxSquareFeet">
										</input>
									</p>
								</div>
								<div class="clearfix">
									<p>
										<label>Number of bedrooms *</label>
										<select placeholder="Bedrooms *" name="Bedrooms">
											<option value="">Number of bedrooms *</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</p>
									<p>
										<label>Number of Bathrooms *</label>
										<select placeholder="Baths" name="Baths">
											<option value="">Number of bathrooms *</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</p>
									<p>
										<label>Frequency *</label>
										<select placeholder="Frequency *" name="Frequency">
											<option value="">Frequency of service *</option>
											<option value="Weekly">Weekly</option>
											<option value="Bi-weekly">Bi-weekly</option>
											<option value="Once">Once</option>
											<option value="Move-in">Move-in</option>
											<option value="Move-out">Move-out</option>
										</select>
									</p>
								</div>
								<div class="clearfix">
									<label for="">Comments</label>
									<textarea rows="3" cols=""name="Comments" placeholder="Comments"></textarea>
									<br>
									<br>
								</div>
                                <div>
                                    <p>
                                    <select name="Source" placeholder="Where did you hear about SOBE? *">
                                        <option value="">Where did you hear about SOBE? *</option>
                                        <option value="Web Search">Web Search</option>
                                    	<option value="Yelp">Yelp</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="Bing">Bing</option>
                                        <option value="Google">Google</option>
                                        <option value="Deals Promotion">Deals Promotion</option>
                                        <option value="Newspaper or Magazine Ad">Newspaper or Magazine Ad</option>
                                        <option value="Word of mouth">Word of mouth</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    
                                    </p>
                                </div>
								<div style="display:none">
									<!-- this field is to prevent spam
											if its filled, then it is spam -->
									Please leave this field empty.
									<input type="text" name="body"/>
								</div>
								<div > 
									<!--Captcha -->
								
									<div class="QapTcha">
									<span>Are you human? Please slide the arrow to the right.<span>
									</div> 
									<br style="clear:both;"/>
								</div>
								<input id="submit" type="submit" value="Submit">
								</input>
								<span id="formfeedback"></span>
							</form>
						</article>

					
				</div> <!-- /#content -->
			</div>
			<?php include("footer.php"); ?>
		</div>
		<?php include("footerscriptlinks.php"); ?>
	</body>
</html>