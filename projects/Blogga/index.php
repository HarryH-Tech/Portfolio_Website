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
        <img src="images/wbw.png"> 
        <div class="caption left-align">
        </div>
      </li>
	  <!--
      <li>
        <img src="images/medium.png"> 
        <div class="caption right-align">
        </div>
      </li>
	  -->
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
					<div class="card-panel hoverable">
						<i class="material-icons large light-blue-text">store</i>
						<a href="store/login/store_login.php">
							<h4 id="link"> Blogga Merchandise</h4>
						</a>
						<p> 
							The Blogga store. Feel free to browse, we're just working on 
							getting it up and running at the moment.
						</p>
					</div>
				</div>
				<div class="col s12 m6">
					<div class="card-panel hoverable">
						<i class="material-icons large light-blue-text">favorite</i>
						<a href="favorites/favorite_articles.php">
							<h4 id="link">Favourite Articles</h4>
						</a>
						<p> Some of our favourtie articles from blogs around the internet. </p>
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
					<div class="card hoverable">
						<div class="card-image">
							<img src="images/techcrunch.png"/>
						</div>
						<div class="card-content">
							TechCrunch is an American online publisher
							focusing on the tech industry. The company 
							specifically reports on the business related
							to tech, technology news, analysis of 
							emerging trends in tech, and profiling of 
							new tech businesses and products.
						</div>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card hoverable">
						<div class="card-image">
							<img src="images/medium.png"/>
						</div>
						<div class="card-content">
							Medium is an online publishing platform 
							developed by Evan Williams and launched in 
							August 2012. It is owned by A Medium 
							Corporation. The platform is an example of 
							social journalism, having a hybrid collection
							of amateur and professional people and 
							publications, or exclusive blogs or 
							publishers on Medium, and is regularly 
							regarded as a blog host.
						</div>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card hoverable">
						<div class="card-image">
							<img src="images/wbw.png"/>
						</div>
						<div class="card-content">
							Wait But Why (WBW) is a website founded by 
							Tim Urban and Andrew Finn and written and 
							illustrated by Urban. The site covers a range
							of subjects as a long-form blog. Typical 
							posts involve long-form discussions of 
							various topics, including artificial intelligence, 
							outer space, and procrastination, using a 
							combination of prose and rough illustrations.
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	

	<!-- Contact Section -->
	<section id="contact" class="section section-contact scrollspy">
		<div class="container">
			<div class="row">
				<div class="col s12 m12">
					<div class="card-panel light-blue white-text center">
						<i class="material-icons">email</i>
						<h5>Contact Us</h5>
					</div>
					<div class='col s6 m6'>
						<ul class="collection with-header">
							
								<li class="collection-header">	
									<h4> Address </h4>
								</li>
								<li class="collection-item">
									Blogga Agency
								</li>
								<li class="collection-item">
									123, Blogga Street, Blogville, Blog City.
								</li>
						</ul>
					</div>
				
					<div class="col s6 m6">
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
			height: 800,
			transition: 500,
			interval: 5000
		});
		
		// Autocomplete
		const ac = document.querySelector('.autocomplete'); 
		M.Autocomplete.init(ac, {
			data: {
				"Techcrunch": null,
				"Readwrite": null,
				"Endgadet": null,
				"Waitbutwhy": null,
				"Medium": null
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
				} else if (text == "waitbutwhy") {
					let link = window.open("https://waitbutwhy.com/", "_blank");
					link.location;
				} else if (text == "medium") {
					let link = window.open("https://medium.com/", "_blank");
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