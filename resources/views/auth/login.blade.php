<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>
		<link
			rel="stylesheet"
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
			integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
			crossorigin="anonymous"
		/>
		<link
			rel="stylesheet"
			href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
			integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
			crossorigin="anonymous"
		/>

		<link rel="stylesheet" href="{{asset('public/css/style.css')}}" />

		<title>Eta-Ki Landing</title>
	</head>
	<body>
		<header>
			<nav
				id="main-nav"
				class="navbar fixed-top navbar-expand-lg navbar-dark"
			>
				<a class="navbar-brand" id="title" href="#">Eta-Ki</a>
				<button
					class="navbar-toggler"
					type="button"
					data-toggle="collapse"
					data-target="#main-nav-items"
					aria-controls="main-nav-items"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="main-nav-items">
					<ul class="navbar-nav mr-auto mt-auto mb-auto nav-left">
						<li class="nav-item">
							<a class="nav-link" href="#about-section">About </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Features</a>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto mt-auto mb-auto nav-right">
						<li class="nav-item nav-link">
							<button id="login-btn" class="btn btn-etaki">
								Log In
							</button>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<div class="container-fluid img-fluid hero-container">
			<div class="overlay"></div>
			<p id="hero-heading">Read about it on the Trend Report.</p>
			<br />
		</div>

		<div class="container-fluid">
			<div id="about-section">
				<div class="row mb-4">
					<div class="col-md-12">
						<h1 class="display-4 text-center mb-4">About</h1>
						<p class="text-center">
							Eta-ki is a new initiative by the TechLab that aims
							to manage all WebVR content in one centralised
							location.
							<br />It ranges from viewing 360 degree photographs
							to dissecting 3d models into its components.
						</p>
					</div>
				</div>
			</div>

			<div class="row mb-4">
				<div class="col-md-12">
					<h1 class="display-4 text-center mt-4 mb-2">Features</h1>
				</div>
			</div>
			<div class="container">
					<div class="row mb-4 ">
							<div class="col-sm-4 mt-4">
								<div class="feature-title">
									<h4><i class="fas fa-database"></i>Content Management System</h4>
								</div>
								<div class="feature-body">
										Stores multimedia content such as 360 Images & Video, 3D models and Audio.
								</div>
							</div>
							<div class="col-sm-4 mt-4">
								<div class="feature-title">
									<h4><i class="fas fa-arrows-alt"></i>Interactive Experiences</h4>
								</div>
								<div class="feature-body">
									Displays interactive VR experiences with the content using 'themes'.
								</div>
							</div>
							<div class="col-sm-4 mt-4">
								<div class="feature-title">
									<h4><i class="fas fa-cogs"></i>Based on WebVR API</h4>
								</div>
								<div class="feature-body">
										Uses the A-Frame framework to display VR and 3D content. You can also develop with any other WebVR or 360 library.
								</div>
							</div>
						</div>
						<div class="row mb-4">
							<div class="col-sm-4 mt-4">
								<div class="feature-title">
									<h4><i class="fas fa-universal-access"></i>Accesisble to all.</h4>
								</div>
								<div class="feature-body">
										Lightweight solution for all browsers and mobile devices.
								</div>
							</div>
							<div class="col-sm-4 mt-4">
								<div class="feature-title">
									<h4><i class="fas fa-vr-cardboard"></i>VR-ready with VR headsets.</h4>
								</div>
								<div class="feature-body">
										VR headset support, including Oculus Rift & Go, Google Cardboard & Daydream,
								</div>
							</div>
							<div class="col-sm-4 mt-4">
								<div class="feature-title">
									<h4><i class="fas fa-edit"></i>Customisable</h4>
								</div>
								<div class="feature-body">
									Develop content using any WebVR or 3D library.
								</div>
							</div>
						</div>	
			</div>
			
		</div>
		<script
			src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
			integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
			integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
			crossorigin="anonymous"
		></script>
		<script
			src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
			integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
			crossorigin="anonymous"
		></script>
		<script src="{{asset('public/js/main.js')}}"></script>
	</body>
</html>
