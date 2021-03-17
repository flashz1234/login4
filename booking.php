<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Atracción del viajero | Official</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link  rel="stylesheet" href="css/style.css">
	<link  rel="stylesheet" href="css/stylebook.css">
	<link  rel="stylesheet" href="css/booking.css">
	<link  rel="stylesheet" href="css/modal.css">
	<link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
</head>
<body>
<section class="header" style="background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url(image/wallpaper18.jpg)">
	<div class="container">
		<img class="logo" src="image/logo.png">

		<div class="navbar">
			<nav>
				<ul id="menubar">
					<?php
						if (isset($_SESSION["useruid"])) {
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='aboutus.html'>About</a></li>";
							echo "<li><a href='destinations.php'>Destinations</a></li>";
							echo "<li><a href='transportation.php'>Transportation</a></li>";
							echo "<li><a href='profile.php'>Profile</a></li>";
							echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
						}
						else{
							echo "<li><a href='login.php'>Login</a></li>";
							echo "<li><a href='signup.php'>Register</a></li>";
						}
					 ?>
				</ul>
				<img src="image/menu.png" class="menu" onclick="menutoggle()">
			</nav>
		</div>
	</div>
	<?php
		if(isset($_SESSION['userId'])){
			echo '<p class="login-status">You are logged Out!</p>';
		}
	 ?>

<h1>Accommodation</h1>
	<p>There are many hotels but</br>The choices is only for you to make</p>
</section>


