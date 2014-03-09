<footer>
				<div class="float-right" id="rightcolumn">
					<ul id="social">
                        <li><a class="yelp" title="Check our reviews on Yelp" href="http://www.yelp.com/biz/sobe-organic-cleaning-washington" target="_blank"></a></li>
						<li><a class="facebook" title="Find us on Facebook" href="http://facebook.com/sobeorganic" target="_blank"></a></li>
						<li><a class="twitter" title="Follow us on Twitter" href="http://twitter.com/sobeorganic" target="_blank"></a></li>
					</ul>
					<p id="quickcontact" class="clearfix">
						202-885-9684<br/>
                        <small>Mon - Fri,  9a - 5p</small><br/>
						<a href="mailto:info@sobeorganic.com">info@sobeorganic.com</a>
					</p>
                    <p class="betterlife">
                        <a href="http://www.cleanhappens.com" target="_blank" title="SOBE's official supplier."></a>
                    </p>
                    <p id="pledge-link">
                    <a href="pledge.php">Our Pledge</a>
                    
                    </p>
                    
					<p class="tagline">
						Ultimate Solution for a Cleaner Environment
					</p>
					<div id="footer">
						<p>
							<?php 
								$time = time () ; 
								//This line gets the current time off the server
					
								$year= date("Y",$time); 
								 //This line formats it to display just the year
					
								echo "Copyright " . $year . ".";
										
								 //this line prints out the copyright date range, you need to edit 2002 to be your opening year
							?>
						
							Site by <a	href="http://jorluiseptor.com" target="_blank">Jorge Sepulveda.</a>
						</p>
					</div>
				</div>
			</footer>