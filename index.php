<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Version Mobile</title>
	<meta charset="utf-8" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="format-detection" content="telephone=no">
	<meta name="msapplication-tap-highlight" content="no">
	<meta name="viewport"
		content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
	<link rel="stylesheet" href="jquery/jquery.mobile-1.4.0.min.css" />
	<script src="jquery/jquery-1.11.0.min.js"></script>
	<script src="jquery/jquery.mobile-1.4.0.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<script src="index.js"></script>
</head>

<body>

	<div data-role="page">
		<div data-role="header" data-position="fixed" data-theme="b">
			<!-- data-theme="b" cf http://demos.jquerymobile.com/1.1.2/docs/api/themes.html -->
			<h1>Saisie des disponibilités</h1>
		</div><!-- /header -->

		<div data-role="content">
			<div class="wrapper">
				<main>
					<div class="week" style="text-align:center">
							
							<?php 
							include 'date.php';
							echo "Semaine du ". $listeJours[0]->format('d/m/Y'). " au ". $listeJours[6]->format('d/m/Y')
							?>

					</div>
					<br/>
					<div class="calendar">
						<div class="calendar__header">
							<div>Lundi</div>
							<div>Mardi</div>
							<div>Mercredi</div>
							<div>Jeudi</div>
							<div>Vendredi</div>
							<div>Samedi</div>
							<div>Dimanche</div>
						</div>
						<div class="calendar__week">
							<div class="calendar__day day" ondblclick="window.alert('<?php echo $listeJours[0]->format('d/m/Y') ?>');"></div>
							<div class="calendar__day day" ondblclick="window.alert('<?php echo $listeJours[1]->format('d/m/Y') ?>');"></div>
							<div class="calendar__day day" ondblclick="window.alert('<?php echo $listeJours[2]->format('d/m/Y') ?>');"></div>
							<div class="calendar__day day" ondblclick="window.alert('<?php echo $listeJours[3]->format('d/m/Y') ?>');"></div>
							<div class="calendar__day day" ondblclick="window.alert('<?php echo $listeJours[4]->format('d/m/Y') ?>');"></div>
							<div class="calendar__day day" ondblclick="window.alert('<?php echo $listeJours[5]->format('d/m/Y') ?>');"></div>
							<div class="calendar__day day" ondblclick="window.alert('<?php echo $listeJours[6]->format('d/m/Y') ?>');"></div>						
						</div>
					</div>
				</main>

		<div data-role="footer" data-position="fixed">
			<h4>PPE4</h4>
		</div>

	</div><!-- /page -->

            </div>
   </div>
   
   
   
</body>

</html>