<section class="desc-recommend-hotel">
<h1>Recommend Hotels</h1>
<div class="container">
	<div class="row">
	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/johor/Tune Hotel Danga Bay.jpg">
			</div>
			<div class="booking-details">
			<div class="card" data-city="1">
			<h3>Tune Hotel Danga Bay</h3><hr>
				<p>Tune Hotel Danga Bay Johor offers easy access to Asia's first LEGOLAND(R) theme park which is 15-minutes' drive away,
				or you can hitch a ride with the shuttle bus provided by our hotel. Kids would love exploring the Sanrio Hello Kitty Town,
				Little Big Club, Thomas and Friends, and Barney at Puteri Harbour which is next to LEGOLAND(R).
				<span class="dots">...</span><span class="more" style="display: none;">
				Daily shuttles transfers are also available to the doorstep of Resorts World Sentosa and Universal Studios Singapore.
				If you want to just shop, don't miss out on an exquisite shopping experience at Johor Premium Outlets!
				</p><a onclick="readMore('1')" class="myBtn">Read more</a>

					<button id="myBtn">More Details</button>

					<!-- The Modal -->
						<div id="myModal" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p><img src="pic/johor/Tune Hotel Danga Bay 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-product-hunt"></i> Secured parking</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-bed"></i> Convenience store &ensp;
										<span><i class="fa fa-bed"></i> Non-smoking hotel</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-shower "></i> Bottled water</span>
										</p>
										<p><i class="fa fa-bed"></i> Housekeeping &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p>RM 50 per day</p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/xhcAuaxfaCYtGrQJ7" target="_blank">Mukim Bandar Lot PTB, 22819, Jalan Bertingkat Skudai, Danga Bay, 80200 Johor Bahru, Johor</a>
										</p>
										<p><i class="fa fa-phone"></i>
										07-232 9010
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.tunehotels.com/malaysia-hotels/danga-bay-johor/" target="_blank" >https://www.tunehotels.com/malaysia-hotels/danga-bay-johor/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>
		</div>
	</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/johor/Doubletree By Hilton Hotel Johor Bahru.jpg">
			</div>
			<div class="booking-details">
			<div class="card" data-city="2">
				<h3>Doubletree By Hilton Hotel</h3><hr>
				<p>Centrally located in the heart of Johor Barhu city and minutes from the Singapore causeway, the contemporary DoubleTree
				by Hilton Hotel Johor Bahru overlooks the Straits of Johor and is moments away from both the business and shopping precincts.
				Offering a range of room styles suiting both long and short stay guests with both western and local dining options,
				<span class="dots">...</span><span class="more" style="display: none;">
				Doubletree by Hilton Johor Bahru caters to all tastes. The hotel also boasts a dedicated events floor and stunning
				recreational facilities including pool, gym, steam rooms and Jacuzzis.
				</p><a onclick="readMore('2')" class="myBtn">Read more</a>

					<button id="myBtn1">More Details</button>

					<!-- The Modal -->
						<div id="myModal1" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>
									<img src="pic/johor/Doubletree By Hilton Hotel Johor Bahru 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-plane"></i> Airport transportation</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p>RM 202 per day</p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://g.page/DoubleTreeJohorBahru?share"target="_blank">12, Jalan Ngee Heng, Bandar Johor Bahru, 80000 Johor Bahru, Johor</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6072686868
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.hilton.com/en/hotels/jhbdtdi-doubletree-johor-bahru/"target="_blank">https://www.hilton.com/en/hotels/jhbdtdi-doubletree-johor-bahru/</a>
										</p>
									</p>

								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/johor/Amari Johor Bahru.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="3">
				<h3>Amari Johor Bahru</h3><hr>
				<p>We’re at the centre of it all in the heart of Johor Bahru’s Central Business District on Jalan Wong Ah Fook.
				Whether you are here for weekend shopping or on business, you’ll find everything you need close by, and we’ll
				do all we can to brighten your stay. You’ll have convenient access to a variety of restaurants, bars, entertainment
				facilities and fashion stores, with Zenith Mall lifestyle hub, City Square Shopping Mall and Komtar JBCC
				<span class="dots">...</span><span class="more" style="display: none;">
				(home to Angry Birds Activity Park) on our doorstep, as is Persada Convention Centre if you are attending on business.
				Culturally rich hotspots are just a short walk away. Learn more about the city through the Johor Bahru Heritage Trail,
				make the most of the discount shopping at Johor Premium Outlets and be sure to visit the Bazaar Karat Night Market.
				For the kids, LEGOLAND Malaysia and Hello Kitty Town are just 30 minutes away.
				</p><a onclick="readMore('3')" class="myBtn">Read more</a>

					<button id="myBtn2">More Details</button>

					<!-- The Modal -->
						<div id="myModal2" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>
									<img src="pic/johor/Amari Johor Bahru 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-plane"></i> Airport transportation</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 186 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://g.page/AmariJB?share"target="_blank">82C, Jalan Trus, Bandar Johor Bahru, 80000 Johor Bahru, Johor</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6072668888
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.amari.com/johor-bahru"target="_blank">https://www.amari.com/johor-bahru</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/johor/Capri by Fraser.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="4">
				<h3>Capri by Fraser </h3><hr>
				<p>Situated in Johor Bahru’s downtown core of Bukit Chagar, Capri by Fraser, Johor Bahru / Malaysia, is the preferred
				address for travellers looking for a convenient Johor Bahru hotel, whether travelling to the city on business or
				visiting as tourists. Its prime location is just minutes away from the Johor Bahru Customs, Immigration & Quarantine
				(CIQ) Complex, the exit point for visitors travelling to and from Singapore (Woodlands checkpoint) via the Causeway.
				<span class="dots">...</span><span class="more" style="display: none;">
				It is well served by a network of transportation facilities at Johor Bahru Sentral, an integrated transport hub with
				intercity buses and trains.Also located close by will be the light rail station for the future Rapid Transit System
				(RTS) Link, where commuters can transfer between Johor Bahru and Woodlands in just five minutes. Aside from convenient
				access to transportation, guests can enjoy an array of entertainment, shopping, dining and various pic,
				including a lively café scene and the heritage quarter. City Square Mall, Komtar JBCC, R&F Mall, The Mall, Mid Valley
				Southkey, Galleria@Kotaraya and PERSADA Convention Centre are all within walking distance.
				</p><a onclick="readMore('4')" class="myBtn">Read more</a>

					<button id="myBtn3">More Details</button>

					<!-- The Modal -->
						<div id="myModal3" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/johor/Capri by Fraser 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 161 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/ieFHEeaLhUX9cnAK6"target="_blank">Menara Tiga Serangkai, Jalan Tengku Azizah, Kim Teng Park, 80300 Johor Bahru, Johor</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6072770888
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://johorbahru.capribyfraser.com/en.html"target="_blank">https://johorbahru.capribyfraser.com/en.html</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/kedah/The Andaman.jpg">
			</div>

			<div class="booking-details">
				<div class="card" data-city="5">
				<h3>Desaru Beach</h3><hr>
				<p>The Andaman, a Luxury Collection Resort is situated on Malaysia's Langkawi Island between an ancient rainforest and
				Datai Bay, which boasts an 8,000-year-old coral reef; much of the property offers views of the surrounding landscape.
				Our resort facilities includes a full-service V Integrated Wellness Spa that offers a high quality whole person approach
				in Spa & Wellness, holistic therapies, beauty treatments, fitness classes, healthy cuisine, educational & lifestyle
				workshops and retreats for body and soul.<span class="dots">...</span><span class="more" style="display: none;">
				Other facilities include an outdoor pool with sun loungers, a 24-hour fitness
				center and the Young Explorers Club. The Andaman, Langkawi offers four unique yet equally alluring restaurants offering
				a variety of local specialties and international favorites. Sample our signature dishes, cocktails and non-alcoholic
				drinks in a relaxing atmosphere. Business friendly amenities include 7 meeting and conference rooms, and one ballroom.
				Guests are also welcomed to take an adventurous trip in the rainforest with one of the well-trained assistants or tee-off
				at The Els Club Teluk Datai which is one of the world's most captivating golf courses that was designed by four-time major
				winner and former Open champion Ernie Els and is located a mere four minutes drive from The Andaman, a Luxury Collection Resort.
				</p><a onclick="readMore('5')" class="myBtn">Read more</a>

					<button id="myBtn4">More Details</button>

					<!-- The Modal -->
						<div id="myModal4" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/kedah/The Andaman 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> 92 usd = RM 378 average </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/yxAeJaTLaw9S57dB8"target="_blank">Jln Teluk Datai, 07000 Langkawi, Kedah</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6049591088
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.marriott.com/hotels/travel/lgklc-the-andaman-a-luxury-collection-resort-langkawi/?scid=bb1a189a-fec3-4d19-a255-54ba596febe2&y_source=1_Mjg3MDAyOS03MTUtbG9jYXRpb24uZ29vZ2xlX3dlYnNpdGVfb3ZlcnJpZGU%3D"target="_blank">marriot.com</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/kedah/The Danna Langkawi.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="6">
				<h3>The Danna Langkawi</h3><hr>
				<p>Seated on a legendary island of Langkawi, Malaysia, The Danna Langkawi is a reflection of a timeless luxury vacation hotel
				that nestles against a backdrop of nature’s beauty. This 5-star luxury beachfront hotel in Langkawi offers an elite holiday
				experience, allowing you to find supreme comfort amidst an inviting ambience while admiring the unrivalled views of the
				white sandy beach, marina bay, sea and verdant green hills. Amid the solitude and serenity of the island, return to the
				<span class="dots">...</span><span class="more" style="display: none;">
				heyday of the British empire and immerse yourself in colonial splendor, coupled with modern amenities and a dash of exotic
				intimacy. The distinct British colonial design of The Danna Langkawi is complimented by Malaysian influences that embrace
				the future while paying tribute to the past. The Danna Langkawi is the winner of TripAdvisor Traveler’s Choice, HAPA Platinum
				Service Excellence award,HAPA GOLD Resort of the Year award, HAPA GOLD Signature Luxury resort and Expedia Insiders' Select 2013.
				</p><a onclick="readMore('6')" class="myBtn">Read more</a>

					<button id="myBtn5">More Details</button>

					<!-- The Modal -->
						<div id="myModal5" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/kedah/The Danna Langkawi 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 535 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/Vmu1dugVRCnTYopq5"target="_blank">The Danna Langkawi, Telaga Harbour Park, Pantai Kok, 07000, Langkawi, Kedah, Malaysia, 07000 Langkawi</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6049593288
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.thedanna.com/"target="_blank">https://www.thedanna.com/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/kedah/Bayview Hotel Langkawi.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="7">
				<h3>Bayview Hotel Langkawi</h3><hr>
				<p>Bayview Hotel Langkawi is a 4-star hotel located in the heart of the commercial district of downtown Kuah, which is a mere
				5 minutes from the jetty where ferry boats ply to and from the mainland and 25 minutes from the airport. The hotel prime location
				<span class="dots">...</span><span class="more" style="display: none;">
				is ideal for business and leisure travelers alike. Here, you will be spoilt for choice as there are numerous restaurants,
				duty free shops, souvenir shops, hawker stalls and night market (every Wednesday & Saturday) within walking distance from the hotel.
				</p><a onclick="readMore('7')" class="myBtn">Read more</a>

					<button id="myBtn6">More Details</button>

					<!-- The Modal -->
						<div id="myModal6" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/kedah/Bayview Hotel Langkawi 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 124 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/9DHWX1yRvfCJMrck7"target="_blank">Jalan Pandak Mayah 1, Pusat Bandar Kuah, 07000 Langkawi, Kedah</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6049661818
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://bhl.bayviewhotels.com/"target="_blank">https://bhl.bayviewhotels.com/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/kedah/Berjaya Langkawi Resort.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="8">
				<h3>Berjaya Langkawi Resorti</h3><hr>
				<p>Home to Unesco's World GeoPark, discover the island said to have inspired love and miracles. Cocooned within a rainforest sanctuary,
				Berjaya Langkawi Resort embraces boundless views of emerald waters and green-cushioned mountains.
				<span class="dots">...</span><span class="more" style="display: none;">With an array of convention facilities
				and inspired spa treatments complemented with heartfelt services, moments are filled with a sense of natural connection and harmonious retreat.
				</p><a onclick="readMore('8')" class="myBtn">Read more</a>


				<button id="myBtn7">More Details</button>

					<!-- The Modal -->
						<div id="myModal7" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/kedah/Berjaya Langkawi Resort 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 130 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://g.page/berjaya-langkawi-resort?share"target="_blank">Karung Berkunci 200 Burau Bay, 07000 Langkawi, Kedah</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6049591888
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.berjayahotel.com/langkawi/"target="_blank">https://www.berjayahotel.com/langkawi</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>
			</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/kelantan/Grand Riverview Hotel.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="9">
				<h3>Grand Riverview Hotel</h3><hr>
				<p>The rooms offer a flat screen TV, air conditioning, and a minibar, and getting online is possible, as free wifi is available,
				allowing you to rest and refresh with ease.Grand Riverview Hotel features 24 hour front desk, room service, and a concierge. In addition,
				as a valued Grand Riverview Hotel guest, you can enjoy a pool and an on-site restaurant that are available on-site.
				<span class="dots">...</span><span class="more" style="display: none;">Guests arriving by vehicle
				have access to free parking.For those interested in checking out popular landmarks while visiting Kota Bharu, Grand Riverview Hotel is located a
				short distance from Bank Pitis (0.3 mi) and Istana Balai Besar (0.3 mi).While in Kota Bharu be sure to experience nearby steakhouses such as
				Little Switzerland or Riverview Steak.
				</p><a onclick="readMore('9')" class="myBtn">Read more</a>

				<button id="myBtn8">More Details</button>

					<!-- The Modal -->
						<div id="myModal8" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/kelantan/Grand Riverview Hotel 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 132 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/xPzBuBB9ArmchrqJA"target="_blank">151, Jalan Post Office Lama, Bandar Kota Bharu, 15000 Kota Bharu, Kelantan</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6097439988
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="http://grv.com.my/"target="_blank">http://grv.com.my/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/kelantan/Crystal Lodge.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="10">
				<h3>Crystal Lodge</h3><hr>
				<p>Everyone needs a place to lay their weary head. For travellers visiting Kota Bharu, Crystal Lodge is an excellent choice for rest and rejuvenation.
				Well-known for its family-friendly environment and proximity to great restaurants and pic, Crystal Lodge makes it easy to enjoy the best of
				Kota Bharu.You’ll enjoy relaxing rooms that offer a flat screen TV, a refrigerator,<span class="dots">...</span><span class="more" style="display: none;">
				and air conditioning, and you can stay connected during your stayas Crystal Lodge offers guests free wifi.The hotel features 24 hour front desk, 24 hour
				check-in, and a concierge.Plus, Crystal Hotel offers a fitness center and breakfast, providing a pleasant respite from your busy day. For guests with a
				vehicle, free parking is available.Given the close proximity to Bank Pitis (0.3 mi), guests of Crystal Lodge can easily experience one of Kota Bharu's
				most popular landmarks.Kota Bharu has plenty of cafes. So when you’re here, be sure to check out popular spots like Muhibah Bakery, WESTERN DELI, and
				The Bold Lab, which are serving up some great dishes.There is no shortage of things to do in the area: explore popular castles such as Istana Balai
				Besar and Kubu Kebal.Whether you’re travelling for business, pleasure or both, Crystal Lodge is sure to make your visit to Kota Bharu one worth remembering.
				</p><a onclick="readMore('10')" class="myBtn">Read more</a>

				<button id="myBtn9">More Details</button>

					<!-- The Modal -->
						<div id="myModal9" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/kelantan/Crystal Lodge 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 107 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://g.page/crystallodge-my?share"target="_blank">124, Jalan Che Su, Bandar Kota Bharu, 15000 Kota Bharu, Kelantan</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6097470888
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://crystallodge.my/"target="_blank">https://crystallodge.my/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/kelantan/The Grand Renai Hotel.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="11">
				<h3>The Grand Renai Hotel</h3><hr>
				<p>Experience the rich Malay culture at The Grand Renai Kota Bharu Hotel, a Lifestyle Hotel and one of the city's five star international class hotel
				with premier convention and wedding venue. Conveniently located in the heart of Kota Bharu's commercial and shopping district and also close to the
				domestic airport. For business or leisure traveler, the 298 spacious accommodation rooms and suites provides excellent service and facilities
				<span class="dots">...</span><span class="more" style="display: none;">
				including High Speed Internet, 2 Executive Floors with dedicated Club Lounge,Business Centre, wireless meeting rooms with a Grand Ballroom, and on-site
				event management to create exhibitions, conventions, meetings and most extravagant weddings. The Hotel's Fitness Centre is Kota Bharu's largest gymnasium
				equipped with the latest fitness equipment, steam rooms, sauna, Jacuzzi and an outdoor swimming pool.
				</p><a onclick="readMore('11')" class="myBtn">Read more</a>

				<button id="myBtn10">More Details</button>

					<!-- The Modal -->
						<div id="myModal10" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/kelantan/The Grand Renai Hotel 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 142 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://g.page/grandrenai?share"target="_blank">Jalan Sultan Yahya Petra, Kota Sri Mutiara, 15150 Kota Bharu, Kelantan</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6097462233
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.grandrenai.com/"target="_blank">https://www.grandrenai.com/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/kelantan/Hotel Perdana.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="12">
				<h3>Hotel Perdana</h3><hr>
				<p>Hotel Perdana, the first premier hotel in Kota Bharu has undergone a major transformation into a luxury 5 star hotel. Stands in the heart of the city centre
				, within walking distance to Stadium Sultan Muhammad ke- IV, strategically located within a commercial district, government offices, shopping areas, hospitals and
				local pic. The hotel is only 15 minutes drive from Sultan Ismail Petra Airport Kota Bharu.
				Blending with a touch of modern luxury in a classic decor, <span class="dots">...</span><span class="more" style="display: none;">
				spreading over 2 wings and offering 272 well-appointed guest rooms and suites. Suitable for any business traveller or holiday makers, Hotel Perdana is set to be the
				new landmark and a preferred choice of accommodation in Kota Bharu.
				</p><a onclick="readMore('12')" class="myBtn">Read more</a>

				<button id="myBtn11">More Details</button>

					<!-- The Modal -->
						<div id="myModal11" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/kelantan/Hotel Perdana 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 175 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/yJ8MwEYNypWUpm9W6"target="_blank">Jalan Mahmood, Bandar Kota Bharu, 15000 Kota Bharu, Kelantan</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6097458888
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://perdana.attanahotels.com/perdana-kota-bharu/"target="_blank">https://perdana.attanahotels.com/perdana-kota-bharu/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/melaka/Liu Men Melaka by Preference.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="13">
				<h3>Liu Men Melaka by Preference</h3><hr>
				<p>I had a lovely time exploring this fabled city thanks to Liu Men. It's a gorgeously renovated, peranakan place nestled in the bossom of the old town.
				You can almost roll out of bed and straight onto a pineapple tart bake house, it felt that close. The bed was heavenly and with service to match.
				The L'occitane shower products were also just the thing to wipe away the dust of this 600 year old city. And the smart TV was appreciated.
				<span class="dots">...</span><span class="more" style="display: none;">
				The only issue with being so close to the action means you're also close to the noise. Loud becak drivers hoon up and down until midnight, blaring Malay ballads on high
				pitch, which is slightly annoying, and the acoustics are such that you hear a lot of what's happening in the corridors around you. Ask for a room facing away from the street
				if you're a light sleeper.<br>But it's a small price to pay for quality and comfort in a town that was once the centre of the world. Come and see for yourself - you won't be disappointed!
				</p><a onclick="readMore('13')" class="myBtn">Read more</a>

				<button id="myBtn12">More Details</button>

					<!-- The Modal -->
						<div id="myModal12" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/kelantan/Hotel Perdana 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 331 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://g.page/liumenhotel?share"target="_blank">46-56, Jalan Tokong, Kampung Dua, 75200 Melaka</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6062881161
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.liumenhotel.com/"target="_blank">https://www.liumenhotel.com/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/melaka/Rosa Malacca.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="14">
				<h3>Rosa Malacca</h3><hr>
				<p>ROSA MALACCA, a designer lifestyle hotel with a ‘STAY EAT and SHOP’ concept, awarded 2018 BCI Asia Merit Interior Design Award, 2020 The STAR Property
				'The Best Interior Design - Contemporary Lifestyle' Award, 2020/2021 International Asia Pacific 'Best Hotel Interior Malaysia' Award. Located at the very
				heart of UNESCO World Heritage City Melaka, it’s away from the hustle and bustle of city traffic. Set within leisure walk, it is 1km from Melaka Histrorical
				<span class="dots">...</span><span class="more" style="display: none;">sites and 1.6km walk from Jonker Street and Stadthuys.
				Within the property, free of charge open parking lots on ground floor with CCTV and around the clock Security Personnel on watch. 24hours Front Desk service.
				Level 1, features Bica & Co Cafe which offers favorite western, fusion and local dishes. Also, house brand merchandises are available for sale at RS General Store
				in the lobby area. Various bedroom categories are located from level 2 to level 6, are well equipped from fixtures to amenities and facilities. Gym is on Level 7
				for those who loves to sweat it out. Inbound/outbound Melaka Sentral Bus Terminal is located 6.2km away while Melaka International Airport Batu Berendam is 10.1km away.
				</p><a onclick="readMore('14')" class="myBtn">Read more</a>

				<button id="myBtn13">More Details</button>

					<!-- The Modal -->
						<div id="myModal13" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/melaka/Rosa Malacca 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 116 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://g.page/rosamalacca?share"target="_blank">212, Jalan Parameswara, Kampung Bandar Hilir, 75000 Melaka</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6062819888
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://rosa.com.my/"target="_blank">https://rosa.com.my/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/melaka/Treasures Hotel & Suites.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="15">
				<h3>Treasures Hotel & Suites</h3><hr>
				<p>Treasures Hotel and Suites is a Siheyuan (Chinese central-courtyard) style boutique hotel in the heart of Malacca City, Malaysia. A seamless fusion of raw
				industrial, Balinese and heritage design elements give the hotel its unique character. Built with large rooms, bathrooms and beds, the hotel is great for
				couples, friends, and families of any size.
				<span class="dots">...</span><span class="more" style="display: none;">
				Treasures Hotel and Suites is just a stone's throw away from UNESCO World Heritage sites: The Stadthuys and Jonker
				Street, and is surrounded by excellent restaurants. The building was built in the 1930s with a major refurbishment and extension in 2017. We at Treasures Hotel
				and Suites aspire to deliver best-in-class personal service, bolstered by superior amenities and comfort, to all our valued Guests
				</p><a onclick="readMore('15')" class="myBtn">Read more</a>

				<button id="myBtn14">More Details</button>

					<!-- The Modal -->
						<div id="myModal14" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/melaka/Treasures Hotel & Suites 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 227 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://g.page/treasureshotel?share"target="_blank">108, Jalan Bendahara, Melaka City, 75100 Melaka</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6067755151
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://treasureshotel.com/"target="_blank">https://treasureshotel.com/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/melaka/Casa del Rio Melaka.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="15">
				<h3>Casa del Rio Melaka</h3><hr>
				<p>Casa del Rio, Melaka, part of The Boutique Collection by HPL Hotels & Resorts, is located on Jalan Kota Laksamana, Melaka, a literal 2 minute walk away from
				the popular Jonkers Walk and heritage pic. Keen observers will pick out the Arabic, Chinese and Dutch influences woven into the dominantly Mediterranean
				architecture. <span class="dots">...</span><span class="more" style="display: none;">This boutique hotel, offering first class services, is already a striking
				addition to the historic skyline of the city. The hotel's 66 guest rooms and suites, each covering a minimum of 50 sq meters, uniquely feature dressing areas, bathrooms, split level bedrooms and private balconies as well as a number of
				unique personal touches. Aiming to provide an "at Home" atmosphere, Casa del Rio is a sanctuary from the city's bustle, with spaces for indulgent reflective solitude
				or stimulating interactive conversation depending on the choice of the traveller.
				</p><a onclick="readMore('15')" class="myBtn">Read more</a>

				<button id="myBtn15">More Details</button>

					<!-- The Modal -->
						<div id="myModal15" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/melaka/Casa del Rio Melaka 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 338 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/8cQLACc7wyKo8vSK6"target="_blank">88, Jalan Laksamana, Taman Kota Laksamana, 75200 Melaka</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6062896888
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://casadelrio-melaka.com/"target="_blank">https://casadelrio-melaka.com/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/negeri sembilan/Grand Lexis Port Dickson.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="16">
				<h3>Grand Lexis Port Dickson</h3><hr>
				<p>Awarded for the most number of swimming pools in a resort by the Malaysian Book of Records, each of the 317 Balinese-inspired villas in the five-star Grand Lexis
				Port Dickson comes with its own private pool for unsurpassed privacy and convenience. <span class="dots">...</span><span class="more" style="display: none;">
				Dwellers can enjoy peace, tranquillity and rejuvenation while being spoilt in the luxurious comfort of the resort.
				</p><a onclick="readMore('16')" class="myBtn">Read more</a>

				<button id="myBtn16">More Details</button>

					<!-- The Modal -->
						<div id="myModal16" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/negeri sembilan/Grand Lexis Port Dickson 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 360 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://g.page/grandlexisportdickson?share"target="_blank">Batu 2, Jalan Seremban, 71000 Port Dickson, Negeri Sembilan</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6066532200
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.grandlexispd.com/"target="_blank">https://www.grandlexispd.com/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/negeri sembilan/Lexis Port Dickson.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="17">
				<h3>Lexis Port Dickson</h3><hr>
				<p>Lexis Port Dickson is a charming Port Dickson resort designed with a tropical Balinese touch that combines elegance and comfort. Nestled in a cosy environment,
				all guestrooms come with balcony and are accented with Balinese-inspired tumble stone and<span class="dots">...</span><span class="more" style="display: none;">
				tropical hardwood flooring, elevated bedrooms as well as open concept bathroom with transparent glass panel for underneath seawater viewing.
				</p><a onclick="readMore('17')" class="myBtn">Read more</a>

				<button id="myBtn17">More Details</button>

					<!-- The Modal -->
						<div id="myModal17" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/negeri sembilan/Lexis Port Dickson 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 180 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://g.page/TheLexisPortDickson?share"target="_blank">Batu 2, Jalan Seremban, 71000 Port Dickson, Negeri Sembilan</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6066532200
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.lexispd.com/"target="_blank">https://www.lexispd.com/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/negeri sembilan/Thistle Port Dickson Resort.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="18">
				<h3>Thistle Port Dickson Resort</h3><hr>
				<p>Looking for a place to stay in Port Dickson? Then look no further than Thistle Port Dickson Resort, a family-friendly resort that brings the best of Port Dickson
				to your doorstep.As your “home away from home,” the resort rooms offer a flat screen TV and air conditioning, and getting online is easy, with free wifi available.
				<span class="dots">...</span><span class="more" style="display: none;">
				Guests have access to room service, a concierge, and a coffee shop while staying at Thistle Port Dickson Resort. In addition, Thistle Port Dickson Hotel offers a pool
				and a poolside bar, which will help make your Port Dickson trip additionally gratifying. And, as an added convenience, there is free parking available to guests.
				During your visit, be sure to check out a popular Port Dickson oyster restaurant such as Weng Yin Seafood Village, which is a short distance from
				Thistle Port Dickson Hotel.If you’re looking for things to do, you can check out Upside Down Art Gallery (1.1 mi) or Funny Haunted Adventure (0.3 mi),
				which are popular pic amongst tourists, and they are all within walking distance.We’re sure you’ll enjoy your stay at Thistle Port Dickson Resort as you
				experience everything Port Dickson has to offer.
				</p><a onclick="readMore('18')" class="myBtn">Read more</a>

				<button id="myBtn18">More Details</button>

					<!-- The Modal -->
						<div id="myModal18" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/negeri sembilan/Thistle Port Dickson Resort 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 211 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/JHaeMofKPyz1EDh1A"target="_blank">KM16, Jalan Pantai Teluk Kemang, 71050 Port Dickson, Negeri Sembilan</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6066482828
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.thistle.com.my/portdickson/"target="_blank">https://www.thistle.com.my/portdickson/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/negeri sembilan/Royale Chulan Seremban.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="19">
				<h3>Royale Chulan Seremban</h3><hr>
				<p>Royale Chulan Seremban (formerly Known as The Royale Bintang Resort and Spa Seremban) is situated at the Lake Garden district of the state capital of Negeri Sembilan Darul
				Khusus. This 4-star suburban property offers guests a place where their utmost comfort is provided through excellent amenities and accommodations.
				<span class="dots">...</span><span class="more" style="display: none;">
				Both business and leisure travellers will get to appreciate the view of the hilly landscapes of Seremban and the culture of hospitality Royale Chulan Seremban is known for.
				</p><a onclick="readMore('19')" class="myBtn">Read more</a>

				<button id="myBtn19">More Details</button>

					<!-- The Modal -->
						<div id="myModal19" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/negeri sembilan/Royale Chulan Seremban 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 120 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/9cWHpn6VwRdg2wHj8"target="_blank">Jalan Dato A.S Dawood, Seremban, 70100 Seremban, Negeri Sembilan</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6067666666
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.royalechulan.com/Seremban/Home.aspx"target="_blank">https://www.royalechulan.com/Seremban/Home.aspx</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/penang/Shangri-La's Rasa Sayang Resort & Spa.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="20">
				<h3>Shangri-La's Rasa Sayang<br>Resort & Spa</h3><hr>
				<p>Overlooking Batu Feringgi Beach, Shangri-La's Rasa Sayang Resort & Spa, Penang offers spacious rooms surrounded by 30 acres of tropical gardens.
				It features two outdoor swimming pools in the Garden Wing and one adult pool in the Rasa Wing. Free WiFi is available throughout the property.
				<span class="dots">...</span><span class="more" style="display: none;">
				Hotel offers free shuttle services to the UNESCO heritage city of George Town. Rasa Sayang Resort & Spa has a 9-hole golf course and an Eco Center.
				Guests can workout at the well-equipped gym or enjoy massages and treatments like aromatherapy at CHI, The Spa. The swimming pools and yoga pavilion
				are other good relaxation options.
				</p><a onclick="readMore('20')" class="myBtn">Read more</a>

				<button id="myBtn20">More Details</button>

					<!-- The Modal -->
						<div id="myModal20" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/penang/Shangri-La's Rasa Sayang Resort & Spa 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 505 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/8oKgP9cWrHRqKA9A7"target="_blank">Batu Feringgi Main Road Batu Feringgi Main Road, Jalan Batu Ferringhi, 11100 Batu Ferringhi, Pulau Pinang</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6048888888
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.shangri-la.com/en/penang/rasasayangresort/"target="_blank">https://www.shangri-la.com/en/penang/rasasayangresort/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/penang/The Edison George Town, Penang.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="21">
				<h3>The Edison George Town, Penang</h3><hr>
				<p>A beautifully restored Anglo-Colonial mansion, the interior design is a quirky take on Penang with whimsical touches of heritage within.
				The fresh concept combines timeless elegance, extending a blend of modern and traditional elements with quality and charm. Offering 35 luxuriously
				appointed guestrooms and an unyielding commitment to comfort,exceptional guest service and gracious hospitality; one is bound to remember - The Edison Experience.
				<span class="dots">...</span><span class="more" style="display: none;">
				</p><a onclick="readMore('21')" class="myBtn">Read more</a>

				<button id="myBtn21">More Details</button>

					<!-- The Modal -->
						<div id="myModal21" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/penang/The Edison George Town, Penang 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 334 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://g.page/theedisongeorgetown?share"target="_blank">15, Lebuh Leith, George Town, 10200 George Town, Pulau Pinang</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6042622990
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.theedisonhotels.com/"target="_blank">https://www.theedisonhotels.com/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>
			</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/penang/PARKROYAL Penang Resort.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="22">
				<h3>PARKROYAL Penang Resort</h3><hr>
				<p>Surrounded by the lush greenery in Batu Ferringhi beach or "Foreigner's Rock," PARKROYAL Penang Resort is an idyllic retreat offering delightful hospitality
				as warm as tropical sun. The resort is situated right on the beach and within walking distance to the famed Batu Ferringhi Night Market,
				<span class="dots">...</span><span class="more" style="display: none;">
				well-connected to island-wide pic including ESCAPE theme park,Entopia (Butterfly Farm), Georgetown, the oldest colonial city in Malaysia and listed as a UNESCO World Cultural Heritage Site in 2008, iconic temples,
				The Habitat, Penang Hill and many more. It is also situated 45-minutes from Penang International Airport (PIA).
				</p><a onclick="readMore('22')" class="myBtn">Read more</a>

				<button id="myBtn22">More Details</button>

					<!-- The Modal -->
						<div id="myModal22" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/penang/PARKROYAL Penang Resort 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 257 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/iYwvQhXn6CCf3VRt7"target="_blank">PARKROYAL Penang Resort Batu Ferringhi Beach, 11100 Batu Ferringhi, Pulau Pinang</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6048862288
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.panpacific.com/en/hotels-and-resorts/pr-penang.html"target="_blank">https://www.panpacific.com/en/hotels-and-resorts/pr-penang.html</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/penang/Bayview Beach Resort.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="23">
				<h3>Bayview Beach Resort</h3><hr>
				<p>At Bayview Beach Resort Penang, a tropical garden filled with slender palms is all that separates you from the long stretch of enticing white sand at Batu Ferringhi
				beach. Painted fishing boats ply the waters of the Straits of Malacca as they have done for centuries, creating a scenic backdrop for your Penang holiday.
				<span class="dots">...</span><span class="more" style="display: none;">
				Adventurous guests can try parasailing and jet-skiing at our Watersports Centre, while the garden massage hut offers a romantic option for honeymooning couples. You can relax in
				our outdoor Jacuzzis or the serene spa. If you’re feeling active, our well-equipped, air-conditioned gym overlooks the garden, and tennis, volleyball and basketball
				courts reside among the trees. This is also one of the best family hotels in Penang, with dedicated play areas, professional babysitting services and 2 out of 4
				swimming pools specially designed with children in mind.
				</p><a onclick="readMore('23')" class="myBtn">Read more</a>

				<button id="myBtn23">More Details</button>

					<!-- The Modal -->
						<div id="myModal23" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/penang/Bayview Beach Resort 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 167 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/wgzwz6nxf3NuKJ1h8"target="_blank">Batu Ferringhi Beach, 11100 Batu Ferringhi, Pulau Pinang</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6048861111
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.bayviewhotels.com/hotel/bayview-beach-resort-penang/"target="_blank">https://www.bayviewhotels.com/hotel/bayview-beach-resort-penang/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/pahang/The Lakehouse, Cameron Highlands.jpg">
			</div>

			<div class="booking-details">
				<h3>The Lakehouse, Cameron Highlands</h3><hr>
				<p>Located 200km north of Kuala Lumpur, set against lush state reserve forests 1,000m above sea level in the Cameron Highlands, The Lakehouse is a Tudor-style country house overlooking the Sultan Abu Bakar Lake.
				</p>

				<button id="myBtn24">More Details</button>

					<!-- The Modal -->
						<div id="myModal24" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/pahang/The Lakehouse, Cameron Highlands 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 546 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/MVL5FBt3JXCteJj4A"target="_blank">30th Mile, Jalan Ringlet - Sungai Koyan, Sungai Khazanah, 39000 Ringlet, Pahang</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6054956152
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://lakehouse-cameron.com/"target="_blank">https://lakehouse-cameron.com/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/pahang/Colmar Tropicale.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="24">
				<h3>Colmar Tropicale</h3><hr>
				<p>Colmar Tropicale was modeled after 16th century Colmar town, north east of Alsace, France, also incorporatingarchitectural designs and elements from ancient
				surrounding villages <span class="dots">...</span><span class="more" style="display: none;">of Riquewihr, Turckheim and Kaysersberg.
				The realization of this French themed village derived from the wish list of the Malaysia's fourth Prime Minister, Tun Dr. Mahathir bin Mohamad,
				who upon his visit to the region of Alsace were so impressed, that it inspired Tan Sri Vincent Tan, the founder of
				Berjaya Corporation Berhad to replicate the actual Colmar town in Malaysia.The resort comprised of 235 rooms and suites, offers 8 food & beverage outlets / lounges
				with food variety ranging from local & international cuisine to an authentic French fine dining restaurant. It also offers meeting rooms and banqueting facilities.
				</p><a onclick="readMore('24')" class="myBtn">Read more</a>

				<button id="myBtn25">More Details</button>

					<!-- The Modal -->
						<div id="myModal25" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/pahang/Colmar Tropicale 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 208 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/VmYZx7BuVNHHrg2L8"target="_blank">KM 48 Persimpangan Bertingkat, Lebuhraya Karak, Bukit Tinggi, 28750 Bentong, Pahang</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6092213666
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.colmartropicale.com.my/"target="_blank">https://www.colmartropicale.com.my/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>

			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/pahang/Hyatt Regency Kuantan Resort.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="25">
				<h3>Hyatt Regency Kuantan Resort</h3><hr>
				<p>Located on the stunning beachfront of Teluk Cempedak, on the east coast of peninsular Malaysia and within proximity to Kuantan city, capital of Pahang, the
				refurbished Hyatt Regency Kuantan Resort is the perfect place for making meaningful connections that last a lifetime.
				<span class="dots">...</span><span class="more" style="display: none;">
				300 guestrooms and suites that have been completely rebuilt, including new family oriented rooms
				</p><a onclick="readMore('25')" class="myBtn">Read more</a>

				<button id="myBtn26">More Details</button>

					<!-- The Modal -->
						<div id="myModal26" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/pahang/Hyatt Regency Kuantan Resort 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 261 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://g.page/hyattregencykuantanresort?share"target="_blank">Teluk Cempedak, 25050 Kuantan, Pahang</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6092213666
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.hyatt.com/en-US/hotel/malaysia/hyatt-regency-kuantan-resort/kuakt"target="_blank">https://www.hyatt.com/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>

			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/pahang/Swiss-Garden Hotel & Residences, Genting Highland.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="26">
				<h3>Swiss-Garden Hotel & Residences, Genting Highland</h3><hr>
				<p>A stone's throw away from the Genting Highlands Peak, the hotel is in a prime location unobstructed by the hustle and bustle of the city with a myriad of
				lifestyle amenities;<span class="dots">...</span><span class="more" style="display: none;">
				and an ideal environment with fresh air and mountain climate of 19°C–25°C.
				Swiss-Garden Hotel & Residences, Genting Highlands as the group’s latest addition, open its door to the world marking it as the chain’s 11th Hotel.
				</p><a onclick="readMore('26')" class="myBtn">Read more</a>

				<button id="myBtn27">More Details</button>

					<!-- The Modal -->
						<div id="myModal27" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/pahang/Swiss-Garden Hotel & Residences, Genting Highland 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 143 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/ZNU19Lj6ZtB3uPyx8"target="_blank">Windmill Upon Hills, Jalan Permai, 69000 Genting Highlands, Pahang</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+60392130777
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.swissgarden.com/residences-genting/"target="_blank">https://www.swissgarden.com/residences-genting/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>

			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/perak/Travelodge Ipoh.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="27">
				<h3>Travelodge Ipoh</h3><hr>
				<p>Travelodge debuts in Ipoh in January 2020 as the city’s first internationally-branded hotel, with more than 250 newly refurbished guestrooms in a fantastic
				location that offers comfort, convenience and connectivity for our guests. Just 10 minutes by car from the airport, Travelodge Ipoh is in an ideal location that
				caters to both business and leisure travellers.<span class="dots">...</span><span class="more" style="display: none;">
				The hotel is in close proximity to the business district and well-known historical, cultural and culinary pic,
				yet it’s far enough away from the city-centre bustle to offer a sense of relaxation and serenity. Boasting panoramic views of the nearby Ipoh Turf Club and a suite
				of meeting and dining facilities – including The Lodge, a multi-use communal and dining space – the hotel is the perfect venue for leisure, business and MICE.
				</p><a onclick="readMore('27')" class="myBtn">Read more</a>

				<button id="myBtn28">More Details</button>

					<!-- The Modal -->
						<div id="myModal28" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/perak/Travelodge Ipoh 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 105 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://g.page/TravelodgeIpoh?share"target="_blank">Jalan Raja Dihilir, 30350 Ipoh, Perak</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6052428888
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.travelodgehotels.asia/hotel/travelodge-ipoh/"target="_blank">https://www.travelodgehotels.asia/hotel/travelodge-ipoh/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>

			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/perak/M Boutique Station 18.jpg">
			</div>

			<div class="booking-details">
				<h3>M Boutique Station 18</h3><hr>
				<p>Welcome to the Jazzed Up verison of M Boutique in Pengkalan, Station 18, Perak! Located close to Aeon Mall, Station 18, M Boutique Station 18 is biggish yet small,
				with all the convenience of shopping at our doorstep.
				</p>

			<button id="myBtn29">More Details</button>

					<!-- The Modal -->
						<div id="myModal29" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/perak/M Boutique Station 18 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 95 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://g.page/mboutiquestation18?share"target="_blank">15 - 23 Jalan Pengkalan Barat 35, Taman Pengkalan Jaya, Station 18, 31650 Ipoh, Perak</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6053211666
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://s18.mboutiquehotels.com/"target="_blank">https://s18.mboutiquehotels.com/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>
			</div>

		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/perak/Bedrock Hotel, Ipoh.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="28">
				<h3>Bedrock Hotel, Ipoh</h3><hr>
				<p>Welcome to Bedrock Hotel, Ipoh, your Ipoh “home away from home.” Bedrock Hotel, Ipoh aims to make your visit as relaxing and enjoyable as possible, which is why so
				many guests continue to come back year after year.
				<br>Close to some of Ipoh's most popular landmarks, such as Ipoh Town Hall and Old Post Office (0.8 mi) and Ipoh Kallumalai Murugan Temple (1.1 mi), Bedrock Hotel,
				Ipoh is a great destination for tourists.
				<span class="dots">...</span><span class="more" style="display: none;">
				<br>Rooms at Bedrock Hotel, Ipoh provide a flat screen TV, air conditioning, and blackout curtains, and guests can stay connected with free wifi.
				<br>In addition, while staying at Bedrock Hotel, Ipoh guests have access to a coffee shop and baggage storage. You can also enjoy breakfast. Need a place to park?
				Free parking is available at Bedrock Hotel, Ipoh.
				<br>Travellers looking for seafood restaurants can head to Pusing Public Seafood Restaurant, Seafood, The Museum New Concept In Tow, or Restoran Mun Choong S/B.
				</p><a onclick="readMore('28')" class="myBtn">Read more</a>

				<button id="myBtn30">More Details</button>

					<!-- The Modal -->
						<div id="myModal30" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/perak/Bedrock Hotel, Ipoh 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 183 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/wQtGCr5v8Su1GwEM9"target="_blank">13-15, Jalan Che Tak, Taman Jubilee, 30300 Ipoh, Perak</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6052413031
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="http://bedrockhotelipoh.com/"target="_blank">http://bedrockhotelipoh.com/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>

			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/perak/Ipoh Bali Hotel.jpg">
			</div>

			<div class="booking-details">
				<h3>Ipoh Bali Hotel</h3><hr>
				<p>The Ipoh Bali Hotel is located in the heart of Ipoh with Balinese stay experience. The traditional bamboo cages, the antique rustic natural woods with luxurious
				furnishing used extensively in the decor at lobby creates a sophisticated contemporary design born from Balinese architecture and interior design.
				</p>

				<button id="myBtn31">More Details</button>

					<!-- The Modal -->
						<div id="myModal31" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/perak/Ipoh Bali Hotel 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 228 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/Ecu693MsNM7D8wnUA"target="_blank">12, Lorong Cheah Cheang Lim, 30350 Ipoh, Perak</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6052420222
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://ipohbalihotel.com/standardroom/"target="_blank">https://ipohbalihotel.com/standardroom/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/perlis/The Putra Regency Hotel.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="29">
				<h3>The Putra Regency Hotel</h3><hr>
				<p>Finding an ideal hotel in Kangar does not have to be difficult. Welcome to Putra Palace, a nice option for travellers like you.
				As your “home away from home,” the hotel rooms offer a refrigerator, a minibar, and air conditioning, and getting online is easy, with free internet access
				available.<span class="dots">...</span><span class="more" style="display: none;">
				<br>Guests have access to 24 hour front desk, 24 hour check-in, and room service while staying at Putra Palace. In addition, Putra Palace Hotel offers a pool and free breakfast,
				which will help make your Kangar trip additionally gratifying. And, as an added convenience, there is free parking available to guests.
				<br>While in Kangar be sure to experience nearby Asian restaurants such as Hannah's Cookies, Restoran Anjung Keli, or Blackwood Coffee & Chocolate.
				Putra Palace puts the best of Kangar at your fingertips, making your stay both relaxing and enjoyable.
				</p><a onclick="readMore('29')" class="myBtn">Read more</a>

				<button id="myBtn32">More Details</button>

					<!-- The Modal -->
						<div id="myModal32" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/perlis/The Putra Regency Hotel 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 127 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/Vd7rWgVKvQoRHbXr9"target="_blank">135, Persiaran Jubli Emas, 01000 Kangar, Perlis</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6049767755
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://theregencyhotel.my/theputraregency/"target="_blank">https://theregencyhotel.my/theputraregency/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>

			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/perlis/T Hotel Kuala Perlis.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="30">
				<h3>T Hotel Kuala Perlis</h3><hr>
				<p>Finding an ideal budget friendly hotel in Kuala Perlis does not have to be difficult. Welcome to T Hotel Kuala Perlis, a nice option for travellers like you.
				Free wifi is offered to guests, and rooms at T Hotel Kuala Perlis offer a flat screen TV and air conditioning.
				<br>During your stay, take advantage of some of the amenities offered, <span class="dots">...</span><span class="more" style="display: none;">
				including 24 hour front desk and shops. Guests of T Hotel Kuala Perlis are also welcome to enjoy a pool, located on site. For travellers arriving by car, free parking is available.
				<br>While in Kuala Perlis, you may want to check out some of the restaurants that are a short walk away from T Hotel Kuala Perlis, including Hai Thien Seafood
				(0.3 mi), Kak Su Laksa (0.3 mi), and Mona Ikan Bakar & Makanan Laut (0.2 mi).
				<br>Looking for something to do in Kuala Perlis? Al Hussain Mosque (Floating Mosque) (0.1 mi) is a popular attraction that is within walking distance of T Hotel
				Kuala Perlis.
				</p><a onclick="readMore('30')" class="myBtn">Read more</a>

				<button id="myBtn33">More Details</button>

					<!-- The Modal -->
						<div id="myModal33" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/perlis/T Hotel Kuala Perlis 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 85 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/g4bbGedj6RSiopXm7"target="_blank">1, Persiaran Putra Timur, Pekan Kuala Perlis, 02000 Kuala Perlis, Perlis</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6049853888
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="http://thotel.com.my/hotels/perlis"target="_blank">http://thotel.com.my/hotels/perlis</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>

			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/sabah/Hyatt Regency Kinabalu.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="31">
				<h3>Hyatt Regency Kinabalu</h3><hr>
				<p>Experience five-star Sabahan hospitality at Hyatt Regency Kinabalu, the premier choice for business and leisure travellers to Sabah, the Land Below the Wind.
				This luxury hotel in Sabah is a mere 15 minutes drive from Kota Kinabalu International Airport, offering a central location in the heart of the city close to tourist
				pic and stunning views of the famed sunsets in Kota Kinabalu.<span class="dots">...</span><span class="more" style="display: none;">
				Unwind in one of our 288 spacious rooms and suites all exquisitely designed with sophisticated
				comfort in mind plus some of the best views in Kota Kinabalu including those of the sparkling South China Sea or the Kinabalu city surroundings. Dining options at our
				three Kinabalu restaurants and bars are a food aficionado's delight with some of the best food the city has to offer. Be it a dip in the blue waters of the outdoor
				pool, a relaxing massage at the Avantang Spa and fitness centre or a party at our Shenanigan's Fun Pub, our Kota Kinabalu hotel in Sabah has it all for you.
				</p><a onclick="readMore('31')" class="myBtn">Read more</a>

				<button id="myBtn34">More Details</button>

					<!-- The Modal -->
						<div id="myModal34" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/sabah/Hyatt Regency Kinabalu 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 270 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://g.page/hyattregencykinabalu?share"target="_blank">Jalan Dato Salleh Sulong, Pusat Bandar Kota Kinabalu, 88991 Kota Kinabalu, Sabah</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6088221234
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.hyatt.com/en-US/hotel/malaysia/hyatt-regency-kinabalu/bkiki"target="_blank">https://www.hyatt.com/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>

			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/sabah/Hilton Kota Kinabalu.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="32">
				<h3>Hilton Kota Kinabalu</h3><hr>
				<p>Hilton Kota Kinabalu is enhanced by its prime location in the heart of the business district with easy access to the airport. The Hotel features a stunning lobby
				decorated with crystal chandeliers to a rooftop swimming pool with a sweeping view of the city.
				With a range of stylish and ergonomically designed rooms and suites, authentic dining experiences and state-of-the-art
				<span class="dots">...</span><span class="more" style="display: none;">facilities for weddings, meetings and events, Hilton Kota Kinabalu offers both business and leisure travelers a
				memorable stay like no other.
				</p><a onclick="readMore('32')" class="myBtn">Read more</a>

				<button id="myBtn35">More Details</button>

					<!-- The Modal -->
						<div id="myModal35" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/sabah/Hilton Kota Kinabalu 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 208 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://g.page/HiltonKotaKinabalu?share"target="_blank">Jalan Tunku Abdul Rahman, Asia City, 88000 Kota Kinabalu, Sabah</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6088356000
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.hilton.com/en/hotels/bkikkhi-hilton-kota-kinabalu/"target="_blank">https://www.hilton.com/en/hotels/bkikkhi-hilton-kota-kinabalu/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>

			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/sabah/Le Meridien Kota Kinabalu.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="33">
				<h3>Le Meridien Kota Kinabalu</h3><hr>
				<p>Le Meridien Kota Kinabalu is a contemporary 5 star hotel, strategically located at the heart and city center of downtown Kota Kinabalu across the fresh and handicraft markets and
				Kota Kinabalu waterfront. Overlooking the sea, Le Meridien Kota Kinabalu features newly renovated rooms, leisure outdoor pool, a sunset rooftop bar and a pool side bar and cafe.
				<span class="dots">...</span><span class="more" style="display: none;">
				Convenient within easy walking distance of other local pic like Gaya Street in less than 10 minutes walk, retail and entertainment facilities in less than 20 minutes walk
				like Centrepoint, Suria and Imago Shopping Malls. Enjoy access to local art gallery, golf courses and other island excursions
				</p><a onclick="readMore('33')" class="myBtn">Read more</a>

				<button id="myBtn36">More Details</button>

					<!-- The Modal -->
						<div id="myModal36" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/sabah/Le Meridien Kota Kinabalu 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 270 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/UCSJiJjSmcFMVivu6"target="_blank">Jalan Tun Fuad Stephens, Sinsuran Kompleks, 88000 Kota Kinabalu, Sabah</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6088322222
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.marriott.com/hotels/travel/bkimd-le-meridien-kota-kinabalu/"target="_blank">https://www.marriott.com/hotels/travel/bkimd-le-meridien-kota-kinabalu/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>

			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/sarawak/Kingwood Boutique Hotel.jpg">
			</div>

			<div class="booking-details">
				<h3>Kingwood Boutique Hotel</h3><hr>
				<p>Kingwood Boutique Hotel first began life in 1986 as Rinwood Inn. What began as a simple act of hospitality quickly became the inspiration upon which the
				Kingwood Group was found. Kingwood Boutique Hotel is on a mission to capture the heart of the discerning nomad. Your room is ready. Welcome home.
				</p>

				<button id="myBtn37">More Details</button>

					<!-- The Modal -->
						<div id="myModal37" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/sarawak/Kingwood Boutique Hotel 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 148 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/VoFb1yPxGv4gkhrA7"target="_blank">826, Jalan Yu Seng Utara, 98000 Miri, Sarawak</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6085415888
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="http://kingwoodmiri.com.my/"target="_blank">http://kingwoodmiri.com.my/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/sarawak/Mulu Marriott Resort & Spa.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="34">
				<h3>Mulu Marriott Resort & Spa</h3><hr>
				<p>Experience 5-star luxury in a lush tropical Borneo rainforest with Mulu Marriott Resort & Spa in Mulu, Malaysia - just five minutes from Gunung Mulu National Park,
				a UNESCO World Heritage Site. Wake each morning in a luxurious room suspended on a walkway set in the forest.
				<span class="dots">...</span><span class="more" style="display: none;">
				Suitable getaway for family vacations, couple retreat,
				adventure seekers, business meetings and intimate wedding destination.
				</p><a onclick="readMore('34')" class="myBtn">Read more</a>

				<button id="myBtn38">More Details</button>

					<!-- The Modal -->
						<div id="myModal38" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/sarawak/Mulu Marriott Resort & Spa 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 291 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/Z2Q3FKEYk5P9fLnN6"target="_blank">Jalan Temenggong Datuk Oyong Lawai, 98000 Miri, Sarawak</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6085421121
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.marriott.com/hotels/travel/myymu-mulu-marriott-resort-and-spa/"target="_blank">https://www.marriott.com/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>

			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/sarawak/The Ranee Boutique Suites.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="35">
				<h3>The Ranee Boutique Suitesa</h3><hr>
				<p>The Ranee is an exclusive 24-room boutique hotel strategically located in the heart of Kuching's picturesque Old Town (14km from Kuching International Airport).
				Stylishly rebuilt from two traditional 19th century shophouses and ingeniously adapted to modern standards of plush comfort,
				 <span class="dots">...</span><span class="more" style="display: none;">
				The Ranee is unique in that every spacious room/suite is different - designed to express its own individuality, charm and character.Step into The Ranee and you will
				be enchanted by the magic of old and new - a fusion style inspired by Sarawak's rich colonial heritage and mysterious ethnic cultures.<br>In catering to the discerning
				traveller, The Ranee boasts an all-day dining/bar serving local and international cuisine, a cafe offering freshly baked delicacies, an in-house tour desk, and even
				a business meeting room.The Ranee is capable of hosting intimate cocktail receptions for functions up to 40pax (product launches, team building, informal business
				gatherings, private dinner parties, etc). At The Ranee we'll take you on a journey that celebrates the charm and romance of a bygone era.
				</p><a onclick="readMore('35')" class="myBtn">Read more</a>

				<button id="myBtn39">More Details</button>

					<!-- The Modal -->
						<div id="myModal39" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/sarawak/The Ranee Boutique Suites 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 216 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/Sv85f7Yqk8HtnmYN8"target="_blank">7, Jalan Main Bazaar, Main Bazaar, 93000 Kuching, Sarawak</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6082258833
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://theranee.com/"target="_blank">https://theranee.com/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>

			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/selangor/Bangi Resort Hotel.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="36">
				<h3>Bangi Resort Hotel</h3><hr>
				<p>A picturesque 5-star business resort, located midway between the capital's International airport and Kuala Lumpur city centre; and next door to Malaysia's
				administrative capital, Putrajaya and the Multimedia Super Corridor in Cyberjaya - a 10 to 20 minutes drive, makes Bangi Resort Hotel an ideal choice for
				retreats. <span class="dots">...</span><span class="more" style="display: none;">
				The 256 guest room hotel offers 3 restaurants, a lounge bar, a Grand Ballroom and 26 function rooms of various sizes.
				</p><a onclick="readMore('36')" class="myBtn">Read more</a>

				<button id="myBtn40">More Details</button>

					<!-- The Modal -->
						<div id="myModal40" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/selangor/Bangi Resort Hotel 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 221 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/Sv85f7Yqk8HtnmYN8"target="_blank">Off, Persiaran Bandar, Bangi Golf Club, 43650 Bandar Baru Bangi, Selangor</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+60382102222
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.bangiresorthotel.com/en-us/home/"target="_blank">https://www.bangiresorthotel.com/en-us/home/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>

			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/selangor/Sunway Pyramid Hotel.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="37">
				<h3>Sunway Pyramid Hotel</h3><hr>
				<p>The newly renovated Sunway Pyramid Hotel features 564 Deluxe guestrooms and suites, incorporating new category of family rooms and suites. Strategically located
				in a bustling suburb of Kuala Lumpur, the Sunway Pyramid Hotel is 35 minutes from Kuala Lumpur International Airport and 25 minutes from the city centre.
				 <span class="dots">...</span><span class="more" style="display: none;">The hotel forms part of the iconic integrated development Sunway City,
				a multi-award winning destination that offers a cluster of three (3) hotels with a total of 1,433 guestrooms, suites and pool villas, a theme park and shopping mall.
				<br>Sunway Pyramid Hotel also features 21 purpose-built family rooms and suites, designed to
				accommodate an increase in family and leisure travelers to Sunway City. The Family Room is suitable for those travelling with young children for its vibrant
				interiors and a bunk bed. Whereas the new Family Suite, are amongst the Hotel’s largest rooms offering comfortable spaces, with added extras like two (2)
				bathrooms, a mini refrigerator, a microwave and bedding options for up to six (6) persons. Guests staying at Sunway Pyramid Hotel will be spoilt for choice
				when it comes to the extensive food and beverage available in the hotel and Sunway Pyramid shopping mall with over 170 food and beverage outlets. For those
				on-the-go or looking for a quick bite, Kaffeinate located at the hotel’s main lobby, serves freshly brewed gourmet coffees, specialty teas and a range of
				light snacks.
				</p><a onclick="readMore('37')" class="myBtn">Read more</a>

				<button id="myBtn41">More Details</button>

					<!-- The Modal -->
						<div id="myModal41" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/selangor/Sunway Pyramid Hotel 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 258 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/THf1fRAjuKRMveVt6"target="_blank">Persiaran Lagoon, Bandar Sunway, 47500 Petaling Jaya, Selangor</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+60374928000
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.sunwayhotels.com/sunway-pyramid"target="_blank">https://www.sunwayhotels.com/sunway-pyramid</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>

			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/selangor/New World Petaling Jaya.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="38">
				<h3>New World Petaling Jaya</h3><hr>
				<p>As one of the tallest hotels in one of Malaysia’s most green and pleasant cities, New World Petaling Jaya Hotel majestically rises amidst quiet residential
				neighbourhoods to offer spectacular views from every vantage point. Only 30 minutes’ drive from the bustling Malaysian capital of Kuala Lumpur, this Petaling Jaya
				luxury hotel is the first to introduce the signature sociability and attentive service of New World Hotels & Resorts to a country which is already renowned for the
				warmth of its hospitality. <span class="dots">...</span><span class="more" style="display: none;">
				<br>Panoramic views of the city are on display from all its 300 stylish guestrooms and suites, 30th floor swimming pool, adjacent rooftop
				restaurant, one of the highest elevation bars in Petaling Jaya. A convenient location near the city centre, refreshingly modern and expansive guestrooms, and a
				bounty of options for world-renowned.
				</p><a onclick="readMore('38')" class="myBtn">Read more</a>

				<button id="myBtn42">More Details</button>

					<!-- The Modal -->
						<div id="myModal42" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/selangor/New World Petaling Jaya 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 272 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://g.page/NewWorldPetalingJaya?share"target="_blank">Paradigm, 1, Jalan SS 7/26, 47301 Petaling Jaya, Selangor</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+60376820000
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://petalingjaya.newworldhotels.com/en/"target="_blank">https://petalingjaya.newworldhotels.com/en/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>

			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/selangor/Sheraton Petaling Jaya Hotel.jpg">
			</div>

			<div class="booking-details">
				<h3>Sheraton Petaling Jaya Hotel</h3><hr>
				<p>Located in the satellite city of Petaling Jaya (fondly referred to as ‘PJ’ to local residents) and just 10 kilometers west of Malaysia’s capital city of
				Kuala Lumpur, Sheraton Petaling Jaya Hotel is accessible from Federal Highway, the main arterial road linking PJ and Kuala Lumpur.
				</p>

				<button id="myBtn43">More Details</button>

					<!-- The Modal -->
						<div id="myModal43" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/selangor/Sheraton Petaling Jaya Hotel 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 235 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://g.page/sheratonpetalingjaya?share"target="_blank">Lorong Utara C, Pjs 52, 46200 Petaling Jaya, Selangor</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+60376228888
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.marriott.com/hotels/travel/szbsi-sheraton-petaling-jaya-hotel/"target="_blank">https://www.marriott.com/hotels/travel/szbsi-sheraton-petaling-jaya-hotel/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/terengganu/Resorts World Kijal.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="39">
				<h3>Resorts World Kijal</h3><hr>
				<p>Take your family on an East Coast adventure, and experience Malaysia’s heritage traditions that you would otherwise only seen and heard about.
				Immerse yourself with your family on a journey filled with exotic cuisines, historical architectures and the beautiful 7.6km stretch of white sand
				beach while being surrounded by the tranquil ambience away from the usual daily pressure of work.
				<span class="dots">...</span><span class="more" style="display: none;">
				Make your family bonding fun and memorable.
				</p><a onclick="readMore('39')" class="myBtn">Read more</a>

				<button id="myBtn44">More Details</button>

					<!-- The Modal -->
						<div id="myModal44" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/terengganu/Resorts World Kijal 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 230 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/64LSggKTyqoWZwAC6"target="_blank">Km 28, 24210, Jalan Kemaman - Dungun, Kampung Meraga Beris, 24100 Kijal, Terengganu</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6098641188
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.rwkijal.com/"target="_blank">https://www.rwkijal.com/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>

			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/terengganu/The Qamar Paka, Terengganu.jpg">
			</div>

			<div class="booking-details">
				<h3>The Qamar Paka, Terengganu</h3><hr>
				<p>Perfect Getaway~~ An experience you must explore! The serene shores of Paka is ideally built with The Qamar Paka, that brings you a whole new meaning of
				total comfort. It's simply the best escape from the hustle of urban madness to the undisturbed town of Paka, a quaint suburb in the state of Terengganu,
				East Cost of Peninsular Malaysia.
				</p>

				<button id="myBtn45">More Details</button>

					<!-- The Modal -->
						<div id="myModal45" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/terengganu/The Qamar Paka, Terengganu 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 286 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/vLQ7zsPiNjh3guK48"target="_blank">Lot 473, Kampung Cacar, 23100 Paka, Terengganu</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6098273366
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="http://www.theqamar.com/"target="_blank">http://www.theqamar.com/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/kuala lumpur/EQ Kuala Lumpur.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="40">
				<h3>EQ Kuala Lumpur</h3><hr>
				<p>Following the major redevelopment of the original Hotel Equatorial Kuala Lumpur, the new EQ has taken its place as a stylish addition to the city’s charm.
				The prime Golden Triangle location makes popular pic like the famous Petronas Twin Towers and Pavilion Kuala Lumpur, the award-winning shopping destination
				with over 550 retail outlets and restaurants, just a short walk away. Whether it's shopping, sightseeing, restaurants or nightlife, everything is conveniently close-by.
				<span class="dots">...</span><span class="more" style="display: none;">
				<br>The hotel is also home to some of the city’s most highly-regarded restaurants and bars. Nipah, the all-day dining restaurant serves pan-Asian and Western cuisine.
				Kampachi is an award-winning restaurant that has been around for over four decades, offering the finest of Japanese cuisine. Étoile Bistro is a rebirth of the
				previous street-side bistro, now swankier than ever. Bottega Lounge serves Mediterranean bites with daily afternoon tea.
				<br>Its signature rooftop Sky51 is the next landmark entertainment destination under the stars - Sabayon is a contemporary European fine dining restaurant with an
				award-winning wine list and Blue is the bespoke speakeasy rooftop bar and lounge with tantalizing cocktails and delicacies. The 5-star accredited hotel is also
				Green Building Index (GBI) Gold-certified and is among the most energy and resource-efficient buildings in the city.
				</p><a onclick="readMore('40')" class="myBtn">Read more</a>

				<button id="myBtn46">More Details</button>

					<!-- The Modal -->
						<div id="myModal46" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/kuala lumpur/EQ Kuala Lumpur 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 394 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://g.page/eqkualalumpur?share"target="_blank">EQ, Equatorial Plaza, Jalan Sultan Ismail, Kuala Lumpur, 50250 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+60327897777
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="http://www.theqamar.com/"target="_blank">http://www.theqamar.com/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>

			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/kuala lumpur/Mandarin Oriental, Kuala Lumpur.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="41">
				<h3>Mandarin Oriental, Kuala Lumpur</h3><hr>
				<p>Situated adjacent to the iconic PETRONAS Twin Towers, Mandarin Oriental, Kuala Lumpur is the city's leading luxury hotel with 629 well
				appointed rooms, suites and serviced apartments. Delight your senses with an array of cuisines showcased in ten innovative outlets.
				<br>Escape Kuala Lumpur's urban bustle at The Spa with rejuvenating facials, body treatments and award winning Signature Therapies for
				a holistic wellbeing.Take a dip at the infinity edge pool overlooking the spectacular city skyline or
				<span class="dots">...</span><span class="more" style="display: none;">
				be mesmerized by the magnificent display of KLCC Lake Symphony Fountain at the Esplanade KLCC. ♻️ 100% single-use plastic free hotel.
				</p><a onclick="readMore('41')" class="myBtn">Read more</a>

				<button id="myBtn47">More Details</button>

					<!-- The Modal -->
						<div id="myModal47" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/kuala lumpur/Mandarin Oriental, Kuala Lumpur 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 456 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://g.page/mandarin-oriental-kuala-lumpur?share"target="_blank">Kuala Lumpur City Centre, 50088 Kuala Lumpur, Federal Territory of Kuala Lumpur</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+60323808888
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.mandarinoriental.com/kuala-lumpur/petronas-towers/luxury-hotel"target="_blank">https://www.mandarinoriental.com/kuala-lumpur/petronas-towers/luxury-hotel</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>

			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/kuala lumpur/Lanson Place Bukit Ceylon Serviced Residences.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="42">
				<h3>Lanson Place Bukit Ceylon Serviced Residences</h3><hr>
				<p>Located in Kuala Lumpur Golden Triangle, overlooking panoramic views of the Kuala Lumpur Tower and the Petronas Twin Towers and within
				minutes’ walk from Changkat Bukit Bintang, Lanson Place Bukit Ceylon Serviced Residences combines modern luxury, tasteful elegance and
				residential comfort all under one roof.<span class="dots">...</span><span class="more" style="display: none;">
				<br>As a member of the “Small Luxury Hotels of the WorldTM”, the property offers 150 lavishly
				appointed one- to three-bedroom serviced apartments accompanied by all-encompassed amenities, facilities and unrivalled personalised
				services, bringing discerning guests a seamless and stylish lifestyle.
				</p><a onclick="readMore('42')" class="myBtn">Read more</a>

				<button id="myBtn48">More Details</button>

					<!-- The Modal -->
						<div id="myModal48" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/kuala lumpur/Lanson Place Bukit Ceylon Serviced Residences 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 335 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/1zTVM9pEUxETJF2W9"target="_blank">10, Jalan Ceylon, Bukit Ceylon, 50200 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+60327258888
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://bukitceylon.lansonplace.com/accommodation/"target="_blank">https://bukitceylon.lansonplace.com/accommodation/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>

			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/kuala lumpur/InterContinental Kuala Lumpur.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="43">
				<h3>InterContinental Kuala Lumpur</h3><hr>
				<p>A jewel in the heart of Malaysia, InterContinental Kuala Lumpur offers one of the most sought after locations in the city, making it
				an ideal urban retreat for both business and leisure travelers. The hotel is just steps away from the iconic Petronas Twin Towers and
				Kuala Lumpur Convention Centre and within walking distance to countless other shopping and entertainment activities.
				<span class="dots">...</span><span class="more" style="display: none;">
				<br>Choose to work in comfort or luxury in the 473 spaciously designed rooms,
				including 110 newly renovated Grand Premier Rooms that feature modern, earth
				tone furnishings and state-of-the-art enhancements. Wine and dine in style with a selection of restaurants including the award-wining
				Tatsu Japanese Restaurant, Tao Chinese Cuisine, Serena Brasserie, OneSixFive and Bentley's Pub. InterContinental Kuala Lumpur also boasts
				eight meeting rooms and two conference venues to host memorable events from an intimate group of 20 or a large conference of 600 people.
				</p><a onclick="readMore('43')" class="myBtn">Read more</a>

				<button id="myBtn49">More Details</button>

					<!-- The Modal -->
						<div id="myModal49" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/kuala lumpur/InterContinental Kuala Lumpur 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 284 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/B9jFVgjZLP9tcBZq9"target="_blank">165, Jalan Ampang, Kuala Lumpur, 50450 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+60327826000
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://kualalumpur.intercontinental.com/"target="_blank">https://kualalumpur.intercontinental.com/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>

			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/labuan/Hotel Labuan Point.jpg">
			</div>

			<div class="booking-details">
				<h3>Hotel Labuan Point</h3><hr>
				<p>Hotel Labuan Point is an island getaway, which close to the centre of Labuan town as well as the airport; Hotel Labuan Point targets
				both vacationers and those on business and leisure trip. Our nearest attraction is War Memorial, Botanical Garden, Peace park and the
				water village are close by, it is the ideal place for total relaxation.
				</p>

				<button id="myBtn50">More Details</button>

					<!-- The Modal -->
						<div id="myModal50" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/labuan/Hotel Labuan Point 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 127 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://g.page/HotelLabuanPoint?share"target="_blank">Lot 207508183, Jalan Okk Abdullah, 87000 Labuan, Labuan Federal Territory</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6087411444
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.hotellabuanpoint.com/"target="_blank">https://www.hotellabuanpoint.com/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/labuan/Palm Beach Resort & Spa.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="44">
				<h3>Palm Beach Resort & Spa</h3><hr>
				<p>Palm Beach Resort & Spa has come under a new wing of management. The 245 room resort which offer business leisure and tourists alike
				fantastic value accommodation. We would like to take this opportunity to introduce ourselves.
				<span class="dots">...</span><span class="more" style="display: none;">
				Palm Beach Resort & Spa announced that a new management structure for the resort has been implemented with
				effect from 01 January 2013. The resort is led by a management team
				comprising Mr Chai Tze Khee, Managing Director and a group of young and vibrant staff.
				</p><a onclick="readMore('44')" class="myBtn">Read more</a>

				<button id="myBtn51">More Details</button>

					<!-- The Modal -->
						<div id="myModal51" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/labuan/Palm Beach Resort & Spa 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 151 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/iVZLJmYbow4bUxh96"target="_blank">Jalan Batu Manikar, 87014 Labuan, Wilayah Persekutuan Labuan</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+6087418700
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://www.palmbeachresortspa.com/"target="_blank">https://www.palmbeachresortspa.com/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>

			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/putrajaya/The Everly Putrajaya.jpg">
			</div>

			<div class="booking-details">
			<div class="card" data-city="45">
				<h3>The Everly Putrajaya</h3><hr>
				<p>The Everly Putrajaya is a newly opened 382 bedroom hotel adjacent to the Alamanda Mall. We have a selection of superior, deluxe
				and executive rooms and suites over 15 floors. We offer complimentary wifi in rooms and public areas.Current facilities include a
				restaurant, lounge cafe, business centre and banqueting facilities which can accommodate in excess of 1000 guests.
				<span class="dots">...</span><span class="more" style="display: none;">
				<br>The swimming pool and temporary gym are now open for your enjoymnet. Our well appointed gym which will feature Technogym equipment
				is expected to open in the fourth quarter of 2014.
				</p><a onclick="readMore('45')" class="myBtn">Read more</a>

				<button id="myBtn52">More Details</button>

					<!-- The Modal -->
						<div id="myModal52" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/putrajaya/The Everly Putrajaya 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 96 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://goo.gl/maps/ovfKPSqRRDDSeYqf6"target="_blank">1, Jalan Alamanda 2, Presint 1, 62000 Putrajaya, Wilayah Persekutuan Putrajaya</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+60388922929
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="http://teg-hotels.com/b/everly-putrajaya/"target="_blank">http://teg-hotels.com/b/everly-putrajaya/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>

			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="booking-box">
			<div class="booking-img">
				<img src="pic/putrajaya/Zenith Putrajaya.jpg">
			</div>

			<div class="booking-details">
				<h3>Zenith Putrajaya</h3><hr>
				<p> Embark on a unique and luxurious journey at Zenith Putrajaya. Ideally situated by the Putrajaya Lakeside, Zenith Putrajaya offers
				gracious Malaysian Hospitality and five-star facilities. Renowned for its sleek design, impressive service and exquisite blend of luxury,
				comfort and style, the 13-storey landmark in the hub of Putrajaya has everything you need for business or leisure.
				</p>

				<button id="myBtn53">More Details</button>

					<!-- The Modal -->
						<div id="myModal53" class="modal">

					<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						</div>
								<div class="modal-body">
									<p>

									<img src="pic/putrajaya/Zenith Putrajaya 2.jpg" style="height:500px; width:700px;">
										<h3>Property amenities</h3>

										<p><i class="fa fa-product-hunt"></i> Free parking &ensp;
										<span><i class="fa fa-coffee"></i> Complimentary instant cofffee</span>
										</p>
										<p><i class="fa fa-wifi"></i> Free High Speed Internet (WiFi)&ensp;
										<span><i class="fa fa-wifi"></i> Paid wifi</span>
										</p>
										<p><i class="fa fa-bed"></i> Baggage storage &ensp;
										<span><i class="fa fa-bed"></i> 24-hour security</span>
										</p>
										<p><i class="fa fa-briefcase"></i> 24-hour check-in &ensp;
										<span><i class="fa fa-briefcase"></i> 24-hour front desk</span>
										</p>
										<p><i class="fa fa-tint"></i> Outdoor pool and Indoor pool&ensp;
										<span><i class="fa fa-automobile"></i> Taxi service</span>
										</p>
										<p><i class="fa fa-tint "></i> Fitness / spa changing rooms&ensp;
										<span><i class="fa fa-glass "></i> Bar</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Breakfast buffet&ensp;
										<span><i class="fa fa-flask "></i> Laundry service</span>
										</p>

										<h3>Room features</h3>
										<p><i class="fa fa-snowflake-o "></i> Air conditioning &ensp;
										<span><i class="fa fa-bed "></i> Blackout curtains</span>
										</p>
										<p><i class="fa fa-cutlery "></i> Minibar &ensp;
										<span><i class="fa fa-play-circle-o "></i> Flatscreen TV</span>
										</p>

										<h2>Price
										<p></i> RM 210 per day </p>
										</h2>

										<h3>Address and Contact</h3>
										<p><i class="fa fa-location-arrow"></i>
										<a href="https://g.page/zenithputrajayahotel?share"target="_blank">Jalan P2a, Presint 2, 62000 Putrajaya, Wilayah Persekutuan Putrajaya</a>
										</p>
										<p><i class="fa fa-phone"></i>
										+60388939993
										</p>

										<h3>Website</h3>
										<p><i class="fa fa-globe"></i>
										<a href="https://putrajaya.thezenithhotel.com/"target="_blank">https://putrajaya.thezenithhotel.com/</a>
										</p>

									</p>
								</div>
						<div class="modal-footer">
						</div>
						</div>

						</div>

			</div>
		</div>
	</div>

	</div>
