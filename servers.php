<?php

class servers
{
	function servers()
	{

	}
}

}?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>InfraNet - Servers</title>

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
					<a class="nav-link active" href="./index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./servers.php">Servers</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./links.php">Links</a>
				</li>
			</ul>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>
							Name
						</th>
						<th>
							IP Address
						</th>
						<th>
							DNS
						</th>
						<th>
							Purpose
						</th>
					</tr>
				</thead>
				<tbody>
					<tr style='cursor: pointer; cursor: hand;' onclick="window.location='http://pfsense.lan/';">
						<td>
							rtr-01
						</td>

						<td>
							192.168.1.1
						</td>
						<td>
							http://pfsense.lan/
						</td>
						<td>
							pfSense Router
						</td>
					</tr>
					<tr style='cursor: pointer; cursor: hand;' onclick="window.location='http://tomcat.lan/';">
						<td>
							web-01
						</td>
						<td>
							192.168.1.2
						</td>
						<td>
							http://home.lan/
						</td>
						<td>
							Home Deployment Server
						</td>
					</tr>
					<tr style='cursor: pointer; cursor: hand;' onclick="window.location='http://jenkins.lan:8080/';">
						<td>
							web-02
						</td>
						<td>
							192.168.1.3
						</td>
						<td>
							http://jenkins.lan:8080/
						</td>
						<td>
							Jenkins Server
						</td>
					</tr>
					<tr style='cursor: pointer; cursor: hand;' onclick="window.location='http://home.lan/';">
						<td>
							web-03
						</td>
						<td>
							192.168.1.4
						</td>
						<td>
							http://test.lan/
						</td>
						<td>
							Test Deployment Server
						</td>
					</tr>
					<tr style='cursor: pointer; cursor: hand;' onclick="window.location='http://selfservice.lan/';">
						<td>
							web-04
						</td>
						<td>
							192.168.1.5
						</td>
						<td>
							http://selfservice.lan/
						</td>
						<td>
							Self Service Server
						</td>
					</tr>
					<tr style='cursor: pointer; cursor: hand;' onclick="window.location='';">
						<td>
							web-05
						</td>
						<td>
							192.168.1.6
						</td>
						<td>
							none
						</td>
						<td>
							Automation Deployment Webserver
						</td>
					</tr>
					<tr style='cursor: pointer; cursor: hand;' onclick="window.location='';">
						<td>
							web-06
						</td>
						<td>
							192.168.1.7
						</td>
						<td>
							none
						</td>
						<td>
							Automation Deployment Webserver
						</td>
					</tr>
					<tr style='cursor: pointer; cursor: hand;' onclick="window.location='http://zabbix.lan/';">
						<td>
							mon-01
						</td>
						<td>
							192.168.1.10
						</td>
						<td>
							http://zabbix.lan/
						</td>
						<td>
							Monitoring Server
						</td>
					</tr>
					<tr style='cursor: pointer; cursor: hand;' onclick="window.location='http://awx.lan/';">
						<td>
							ans-01
						</td>
						<td>
							192.168.1.11
						</td>
						<td>
							http://awx.lan/
						</td>
						<td>
							Ansible/AWX Server
						</td>
					</tr>
					<tr style='cursor: pointer; cursor: hand;' onclick="window.location='http://ldap.lan/';">
						<td>
							ldp-01
						</td>
						<td>
							192.168.1.12
						</td>
						<td>
							http://ldap.lan/
						</td>
						<td>
							LDAP Server
						</td>
					</tr>
					<tr style='cursor: pointer; cursor: hand;' onclick="window.location='';">
						<td>
							elk-01
						</td>
						<td>
							192.168.1.13
						</td>
						<td>
							none
						</td>
						<td>
							ELKstack Server
						</td>
					</tr>
					<tr style='cursor: pointer; cursor: hand;' onclick="window.location='';">
						<td>
							sec-01
						</td>
						<td>
							192.168.1.14
						</td>
						<td>
							none
						</td>
						<td>
							OpenVAS Server
						</td>
					</tr>
			                <tr style='cursor: pointer; cursor: hand;' onclick="window.location='';">
						<td>
							sec-02
						</td>
						<td>
							192.168.1.15
						</td>
						<td>
							none
						</td>
						<td>
							Wazuh Server
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
