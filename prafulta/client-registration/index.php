
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prafulta</title>

    <!-- Bootstrap -->
    <link type="text/css" href="../resources/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="../resources/modules/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
    <link type="text/css" href="../resources/modules/bootstrapvalidator-dist-0.5.2/dist/css/bootstrapValidator.min.css" rel="stylesheet" />
    <link type="text/css" href="../resources/css/radiance.css" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="../resources/modules/bootstrap-datepicker/js/bootstrap-datepicker.js" ></script>
    <script type="text/javascript" src="../resources/modules/bootstrapvalidator-dist-0.5.2/dist/js/bootstrapValidator.min.js" ></script>
    <script type="text/javascript" src="js/validate.js" ></script>
  </head>
  <body>
  	<div class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="container">

			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Prafulta</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      
		      <ul class="nav navbar-nav">
		        <li><a href="../appointment">Appointment</a></li>
		        <li class="active"><a href="../client-registration">Client Registration</a></li>
		      </ul>

		      <!--form class="navbar-form navbar-right" role="search">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search">
		        </div>
		        <button type="submit" class="btn btn-default">Submit</button>
		      </form-->
		    </div>			
		</div>
	</div>

	<div class="container">
		<div id="client-intake-module">
			<h2>Client Intake Form</h2>
			<form class="form-horizontal" id="client-register-form" action="registered.php" method="post" role="form">
				<!--start-->
				<div class="col-md-6 col-sm-12">
				<div id="reg-details">
					<div class="form-group">
						<h4 class="col-sm-offset-1 col-md-offset-1">Registration Details</h4>
					</div>
					<div class="form-group">
						<label for="register-date" class="col-sm-4 col-md-4 control-label">Date</label>
						<div class="col-sm-8 col-md-8">
							<input type="text" class="form-control" id="register-date" placeholder="Date of Registration">
						</div>
					</div>
					<div class="form-group">
						<label for="client-id" class="col-sm-4 col-md-4 control-label">Client ID</label>
						<div class="col-sm-8 col-md-8">
							<input type="text" class="form-control" id="client-id" placeholder="Client ID" name="clientid">
						</div>
					</div>
					<div class="form-group">
						<label for="client-name" class="col-sm-4 col-md-4 control-label">Client Name</label>
						<div class="col-sm-8 col-md-8">
							<input type="text" class="form-control" id="client-name" placeholder="Name of the client" name="clientname">
						</div>
					</div>
				</div>
				<div id="contact-details">
					<div class="form-group">
						<h4 class="col-sm-offset-1 col-md-offset-1">Contact Details</h4>
					</div>
					<div class="form-group">
						<label for="mobile-num" class="col-sm-4 col-md-4 control-label">Mobile</label>
						<div class="col-sm-8 col-md-8">
							<div class="input-group">
								<span class="input-group-addon">+91</span>
								<input type="text" class="form-control" id="mobile-number" placeholder="Client's Mobile Number" name="mob">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-4 col-md-4 control-label">Email</label>
						<div class="col-sm-8 col-md-8">
							<input type="text" class="form-control" id="email" placeholder="Client's Email ID" name="email">
						</div>
					</div>
				</div>
				<div id="personal-details">
					<div class="form-group">
						<h4 class="col-sm-offset-1 col-md-offset-1">Personal Details</h4>
					</div>
					<div class="form-group">
						<label for="dob" class="col-sm-4 col-md-4 control-label">Date of Birth</label>
						<div class="col-sm-8 col-md-8">
							<div class="input-group date" id="dob">
								<input type="text" class="form-control" placeholder="dd/mm/yyyy" name="dob" />
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="sex" class="col-sm-4 col-md-4 control-label">Gender</label>
						<div class="col-sm-8 col-md-8">
							<label class="radio-inline">
								<input type="radio" name="sex" id="male" value="m"> Male
							</label>
							<label class="radio-inline">
								<input type="radio" name="sex" id="female" value="f"> Female
							</label>
						</div>
					</div>
				</div>
				</div>

				<div class="col-md-6 col-sm-12">
					<div id="personal-details">
						<div class="form-group">
							<h4 class="col-sm-offset-1 col-md-offset-1">Personal Details</h4>
						</div>
						<div class="form-group">
							<label for="personal-address" class="col-sm-4 col-md-4 control-label">Personal Address</label>
							<div class="col-sm-8 col-md-8">
								<textarea rows="3" class="form-control" id="personal-address" placeholder="Personal Address" name="address"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="occupation" class="col-sm-4 col-md-4 control-label">Occupation</label>
							<div class="col-sm-8 col-md-8">
								<input type="text" class="form-control" id="occupation" placeholder="Occupation" name="occupation">
							</div>
						</div>
						<div class="form-group">
							<label for="qualification" class="col-sm-4 col-md-4 control-label">Qualification</label>
							<div class="col-sm-8 col-md-8">
								<input type="text" class="form-control" id="qualification" placeholder="Qualification" name="qualification">
							</div>
						</div>
						<div class="form-group">
							<label for="institute-name" class="col-sm-4 col-md-4 control-label">Institute Name</label>
							<div class="col-sm-8 col-md-8">
								<input type="text" class="form-control" id="institute-name" placeholder="Name of Office/School" name="insname">
							</div>
						</div>
						<div class="form-group">
							<label for="institute-address" class="col-sm-4 col-md-4 control-label">Institute Address</label>
							<div class="col-sm-8 col-md-8">
								<textarea rows="3" class="form-control" id="qualification" placeholder="Address of Office/School" name="insaddress"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="institute-contact" class="col-sm-4 col-md-4 control-label">Institute Contact</label>
							<div class="col-sm-8 col-md-8">
								<input type="text" class="form-control" id="institute-contact" placeholder="Contact number of Office/School" name="insnum">
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-offset-10 col-md-offset-10 col-sm-2 col-md-2">
					<button type="submit" class="btn btn-primary btn-lg pull-right">Register</button>
				</div>
				<!--end-->
			</form>

		</div>
	</div>
	<div class="footer">
		<div class="container">
			<p class="text-muted">All Rights Reserved by Prafulta Organization</p>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../resources/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>