</div>
</section>

<!--Footer-->
<section class="footer">
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<img class="footer-logo" src="image/logo.png">
		</div>

		<div class="col-md-3">
			<h4>Features</h4>
			<p class="hyper"><a  href="index.php">Home Page</a></p>
			<p class="hyper"><a  href="destinations.php">Destinations</a></p>
			<p class="hyper"><a  href="aboutus.html">About Us</a></p>
			<p class="hyper"><a  href="transportation.php">Transportation</a></p>
			<p class="hyper"><a  href="#">Place to Stay</a></p>
		</div>

		<div class="col-md-3">
			<h4>Quick Contact</h4>
			<p><i class="fa fa-phone-square"></i> +60105917200 (Mr. Chan)</p>
			<p><i class="fa fa-envelope"></i> hsdstarlord001@gmail.com</p>
			<!--<p><i class="fa fa-home"></i> Parkson, Bintang Mega Mall Lot 1657 Block 9, Jalan Miri Pujut, 98000 Miri, Sarawak</p>-->
		</div>

		<div class="col-md-3">
			<h4>Follow Us On</h4>

			<p class="hyper"><i class="fa fa-facebook-official"></i> <a  href="https://www.facebook.com/Atracci%C3%B3n-del-viajero-105745618263913" target="_blank">Facebook</a></p>
			<p class="hyper"><i class="fa fa-instagram"></i> <a  href="https://www.instagram.com/travelerattractions0057/" target="_blank">Instagram</a></p>
			<p class="hyper"><i class="fa fa-twitter"></i> <a  href="https://twitter.com/TravelAttracti1" target="_blank">Twitter</a></p>
		</div>
	</div><hr>
	<p class="copyright">Copyright <i class="fa fa-copyright"></i> All Rights Reserved</p>
</div>

<!--Button to scroll back top of the page-->
<a class="gotopbtn" href="#" style="text-decoration: none;">^</a>
</section>
<script src="js/menu.js"></script>
<script src="js/readtext.js"></script>
<script src="js/modal.js"></script>
<!--Javascript for the toggle menu-->
<script>
  var Menu = document.getElementById("menubar")

  Menu.style.maxHeight = "0px"

  function menutoggle(){
    if (Menu.style.maxHeight == "0px")
       {
         Menu.style.maxHeight = "200px";
       }

    else
       {
         Menu.style.maxHeight = "0px";
       }
  }
</script>

</body>
</html>
