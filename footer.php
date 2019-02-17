<footer> 
				<div class="float-right" id="rightcolumn">
				
					<div itemscope itemtype="http://schema.org/Organization">
					  <meta itemprop="name" content= "SOBE Organic Cleaning"/>
					  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
					       <meta itemprop="streetAddress" content="37 FL Ave. Suite 200 NE"/>
					       <meta itemprop="addressLocality" content="Washington"/>			
					       <meta itemprop="addressRegion" content="DC"/>
					       <meta itemprop="postalCode" content="20002"/>
					  </div>
					
						<ul id="social">
	                        <li><a class="yelp" title="Check our reviews on Yelp" href="http://www.yelp.com/biz/sobe-organic-cleaning-washington" target="_blank"></a></li>
							<li><a class="facebook" title="Find us on Facebook" href="http://facebook.com/sobeorganic" target="_blank"></a></li>
							<li><a class="twitter" title="Follow us on Twitter" href="http://twitter.com/sobeorganic" target="_blank"></a></li>							
						</ul>
						<p id="quickcontact" class="clearfix">
							<span itemprop="telephone">202-885-9684</span><br/>
	                        <small>
	                            <time itemprop="openingHours" itemscope itemtype="http://schema.org/LocalBusiness" datetime="Mo-Fr 09:00-17:00">Mon - Fri,  9a - 5p</time>
	                        </small>
	                        <br/>
							<a href="mailto:info@sobeorganic.com"><span itemprop="email">info@sobeorganic.com</span></a>
						</p>
	                    <p class="betterlife">
	                        <a href="http://www.cleanhappens.com" target="_blank" title="SOBE's official supplier." rel="nofollow"></a>
	                    </p>
	                    <p id="pledge-link">
	                    <a href="pledge.php">Our Pledge</a>
	                    
	                    </p>
	                    
						<p class="tagline">
							Ultimate Solution for a Cleaner Environment
						</p>
					</div> <!-- /organization -->
					
					
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
						
							Site by <a	href="http://jorluiseptor.com" target="_blank" rel="nofollow">Jorge Sepulveda.</a>
						</p>
					</div>
				</div>
			</footer>