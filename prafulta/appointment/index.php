
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta content="text/html" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prafulta</title>

    <!-- Bootstrap -->
    <link type="text/css" href="../resources/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="../resources/css/radiance.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
		        <li class="active"><a href="../appointment">Appointment</a></li>
		        <li><a href="../client-registration">Client Registration</a></li>
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
			<h2>Appointment</h2>
			<form class="form-horizontal" id="appointment-preform" action="check.php" method="post" role="form">
				<!--start-->
				<div class="col-md-6 col-sm-12">
					<div id="appointment-preform">
						<div class="form-group">
							<label for="client-id" class="col-sm-4 col-md-4 control-label">Client ID</label>
							<div class="col-sm-8 col-md-8">
								<input type="text" class="form-control" id="client-id" placeholder="Client ID" name="clientid">
							</div>
						</div>

						<div class="col-sm-offset-4 col-md-offset-4 col-sm-8 col-md-8">
							<p class="text-center text-muted">OR</p>
						</div>
						
						<div class="form-group">
							<label for="mob-num" class="col-sm-4 col-md-4 control-label">Mobile</label>
							<div class="col-sm-8 col-md-8">
								<div class="input-group">
									<span class="input-group-addon">+91</span>
									<input type="text" class="form-control" id="mobile-number" placeholder="Client's Mobile Number" name="mob">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-4 col-md-8">
								<button type="submit" class="btn btn-primary btn-lg pull-right"  id="appointment-preform-sub">Check it</button>
							</div>
						</div>

					</div>
					
				</div>				
				<!--end-->
			</form>

		</div>
	</div>

	<div class="footer">
		<div class="container">
			<p class="text-muted" id="footer-text">All Rights Reserved by Prafulta Organization</p>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="../resources/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>