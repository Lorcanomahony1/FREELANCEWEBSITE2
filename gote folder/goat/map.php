<!DOCTYPE HTML>
<!--
Author: Kamron Bennett
Email: kamron@cmit.com.jm
Date: 21.02.14
Website: www.cmit.com.jm
-->
<html>
<head>
<meta name="viewport" content="initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Entertainment Listings, Ticket Sales all in One Place</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="Kamron J. Bennett" />
<meta name="google-site-verification" content="" />
<meta name="robots" content="index,follow" />
<meta name="CONTENT-LANGUAGE" content="EN" />
<meta name="revisit-after" content="7 days">
<meta name="copyright" content="2003 - 2014, CMIT - Solutions" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />  
<link rel="stylesheet" type="text/css" href="css/style_responsive.css" media="screen" />  
<link rel="stylesheet" type="text/css" href="css/fonts.css" media="screen" />
<link rel="shortcut icon" type="image/png" href="images/favicon.ico">


<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src='js/jquery.scrollto.js'></script>
<script type="text/javascript" src="js/stickydiv.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
</head>
<body>

<menu id="responsive">
	<img src="images/menu.png" alt="menu" />
</menu>

<!--Slide 1 BEGINS Here, this is the home Page-->
<div id="slide1">
	<div id="slide1_content">
		<img src="images/main_image.png" alt="Logo" />
		<h1 class="products">A New Way to Look at Entertainment</h1>
	</div>


    <header>
    <div id="responsive_logo">
    	<a href="#slide1" class="logo"><img src="images/logo.png" /></a>
    </div>
          <nav id="non_responsive">
			<img src="images/logo.png" alt="Heightster" />
            <ul>
				<li><a href="#slide3" title="The Things we do">Features</a></li>
				<li><a href="#slide4" title="Why we do them">Plans</a></li>
				<li><a href="#slide5" title="What we have done">Listings</a></li>
				<li><a style="border: 1px solid #FFFC07; border-radius: 5px;" title="Get in touch">Sign Up</a></li>
				<li><a style="border: 1px solid #FFFC07; border-radius: 5px;" title="Get in touch">Login</a></li>
            </ul>
        </nav>
    </header>
    <div class="clearthis"></div>
</div>



	<div class="twitter">
		<a href="#" target="_blank" rel="external nofollow" title="Twitter"><img src="images/twitter.png" alt="Twitter" /></a>
	</div>

	<div class="google_plus">
		<a href="#" target="_blank" rel=" external nofollow"><img src="images/google+.png" alt="Google Plus" /></a>
	</div>

	<div class="facebook">
		<a href="#" target="_blank" rel="external nofollow"><img src="images/facebook.png" alt="Facebook" /></a>
	</div>
<!--Slide 1 ENDS Here-->


<div id="slide5">
	<div id="slide5_content">
		<!-- <script>
		//testing the browser to see if it supports the map API
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(success);
			}
			else {
				error('Geolocation is not Supported in this Browser');
			}

			//getting the users location and storing it in variables
			navigator.geolocation.getCurrentPosition(success);
			function success(position) {
				var lat = position.coords.latitude;
				var long = position.coords.longitude;
			}

		</script>
		-->

<section id="wrapper">

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <article>

    </article>
<script>
function success(position) {
  var mapcanvas = document.createElement('div');
  mapcanvas.id = 'mapcontainer';
  mapcanvas.style.height = '500px';
  mapcanvas.style.width = '320px';

  document.querySelector('article').appendChild(mapcanvas);

  var coords = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
  
  var options = {
    zoom: 10,
    center: coords,
    mapTypeControl: false,
    navigationControlOptions: {
    	style: google.maps.NavigationControlStyle.SMALL
    },
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("mapcontainer"), options); 
  

  // User's present location on the map
  var marker = new google.maps.Marker({
      position: coords,
      map: map,
      title:"You are here!",
      icon: 'http://heightster.com/images/map-icons/user-position.png'
  });

  var marker2 = new google.maps.Marker({
	position: new google.maps.LatLng(17.135879, -61.851385),
	map: map,
	title: "Other Listing",
	icon: 'http://heightster.com/images/map-icons/bar.png'
	});

  var marker3 = new google.maps.Marker({
  	position: new google.maps.LatLng(18.439054, -64.568420),
  	map: map,
  	title: "Random Listing in East End",
  	icon: 'http://heightster.com/images/map-icons/jazzclub.png'
  });

  var marker4 = new google.maps.Marker({
  	position: new google.maps.LatLng(18.425575, -64.614924),
  	map: map,
  	title: "Pier Park Listing",
  	icon: 'http://heightster.com/images/map-icons/dance.png'
  });

  var marker5 = new google.maps.Marker ({
  	position: new google.maps.LatLng(18.415766, -64.619372),
  	map: map,
  	title: "Some Other Random Listing Again",
  	icon: 'http://heightster.com/images/map-icons/music_rock.png' 
  });

  var marker6 = new google.maps.Marker({
  	position: new google.maps.LatLng(18.401641, -64.676707),
  	map: map,
  	title: "Sugar Mill Hotel Listing",
  	icon: 'http://heightster.com/images/map-icons/bar.png'
  });

}

if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(success);
} else {
  error('Geo Location is not supported');
}

</script>
</section>






	</div>
</div>










































<footer>
	
</footer>


    </body>
</html>
