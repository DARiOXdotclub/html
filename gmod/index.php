<?php
Include __DIR__."/ip.php";

 /* Log users */
    $writeDirectory = "/etc/darioxlog";
    $logFileName = "dariox-gmod.csv";
    $logWriteDestination = $writeDirectory."/".$logFileName;
    $log = fopen($logWriteDestination, a);
    $writeToLogType;
    $writeToLogIP = $_SERVER['REMOTE_ADDR'];
    $writeToLogUserAgent = str_replace(",", " | ", $_SERVER['HTTP_USER_AGENT']);
    $writeToLogHostname = $_SERVER['REMOTE_HOST'];
    $writeToLogCountry = ip_info($_SERVER['REMOTE_ADDR'], "country");
    $writeToLogTime = date('l j \of F Y h;i:s A');
    $writeToLogReferer = $_SERVER['HTTP_REFERER'];

    $writeToLog = $writeToLogTime.",".$writeToLogIP.",".$writeToLogUserAgent.",".$writeToLogCountry.",".$writeToLogReferer.",".$writeToLogHostname."\n";
    fwrite($log, $writeToLog);
    fclose($log);


    $readmetxt = file_get_contents("http://share.dariox.club/games/gmod11/readme.html");
?>
<html>
	<head>
		<title>DARiOX Garry's Mod 11</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>
.thingcontainer{
	position:absolute;
	right: 45px;
	top:100px;
}
.readme{
	margin-left: 35px;
	padding-left:5px;
	border-left: 1px solid #999999;
	height: 770px;
}
</style>
	</head>
	<body>
		<!-- Navigation Bar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="https://dariox.club">DARiOX</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="https://dariox.club">Home</a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="https://dariox.club/gmod">Garry's Mod 11<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		      	<a class="nav-link" href="http://share.dariox.club/games/gmod11"target="_blank">Download <sup>(Multiple Files)</sup></a>
		      </li>
		    </ul>
		  </div>
		</nav>
	<br>
		<div class="thingcontainer">
			<h3>Version Stuff</h3>
			<table class="table table-striped" style="width: 400px;">
				<thead>
					<tr>
						<th>Product</th>
						<th>Version</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Launcher</td>
						<td>1.3.1 [build 80]</td>
					</tr>
					<tr>
						<td>Launcher Framework</td>
						<td>.NET Core 3.0</td>
					</tr>
					<tr>
						<td>Garry's Mod</td>
						<td>11 (not changing)</td>
					</tr>
					<tr>
						<td><strong>Release</strong></td>
						<td><strong>1.3.1</strong> <sup>4th December 2019</sup></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="readme">
			<h3>Read Me</h3>
			<code>
			<?php echo $readmetxt; ?>
			</code>
		</div>
		<br><br><br><br>
	</body>
</html>