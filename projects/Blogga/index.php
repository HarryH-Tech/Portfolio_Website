<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<style>
		<?php include "styles/main.css" ?>
	</style>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="https://kit.fontawesome.com/6ce008e176.js"></script>
	<title>Blogga</title>
</head>

<body id="home" class="scrollspy">
	<!-- Navbar -->
	<div class="navbar-fixed">
		<nav class="light-blue">
			<div class="container">
				<div class="nav-wrapper">
					<a href="#" class="brand-logo">Blogga</a>
					<a href="#" data-target="mobile-nav" class="sidenav-trigger"> 
						<i class="material-icons">menu</i>
					</a>
					<ul class="right hide-on-med-and-down">
						<li>
							<a href="#home">Home</a>
						</li>
						<li>
							<a href="#search">Search</a>
						</li>
						<li>
							<a href="#popular">Popular Blogs</a>
						</li>
						<li>
							<a href="#contact">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<ul class="sidenav" id="mobile-nav">
		<li>
			<a href="#home">Home</a>
		</li>
		<li>
			<a href="#search">Search</a>
		</li>
		<li>
			<a href="#popular">Popular Blogs</a>
		</li>
		<li>
			<a href="#contact">Contact</a>
		</li>
	</ul>
	
	<!-- Slider -->
	<section class="slider">
	    <ul class="slides">
      <li>
        <img src="images/techcrunch.png"> 
        <div class="caption center-align">
         
        </div>
      </li>
      <li>
        <img src="images/gizmodo.png"> 
        <div class="caption left-align">
        </div>
      </li>
      <li>
        <img src="images/readwrite.png"> 
        <div class="caption right-align">
        </div>
      </li>
    </ul>
	</section>
	
	<!-- Search section -->
	<section id="search" class="section section-search light-blue darken-2 
		white-text center scrollspy">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h4> Search Blogs </h4>
					<div class="input-field">
						<input class="white grey-text autocomplete" 
						id="autocomplete-input"
						placeholder="Techcrunch, Readwrite, Endgadget, etc..." >
				</div>
			</div>
		</div>
	</section>
	
	<!-- Icon Boxes Section -->
	<section class="section section-icons grey lighten-4 center">
		<div class="container">
			<div class="row">
				
				<div class="col s12 m6">
					<div class="card-panel">
						<i class="material-icons large light-blue-text">store</i>
						<a href="store/registration//store_login.php">
							<h4 id="link"> Blogga Merchandise</h4>
						</a>
						<p> 
							The Blogga store. Feel free to browse, we're just working on 
							getting it up and running at the moment.
						</p>
					</div>
				</div>
				<div class="col s12 m6">
					<div class="card-panel">
						<i class="material-icons large light-blue-text">favorite</i>
						<a href="favorites/favorite_articles.php">
							<h4 id="link">Favourite Articles</h4>
						</a>
						<p> Lorum ipsum sum </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Popular Blogs Section -->
	<section id="popular" class="section sectino-popular scrollspy">
		<div class="container">
			<div class="row">
				<h4 class="center">
					Popular Blogs
				</h4>
				<div class="col s12 m4">
					<div class="card">
						<div class="card-image">
							<img src="images/techcrunch.png"/>
						</div>
						<div class="card-content">
							Lorum pisum sum sdfgf dsdf gfrdes dfghg fdsdfgbh
							dfg rtgyh gtrt ghgtr tgyhj gtrt ghjg trtgyhj.
						</div>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card">
						<div class="card-image">
							<img src="images/gizmodo.png"/>
						</div>
						<div class="card-content">
							Lorum pisum sum sdfgf dsdf gfrdes dfghg fdsdfgbh
							dfg rtgyh gtrt ghgtr tgyhj gtrt ghjg trtgyhj.
						</div>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card">
						<div class="card-image">
							<img src="images/readwrite.png"/>
						</div>
						<div class="card-content">
							Lorum pisum sum sdfgf dsdf gfrdes dfghg fdsdfgbh
							dfg rtgyh gtrt ghgtr tgyhj gtrt ghjg trtgyhj.
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Social Media Section -->
	<section class="section section-follow light-blue darken-2 white-text center">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<h4>Follow Blogga</h4>
					<h6> Follow us on Social Media!</h6>
					<a href="#" class="white-text">
						<i class="fab fa-facebook fa-4x"></i>
					</a>
					<a href="#" class="white-text">
						<i class="fab fa-twitter fa-4x"></i>
					</a>
					<a href="#" class="white-text">
						<i class="fab fa-linkedin fa-4x"></i>
					</a>
					<a href="#" class="white-text">
						<i class="fab fa-google-plus fa-4x"></i>
					</a>
				</div>
			</div>
		</div>		
	</section>
	
	<!-- Contact Section -->
	<section id="contact" class="section section-contact scrollspy">
		<div class="container">
			<div class="row">
				<div class="col s12 m6">
					<div class="card-panel light-blue white-text center">
						<i class="material-icons">email</i>
						<h5>Contact Us</h5>
					</div>
					<ul class="collection with-header">
						<li class="collection-header">
							<h4> Location </h4>
						</li>
						<li class="collection-item">
							Blogga Agency
						</li>
						<li class="collection-item">
							123, Blogga Street, Blogville, Blog City.
						</li>
					</ul>
				</div>
				<div class="col s12 m6">
					<div class="card-panel grey lighten-3">
						<h5> Please fill out this form</h5>
							<div class="input-field">
								<input type="text" placeholder="Name">
							</div>
							<div class="input-field">
								<input type="text" placeholder="Email">
							</div>
							<div class="input-field">
								<textarea class="materialize-textarea" placeholder="Message"></textarea>
							</div>
							<input type="submit" value="Submit" class="btn">
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Footer -->
	<footer class="section light-blue darken-2 white-text center">
		<p class="flow-text">Blogga &copy; 2019</p>
	</footer>


		
	<!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script>
		// Sidenav
		const sideNav = document.querySelector('.sidenav'); 
		M.Sidenav.init(sideNav, {});
		
		// Slider
		const slider = document.querySelector('.slider'); 
		M.Slider.init(slider, {
			indicators: false,
			height: 500,
			transition: 500,
			interval: 5000
		});
		
		// Autocomplete
		const ac = document.querySelector('.autocomplete'); 
		M.Autocomplete.init(ac, {
			data: {
				"Techcrunch": null,
				"Readwrite": null,
				"Endgadet": null
				//ADD MORE LATER!!!
			},
		
			onAutocomplete: function(val) {
				let text = document.querySelector('#autocomplete-input').value;
				if(text == "Techcrunch") {
					let link = window.open("https://techcrunch.com/", "_blank");
					link.location;
				} else if(text== "Readwrite") {
					let link = window.open("https://readwrite.com/", "_blank");
					link.location;
				} else if (text == "Endgadget") {
					let link = window.open("https://endgadget.com/", "_blank");
					link.location;
				}
			}
		});
		
		// Material Boxed
		const mb = document.querySelectorAll('.materialboxed');
		M.Materialbox.init(mb, {});
		
		// Scrollspy
		const ss = document.querySelectorAll('.scrollspy');
		M.ScrollSpy.init(ss, {});
	
	</script>
	
</body>
</html>