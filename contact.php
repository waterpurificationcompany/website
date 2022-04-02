<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Contact Us</title>
<link href="styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="cstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="nivo-slider.css" type="text/css" />
<link rel="stylesheet" href="themes/default/default.css" type="text/css" />

<script type="text/javascript" src='jquery-1.2.6.min.js'></script>
<script type="text/javascript" src="jquery.bgpos.js"></script>
<script type="text/javascript">
	$( document ).ready(function( $ ) {
	$('#navbar > ul li a')
		.css( {backgroundPosition: "-20px 35px"} )
		.mouseover(function(){
			$(this).stop().animate({backgroundPosition:"(-20px 94px)"}, {duration:500})
		})
		.mouseout(function(){
			$(this).stop().animate({backgroundPosition:"(40px 35px)"}, {duration:200, complete:function(){
				$(this).css({backgroundPosition: "-20px 35px"})
			}})
		})
});
</script>
<script type="text/javascript" src='jquery-1.9.0.min.js'></script>
<script src="jquery.nivo.slider.pack.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery.noConflict()(function($){
	$(window).load(function() {
 	$('#slider').nivoSlider({
     	effect:'random',
     	pauseTime: 6000,
     	directionNav: false,
     	animSpeed: 2000,  
     	pauseOnHover: false
        });
  	});
});
</script>

<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<div id="wrapper">
		<div id="container">
			<div id="header" >
				<div id="logo" ><img src="images/log.png" alt="logo"/></div>	
				<div id="navbar">
					<ul>
						<li ><a  href="index.html"  >Home</a></li>
						<li ><a href="about.html"  >About Us</a></li>
						<li ><a href="services.html"  >Services</a></li>
						<li ><a href="javascript:void(0);"  style="cursor:default">Products</a>
							<ul>
								<li ><a  href="javascript:void(0);" style="cursor:default" >Water Treatment</a>
									<ul>
										<li ><a  href="javascript:void(0);" style="cursor:default" > Filtration System</a>
											<ul>
												<li ><a  href="carbon-filter.html"  >Carbon Filter</a></li>									
												<li ><a href="sand-filter.html"  >Sand Filter</a></li>
												<li ><a href="pressure-filter.html"  >Pressure Filter</a></li>
												<li ><a href="dualmfilter.html"  >Dual Media Filter</a></li>
											</ul>	
										</li>
										<li ><a href="clarifier.html"  > Clarifier</a></li>
										<li ><a href="ultra-filtration.html"  >Ultra Filtration</a></li>
										<li ><a href="chemical-dosing.html"  >Chemical Dosing</a></li>
									</ul>								
								</li>
								<li ><a href="javascript:void(0);" style="cursor:default" >RO System</a>
									<ul>
										<li ><a  href="domestic-ro.html"  >Domestic RO</a></li>									
										<li ><a href="industrial-ro.html"  >Industrial RO</a></li>
										<li ><a href="uv.html"  >UV & Ozone</a></li>
									</ul>									
								</li>
								<li ><a href="javascript:void(0);" style="cursor:default" >Waste Water Treatment</a>
									<ul>
										<li ><a  href="sewage.html"  >Sewage water</a></li>									
										<li ><a href="effluent.html">Effluent Treatment</a></li>
										<li ><a href="javascript:void(0);" style="cursor:default" >Evaporators</a>
											<ul>
												<li ><a  href="falling-flim.html"  >Falling flim</a></li>									
												<li ><a href="rising-flim.html"  >Rising flim</a></li>
												<li ><a href="forced-circulation.html"  >Forced Circulation</a></li>
												<li ><a href="multiple-effect.html"  >Multiple Effect</a></li>
											</ul>
										</li>
									</ul>											
								</li>
								<li ><a href="dish-end.html"  >Dish End Pressing</a></li>
								<li ><a href="vessel-fab.html"  >MS Vessel Fabrication</a></li>
								<li ><a href="water-softner.html"  >Water Softner</a></li>	
								<li ><a href="javascript:void(0);" style="cursor:default" >Chemical Treatment</a>
									<ul>
										<li ><a  href="cooling-tower.html"  >Cooling Tower</a></li>									
										<li ><a href="boiler-chemical.html">Boiler Chemical</a></li>
									</ul>	
								</li>     
							</ul>
						</li>
						<li ><a href="gallery.html"  >Gallery</a></li> 
						<li ><a href="contact.php"  >Contact Us</a></li>     
					</ul>
				</div>	
			</div>
			<div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="images/slide1.png"  alt="" title="#htmlcaption1" >            
                <img src="images/slide2.png" alt="" title="#htmlcaption2">
                <img src="images/slide3.png" alt="" title="#htmlcaption3">
                <img src="images/slide4.png"  alt="" title="#htmlcaption4">
                <img src="images/slide5.png"  alt="" title="#htmlcaption5" >
                <img src="images/slide6.png"  alt="" title="#htmlcaption6" >
			
                
            </div>
            <div id="htmlcaption1" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>
            <div id="htmlcaption2" class="nivo-html-caption">
                <strong>This</strong> is an demo of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>
            <div id="htmlcaption3" class="nivo-html-caption">
                <strong>This</strong> is an test of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>
            <div id="htmlcaption4" class="nivo-html-caption">
                <strong>This</strong> is an sample of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>
        </div>	
			<div id="content" style="outline:1px solid rgba(0,0,0,0.1);">	
				<div id="pcontent">
					<h1 style="color:#41873d;">Contact Us</h1>
					<div style="float:left; margin-left:10px;">
					<h3><strong>Water Purification Company</strong></h3><br>
					No. 3/867-3, G.K.Karattur,<br>
					Ammanikondalampatty,<br>
					Salem-636010,<br>
					Tamilnadu, India<br>
					<img src="images/telephone.png" width="15" height="15">&nbsp;&nbsp;0427-2271233.<br>
					<img src="images/cellphone.png" width="15" height="15">&nbsp;&nbsp;9443421233<br>
					<img src="images/email.png" width="15" height="15">&nbsp;&nbsp;waterpurificationco@yahoo.in<br>
					</div>
					<div style="float:right;">
					<h3><strong>Enquiry</strong></h3>
					
	<form class="form" method="post" action="">
		
		<p class="name">
			<input type="text" name="name" placeholder="Name (required)" required />
			<label>Name</label>	
		</p>
		
		<p class="email">
			<input type="email" name="email"  placeholder="Email (required)" required />
			<label>Email</label>		
		</p>
		
		<p class="telephone">
			<input type="text" name="telephone" id="telephone"  />
			<label>Telephone</label>		
		</p>		
	
		<p class="text">
			<textarea name="message"  placeholder="Message (required)" required></textarea>	
		</p>
		<br>
		<br>
		<div class="g-recaptcha" data-sitekey="6LfgEgkTAAAAAHvYvM6srTg29b9ht5u_dEO3vsFk"></div>
		<p class="submit">
			<input type="submit" name="submit" value="Send" />
		</p>
	</form>	
		</div>
		<div style="margin-top:400px; margin-left:20px; color:#4d4d4d"><h3>Route Map</h3></div>
