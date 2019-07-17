<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript" src="particles.js"></script>
	<link rel="icon" href="styles/images/icon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!-- Links/scripts for footer icons -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.3/css/mdb.min.css" rel="stylesheet">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.3/js/mdb.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>


	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Portfolio</title>
	<style>
		<?php include "styles/index_styles.css"; ?>
	</style>
</head>
<body data-spy="scroll">

<section id="header">
	<div id="particles-js">

<nav class="navbar navbar-expand-md navbar-light bg-primary">
  <button class="navbar-toggler navbar-inverse" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
		<li class="navbar_li">
			<a class="nav-link" href="#about_me">About Me </a>
		</li>
		<li class="navbar_li">
			<a class="nav-link" href="#my_projects">Projects</a>
		</li> 
		<li class="navbar_li">
			<a class="nav-link" href="#contact">Get In Touch</a>
		</li>
    </ul>

  </div>
</nav>


  
  
<br>
<br>

		<div id="header_content">
			<h1 class="display-4">Harry Harrison</h1>
			<h2 class="display-5">Web Developer<span class="blink">_</span></h2>
		
		
		<div class="icons">
		
					
					<a href='#' target='blank'><img class='header_img' src='styles/images/intro_links/linkedin.jpg' alt="LinkedIn Icon"></a>
				
				<a href='#' target='blank'><img class='header_img' src='styles/images/intro_links/github.png' alt="Github Icon"></a>
				<a href='#' target='blank'><img class='header_img' src='styles/images/intro_links/cv.jpg' alt="CV Icon"></a>
				<a href='#' target='blank'><img class='header_img' src='styles/images/intro_links/twitter.png' alt="Twitter Icon"></a>
			</div>	
			

		</div>
		<div class="arrow bounce"><span style="color: black">&#x25BC;</span></div>
		</div>
	
	</div>
