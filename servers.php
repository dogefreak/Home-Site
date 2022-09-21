<?php
// Must be run as root
$arp_scan = shell_exec('arp-scan --interface=eth0 --localnet');

$arp_scan = explode("\n", $arp_scan);

$matches;

foreach($arp_scan as $scan) {
	
	$matches = array();
	
	if(preg_match('/^([0-9\.]+)[[:space:]]+([0-9a-f:]+)[[:space:]]+(.+)$/', $scan, $matches) !== 1) {
		continue;
	}
	
	$ip = $matches[1];
	$mac = $matches[2];
	$desc = $matches[3];
	
	echo "Found device with mac address $mac ($desc) and ip $ip\n";
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
					<a class="nav-link active" href="./index.html">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./servers.html">Servers</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./links.html">Links</a>
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
							http://tomcat.lan/
						</td>
						<td>
							Web Server
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
							http://home.lan/
						</td>
						<td>
							Home Server
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
							Service Server
						</td>
					</tr>
					<tr style='cursor: pointer; cursor: hand;' onclick="window.location='http://ldap.lan/';">
						<td>
							ldp-01
						</td>
						<td>
							192.168.1.6
						</td>
						<td>
							http://ldap.lan/
						</td>
						<td>
							LDAP Server
						</td>
					</tr>
					<tr style='cursor: pointer; cursor: hand;' onclick="window.location='http://awx.lan/';">
						<td>
							ans-01
						</td>
						<td>
							192.168.1.7
						</td>
						<td>
							http://awx.lan/
						</td>
						<td>
							Ansible Server
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