<iframe style="margin-top:10px; margin-left:17px;" width="840" height="480" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=water+purification+company+salem+tamilnadu&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=40.545434,86.572266&amp;ie=UTF8&amp;hq=water+purification+company&amp;hnear=Salem,+Tamil+Nadu,+India&amp;ll=11.625621,78.13377&amp;spn=0.098185,0.169086&amp;t=m&amp;z=13&amp;iwloc=A&amp;cid=14401086857160235719&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=water+purification+company+salem+tamilnadu&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=40.545434,86.572266&amp;ie=UTF8&amp;hq=water+purification+company&amp;hnear=Salem,+Tamil+Nadu,+India&amp;ll=11.625621,78.13377&amp;spn=0.098185,0.169086&amp;t=m&amp;z=13&amp;iwloc=A&amp;cid=14401086857160235719" style="color:#0000FF;text-align:left"></a></small></div>
	</div>
</div>			

	<div id="footer">
		<div id="fcontent">
		<ul>
			<li id="home"><a  href="index.html"  >Home</a></li>
			<li><a href="javascript:void(0);">|</a></li>									
			<li id="about"><a href="about.html"  >About Us</a></li>
			<li><a href="javascript:void(0);">|</a></li>	
			<li id="service"><a href="services.html"  >Services</a></li>
			<li><a href="javascript:void(0);">|</a></li>	
			<li id="product"><a href="carbon-filter.html"  >Products</a></li>
			<li><a href="javascript:void(0);">|</a></li>	
			<li id="gallery"><a href="gallery.html"  >Gallery</a></li>
			<li><a href="javascript:void(0);">|</a></li>	
			<li id="sitemap"><a href="sitemap.html"  >Sitemap</a></li>
			<li><a href="javascript:void(0);">|</a></li>
			<li id="contact"><a href="contact.php"  >Contact Us</a></li>										
		</ul>
		<p>© 2014 Water Purification Company. All Rights Reserved.</p> 
		<div>Designed by <a href="http://kenosys.in"><strong>Kenosys Pro Designs.</strong></a></div>
		</div>	
	</div>
<?php
if(isset($_POST['submit'])){
 	$name = $_POST['name']; // contain name of person
	$email = $_POST['email']; // Email address of sender
	$telephone = $_POST['telephone']; // Your subject
	$body = $_POST['message']; // Your message
	$receiver = "waterpurificationco@yahoo.in" ; // hardcorde your email address here - This is the email address that all your feedbacks will be sent to
	if (!empty($name) & !empty($email) && !empty($body)) {
   $body = "Name:{$name}\n\ntelephone :{$telephone}\n\nComments:{$body}";
	mail($receiver, $telephone, $body, "From: {$email}");
	}
}
?>	
</body>
</html>