</section>
		<hr id="first_hr">

	<!-- About Me -->
	<section id="about_me">
	
		<div class="card hoverable">
			<div class="card-body">
			<h5 class="card-title">ABOUT ME</h5>
			<div class="card-body">
				I'm a web developer with 2 years of experience 
				building and maintaining websites and web apps using 
				a wide range of technologies. 
			</div>
			<hr>
			<h6 class="card-title">Languages and Libraries</h6>
			<ul class="skills_icons">
				<li>
					<img  data-html="true" title="<b>HTML</b>" data-toggle="tooltip" class="skills_icon" src="styles/images/skills_icons/html.png" alt="HTML icon"/>
				</li>
				<li>
					<img data-html="true" title="<b>CSS</b>" data-toggle="tooltip" class="skills_icon" src="styles/images/skills_icons/css.png" alt="CSS icon"/>
				</li>
				<li>
					<img data-html="true" title="<b>Javascript</b>" data-toggle="tooltip"  class="skills_icon" src="styles/images/skills_icons/js.png" alt="Javascript icon"/>
				</li>
				<li>
					<img data-html="true" title="<b>SASS</b>" data-toggle="tooltip" class="img-fluid" style="max-width: 100%; height: auto;" src="styles/images/skills_icons/sass.png" alt="SASS icon"/>
				</li>
				<li>
					<img data-html="true" title="<b>Bootstrap</b>" data-toggle="tooltip"  src="styles/images/skills_icons/bootstrap.png" alt="Bootstrap icon"/>
				</li>
				<li>
					<img data-html="true" title="<b>Materializecss</b>" data-toggle="tooltip" class="img-fluid" style="max-width: 100%; height: auto;" src="styles/images/skills_icons/materialize.png" alt="Materializecss icon"/>
				</li>
				<li>
					<img data-html="true" title="<b>Vue.js</b>" data-toggle="tooltip" class="skills_icon" src="styles/images/skills_icons/vue.png" alt="Vue icon"/>
				</li>
				<li>
					<img data-html="true" title="<b>jQuery</b>" data-toggle="tooltip" class="skills_icon" src="styles/images/skills_icons/jquery.png" alt="jQuery icon"/>
				</li>
				<li>
					<img data-html="true" title="<b>PHP</b>" data-toggle="tooltip" class="skills_icon" src="styles/images/skills_icons/php.png" alt="PHP icon"/>
				</li>
				<li>
					<img data-html="true" title="<b>MySQL</b>" data-toggle="tooltip" class="skills_icon" src="styles/images/skills_icons/mysql.png" alt="MySQL icon"/>
				</li>
				<li>
					<img data-html="true" title="<b>Git</b>" data-toggle="tooltip" class="skills_icon" src="styles/images/skills_icons/git.png" alt="Git icon"/>
				</li>		
			</ul>
		</div>
	</section>
	
	
	
	<!-- Projects -->
	<hr>
	<section id="my_projects">
	<h3 id="my_projects_title">
		PROJECTS
	</h3>
	<p id="project_intro_text">
		Here you can see 6 of my side projects.</br>To see more please click <a href="#" target="_blank">here</a>.
	</p>
	<section  id="projects">
		<div class="flex-container">
			<div onclick="selectActiveButtonAndShowCards(this.id)" id="all" class="all project_option_type">All</div>
			<div onclick="selectActiveButtonAndShowCards(this.id)" id="frontend" class="frontend project_option_type">Frontend</div>
			<div onclick="selectActiveButtonAndShowCards(this.id)" id="backend" class="backend project_option_type">Backend</div>
		</div>
		<div class="all">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="frontend_projects">
							<div class="card project_card hoverable">
								<img class="card-img-top" src="styles/images/project_screenshots/crypto_screenshot.png" alt="Cryptocurrency project screenshot"/>					
								<div id="repo_live_site_options">
									<strong><a class="repo" href="#" target="_blank">GITHUB REPO</a></strong>
									<strong><a href="projects/Cryptocurrency_Image/index.html" target="_blank">LIVE SITE</a></strong>
								</div>
								<hr>
								<div class="card-title">
									<h3>
										Cryptocurrency App
									</h3>
								</div>
								<div class="card-text">
									<p class="project_text">
										This app is based on one of the projects from Wes Bos's "30 Days 
										of Javascript" course. It allows the user to alter the width and 
										color of the image border and change the bluriness of the image. 
										It also connects to 3 .txt files to obtain information about the 
										currency the user clicked on and uses a jQuery plugin to make
										the image map responsive
									</p>
								</div>
								<hr>
								<div class="project_tech_icons_holder">
									<img class="skills_icon" src="styles/images/skills_icons/html.png" alt=""/>
									<img class="skills_icon" src="styles/images/skills_icons/css.png" alt=""/>
									<img class="skills_icon" src="styles/images/skills_icons/js.png" alt=""/>
									<img class="skills_icon" src="styles/images/skills_icons/jQuery.png" alt=""/>
								</div>
							</div>
						</div>
					</div>
					
								<div class="col-md-6">
									<div class="frontend_projects">
										<div class="card project_card hoverable">
											<div >
												<img class="card-img-top" src="styles/images/project_screenshots/.png" alt="Astronomy app project screenshot"/>					
											</div>
											<div id="repo_live_site_options">
												<strong><a class="repo" href="#" target="_blank">GITHUB REPO</a></strong>
												<strong><a href="projects/Astronomy_App/dist" target="_blank">LIVE SITE</a></strong>
											</div>
											<div class="card-title">
												<h3>
													Astronomy News and Search
												</h3>
											</div>
											<div class="card-text">
												<p class="project_text">
													This website uses PHP and MySQL to 
												</p>
											</div>
											<hr>
											<div class="project_tech_icons_holder">
												<img class="skills_icon" src="styles/images/skills_icons/html.png" alt=""/>
												<img class="skills_icon" src="styles/images/skills_icons/css.png" alt=""/>
												<img class="skills_icon" src="styles/images/skills_icons/js.png" alt=""/>
												<img class="skills_icon" src="styles/images/skills_icons/materialize.png" alt=""/>
												<img class="skills_icon" src="styles/images/skills_icons/vue.png" alt=""/>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="frontend_projects">
										<div class="card project_card hoverable">
											<div >
												<img class="card-img-top" src="styles/images/project_screenshots/.png" alt="Tech Stocks and News project screenshot"/>					
											</div>
											<div id="repo_live_site_options">
												<strong><a class="repo" href="#" target="_blank">GITHUB REPO</a></strong>
												<strong><a href="projects/Astronomy_App/dist" target="_blank">LIVE SITE</a></strong>
											</div>
											<div class="card-title">
												<h3>
													Technology Stocks and News
												</h3>
											</div>
											<div class="card-text">
												<p class="project_text">
													ghjk
												</p>
											</div>
											<hr>
											<div class="project_tech_icons_holder">
												<img class="skills_icon" src="styles/images/skills_icons/html.png" alt="HTML Icon"/>
												<img class="skills_icon" src="styles/images/skills_icons/css.png" alt="CSS Icon"/>
												<img class="skills_icon" src="styles/images/skills_icons/js.png" alt="Javascript Icon"/>
												<img class="skills_icon" src="styles/images/skills_icons/materialize.png" alt="Materialize Icon"/>
												<img class="skills_icon" src="styles/images/skills_icons/vue.png" alt="Vue Icon"/>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
				<div class="container">
					<div class="row">
			<div class="col-md-6">
					<div class="backend_projects">
						<div class="card project_card hoverable">
							<div >
								<img class="card-img-top" src="styles/images/project_screenshots/tesla_shop.png" alt="Tesla shop project screenshot"/>					
							</div>
							<div id="repo_live_site_options">
									<strong><a class="repo" href="#" target="_blank">GITHUB REPO</a></strong>
									<strong><a href="projects/Tesla_shop/login.php" target="_blank">LIVE SITE</a></strong>
							</div>
							<hr>
							<div class="card-title">
									<h3>
										Tesla Shop
									</h3>
							</div>
							<div class="card-text">
								<p class="project_text">
									I used a PHP and MySQL database to allow the user to register, login and buy a car from the store. 
									I plan to add a "My Account" section in the future and a "Forgot Password" option on the login page.
									It also uses Materializecss for the styling.
								</p>
							</div>
							<hr>
							<div class="project_tech_icons_holder">
								<img class="skills_icon" src="styles/images/skills_icons/html.png" alt=""/>
								<img class="skills_icon" src="styles/images/skills_icons/css.png" alt=""/>
								<img class="skills_icon" src="styles/images/skills_icons/bootstrap.png" alt=""/>
								<img class="skills_icon" src="styles/images/skills_icons/php.png" alt=""/>
								<img class="skills_icon" src="styles/images/skills_icons/mysql.png" alt=""/>
							</div>
						</div>
					</div>
				</div>
			
						<div class="col-md-6">
							<div class="backend_projects">
									<div class="card project_card hoverable">
										<div >
											<img class="card-img-top" src="styles/images/project_screenshots/blogga.png" alt="Tesla shop project screenshot"/>					
										</div>
										<div id="repo_live_site_options">
											<strong><a class="repo" href="#" target="_blank">GITHUB REPO</a></strong>
											<strong><a href="projects/Blogga/index.php" target="_blank">LIVE SITE</a></strong>
										</div>
										<div class="card-title">
										<h3>
											Blogga
										</h3>
									</div>
									<div class="card-text">
										<p class="project_text">
											This website uses PHP and MySQL to 
										</p>
									</div>
									<hr>
									<div class="project_tech_icons_holder">
										<img class="skills_icon" src="styles/images/skills_icons/html.png" alt=""/>
										<img class="skills_icon" src="styles/images/skills_icons/css.png" alt=""/>
										<img class="skills_icon" src="styles/images/skills_icons/js.png" alt=""/>
										<img class="skills_icon" src="styles/images/skills_icons/materialize.png" alt=""/>
										<img class="skills_icon" src="styles/images/skills_icons/php.png" alt=""/>
										<img class="skills_icon" src="styles/images/skills_icons/mysql.png" alt=""/>
									</div>
								</div>
							</div>
						</div>
						
		</div>	
	</section>
			
	<!-- Contact Me -->
	<hr>
	<section id="contact">
		<div class="container">
			<h3>GET IN TOUCH</h3>
			<form>
				<input class="contact_input" type="text" name="name" placeholder="Name"><br>
				<input class="contact_input" type="email" name="email" placeholder="Email"><br>
				<input class="contact_input" type="text" name="subject" placeholder="Subject"><br>
				<textarea class="contact_input" name="subject" placeholder="Your Message"></textarea><br>
				<input type="submit" value="Send" id="send">
			</form>
		</div>
	</section>
	<br>
	<!-- Back to top button -->
	<div id="top_button_container">
		<a class="btn btn-primary" href="#header"> Return To Top </a>
	</div>
	<br>
	<!-- Footer -->
<footer class="footer">
  <div class="container text-center">
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-github"></i></a>
  </div>
</footer>
<!-- Footer -->

  <!-- Footer Elements -->
  

	
	
	


	
<script type="text/javascript" src="index.js">
</script>


</body>
</html>

	