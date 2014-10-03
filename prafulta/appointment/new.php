<?php
session_start();

if(isset($_SESSION['cid'],$_SESSION['cname']))
{
	$cid=$_SESSION['cid'];
	$cname=$_SESSION['cname'];
}
else
{
	$cid=NULL;
	$cname=NULL;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
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

		<div id="new_appointment">
		<h2>Create new appointment</h2>
			<form class="form-horizontal" role="form">
				<div class="col-md-6 col-sm-12">
					<div id="appointment-info-id">
						<div class="form-group">
							<label for="appointment-id" class="col-sm-4 col-md-4 control-label">Appointment ID</label>
							<div class="col-sm-8 col-md-8">
								<input type="text" class="form-control" id="appointment-id" placeholder="Appointment ID">
							</div>
						</div>
					</div>
					<div id="client-info">
						<div class="form-group">
							<label for="client-id" class="col-sm-4 col-md-4 control-label">Client ID</label>
							<div class="col-sm-8 col-md-8">
								<?php
								if($cid)
								{
									echo '<p class="form-control-static">'.$cid.'</p>';
								}
								else
								{
									echo '<input type="text" class="form-control" id="client-id" placeholder="Client ID">';
								}
								
								?>
							</div>
						</div>
						<div class="form-group">
							<label for="client-name" class="col-sm-4 col-md-4 control-label">Client Name</label>
							<div class="col-sm-8 col-md-8">
								<?php
								if($cname)
								{
									echo '<p class="form-control-static">'.$cname.'</p>';
								}
								else
								{
									echo '<input type="text" class="form-control" id="client-name" placeholder="Client Name">';
								}
								
								?>
							</div>
						</div>
					</div>
					<div id="appointment-details">
						<div class="form-group">
							<label for="consultant-name" class="col-sm-4 col-md-4 control-label">Consultant Name</label>
							<div class="col-sm-8 col-md-8">
								<input type="text" class="form-control" id="consultant-name" placeholder="Consultant Name">
							</div>
						</div>
						<div class="form-group">
							<label for="appointment-date" class="col-sm-4 col-md-4 control-label">Appointment Date</label>
							<div class="col-sm-8 col-md-8">
								<input type="text" class="form-control" id="appointment-name" placeholder="Appointment Name">
							</div>
						</div>
						<div class="form-group">
							<label for="appointment-name" class="col-sm-4 col-md-4 control-label">Appointment Time</label>
							<div class="col-sm-8 col-md-8">
								<input type="text" class="form-control" id="appointment-name" placeholder="Appointment Time">
							</div>
						</div>
						<div class="form-group">
							<label for="reason" class="col-sm-4 col-md-4 control-label">Reason</label>
							<div class="col-sm-8 col-md-8">
								<textarea rows="3" type="text" class="form-control" id="reason" placeholder="Reasons for visit"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-4 col-md-8">
								<button type="submit" class="btn btn-primary btn-lg pull-right" id="appointment-preform-sub">Create appointment</button>
							</div>
						</div>
					</div>
					
				</div>
			</form>


		</div>

	</div>

	<div class="footer">
		<div class="container">
			<p class="text-muted">All Rights Reserved by Prafulta Organization</p>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="../resources/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>