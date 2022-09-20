<?php
echo "Hello World";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>InfraNet - Home</title>

    <meta name="description" content="Welcome to InfraNet">
    <meta name="author" content="Floris Heije">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link active" href="./index.html">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./servers.html">Servers</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./links.html">Links</a>
				</li>
			</ul>
			<div class="jumbotron">
				<h2>
					Welcome to the Infranet!
				</h2>
				<p>
					This homepage is a nice wrapper for our local intranet, which we call the "Infra" net. Please click the following link for more information on the servers that are currently running. For more information please contact the system administrator (Floris Heije).
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="./servers.html">Servers</a>
				</p>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail First" src="http://www.davidnassociates.com/img/financial.jpg">
						<div class="card-block">
							<h5 class="card-title">
								Monitoring
							</h5>
							<p class="card-text">
								Metrics, monitoring, and alerting are all concepts that together form the basis of a monitoring system. They have the ability to provide visibility of your systems and to understand the impact of changes you make.
							</p>
							<p>
								<a class="btn btn-primary" href="http://zabbix.lan/">Go to Zabbix</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail Second" src="https://integrityhr.com/wp-content/uploads/2018/03/Wordpress-Image-Strategic-HR-Plan-Blog.png">
						<div class="card-block">
							<h5 class="card-title">
								Self Service Center
							</h5>
							<p class="card-text">
								Employee onboarding and offboarding are the bookends of the employee life cycle. That cycle begins the moment a candidate accepts your offer, and it ends on the last day they work for your organization.
							</p>
							<p>
								<a class="btn btn-primary" href="http://selfservice.lan/">Go to Self Service Center</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail Third" src="https://www.broadbandgenie.co.uk/images/fckImages/stock/homebroadbandrouter_header_600x200.jpg">
						<div class="card-block">
							<h5 class="card-title">
								Network Router
							</h5>
							<p class="card-text">
								A router is the basic backbone for the Internet. The main function of the router is to connect two or more than two network and forwards the packet from one network to another.
							</p>
							<p>
								<a class="btn btn-primary" href="http://pfsense.lan/">Go to pfSense</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
