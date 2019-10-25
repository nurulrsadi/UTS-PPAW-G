<body>
		<!-- Nav -->
		<nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">
				<img src="images/logoajh.png" width="70" height="50" alt="">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Features</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Pricing</a>
					</li>
				</ul>
			</div>
		</nav>
		</div>
			</div>
				</div>
					<div id="banner">
						<div class="container">
							<div class="row">
								<div class="col-6 col-12-medium">
									<!-- Banner Copy -->
									<br> <br> 
									<p>Express your life, express your music !</p>								
									<a href="#login" class="button-large"  data-toggle="modal" data-target="#SigninModalCenter">BOOK YOUR STUDIO NOW !</a>
								</div>
										
								<div class="col-6 col-12-medium imp-medium">

									<!-- Banner Image -->
										<a href="studio.html" class="bordered-feature-image"><img src="images/stage.jpg" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Modal -->
					<div class="modal fade" id="SigninModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
						aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalCenterTitle">Log In</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form>
										<div class="form-group">
											<label for="exampleInputEmail1">Email address</label>
											<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
												placeholder="Enter email" required>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Password</label>
											<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
										</div>
										<div class="form-group form-check">
											<input type="checkbox" class="checkbox" value="" id="defaultCheck1">
											<label class="form-check-label" for="exampleCheck1">Remember me</label>
										</div>
										<button type="submit" class="btn btn-primary" #>Log In</button>
										<a href="#signup" class="btn btn-primary"  data-toggle="modal" data-target="#SignupModalCenter">Sign up</a>
										<h6><a href="#forgotpassword">Forgot password</a></h6>
									</form>
                				</div>
							</div>
						</div>
          			</div>         
			</section>
			<!--Signup Modal-->
			<div class="modal fade" id="SignupModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
				aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalCenterTitle">Sign Up</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form>
								<div class="form-group form-row">
									<div class="col">
										<label for="exampleInputFirstName">First Name</label>
										<input type="Firstname" class="form-control" id="FirstName" placeholder="First Name" required>
									</div>
									<div class="col">
										<label for="exampleInputLastName">Last Name</label>
										<input type="lastname" class="form-control" id="LastName" placeholder="Last Name">
									</div>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Email address</label>
									<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Password</label>
									<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
								</div>
								<div class="form-group">
									<label for="exampleInputConfrimPassword1">Confrim Password</label>
									<input type="password" class="form-control" id="exampleInputConfrimPassword1" placeholder="Confrim Password" required>
								</div>
								<button type="submit" class="btn btn-primary">Create Account</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</form>
						</div>
					</div>
				</div>
			</div>