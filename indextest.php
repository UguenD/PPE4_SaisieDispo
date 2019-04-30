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
			<h1>Saisie des disponibilit&eacute;s</h1>
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
							<div class="calendar__day day" ondblclick="window.alert('<?php echo $listeJours[0]->format('d/m/Y') ?>');">
    							<p><input type="checkbox" name="dispo0" value="dispo0" text="00:00 / 01:00"></input> </p>
							</div>
							<div class="calendar__day day" ondblclick="window.alert('<?php echo $listeJours[1]->format('d/m/Y') ?>');"></div>
							<div class="calendar__day day" ondblclick="window.alert('<?php echo $listeJours[2]->format('d/m/Y') ?>');"></div>
							<div class="calendar__day day" ondblclick="window.alert('<?php echo $listeJours[3]->format('d/m/Y') ?>');"></div>
							<div class="calendar__day day" ondblclick="window.alert('<?php echo $listeJours[4]->format('d/m/Y') ?>');"></div>
							<div class="calendar__day day" ondblclick="window.alert('<?php echo $listeJours[5]->format('d/m/Y') ?>');"></div>
							<div class="calendar__day day" ondblclick="window.alert('<?php echo $listeJours[6]->format('d/m/Y') ?>');"></div>						
						</div>
					</div>
					
                    <table data-role="table" id="" data-mode="reflow" class="ui-responsive">
                      <thead id="the">
                        <tr>
                          <th data-priority="0">Heure</th> 
                          <th data-priority="1">Lundi</th>
                          <th data-priority="2">Mardi</th>
                          <th data-priority="3">Mercredi</th>
                          <th data-priority="4">Jeudi</th>
                          <th data-priority="5">Vendredi</th>
                          <th data-priority="6">Samedi</th>
                          <th data-priority="7">Dimanche</th>
                    
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>00:01 / 03:00</th>
                          <td ><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ><input type="checkbox" name="dispo1" value="dispo1"></input></td>
                          <td ><input type="checkbox" name="dispo2" value="dispo2"></input></td>
                          <td ><input type="checkbox" name="dispo3" value="dispo3"></input></td>
                          <td ><input type="checkbox" name="dispo4" value="dispo4"></input></td>
                          <td ><input type="checkbox" name="dispo5" value="dispo5"></input></td>
                          <td ><input type="checkbox" name="dispo6" value="dispo6"></input></td>
                                                                                                                                                                                
                        </tr>
                        <tr>
                          <th>03:01 / 06:00</th>
                          <td ><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ><input type="checkbox" name="dispo1" value="dispo1"></input></td>
                          <td ><input type="checkbox" name="dispo2" value="dispo2"></input></td>
                          <td ><input type="checkbox" name="dispo3" value="dispo3"></input></td>
                          <td ><input type="checkbox" name="dispo4" value="dispo4"></input></td>
                          <td ><input type="checkbox" name="dispo5" value="dispo5"></input></td>
                          <td ><input type="checkbox" name="dispo6" value="dispo6"></input></td>
                                                                                                                                                                                
                        </tr>                        
                        <tr>
                          <th>06:01 / 09:00</th>
                          <td ><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ><input type="checkbox" name="dispo1" value="dispo1"></input></td>
                          <td ><input type="checkbox" name="dispo2" value="dispo2"></input></td>
                          <td ><input type="checkbox" name="dispo3" value="dispo3"></input></td>
                          <td ><input type="checkbox" name="dispo4" value="dispo4"></input></td>
                          <td ><input type="checkbox" name="dispo5" value="dispo5"></input></td>
                          <td ><input type="checkbox" name="dispo6" value="dispo6"></input></td>
                                                                                                                                                                                
                        </tr>                        
                        <tr>
                          <th>09:01 / 12:00</th>
                          <td ><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ><input type="checkbox" name="dispo1" value="dispo1"></input></td>
                          <td ><input type="checkbox" name="dispo2" value="dispo2"></input></td>
                          <td ><input type="checkbox" name="dispo3" value="dispo3"></input></td>
                          <td ><input type="checkbox" name="dispo4" value="dispo4"></input></td>
                          <td ><input type="checkbox" name="dispo5" value="dispo5"></input></td>
                          <td ><input type="checkbox" name="dispo6" value="dispo6"></input></td>
                                                                                                                                                                                
                        </tr>                        
                        <tr>
                          <th>12:01 / 15:00</th>
                          <td ><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ><input type="checkbox" name="dispo1" value="dispo1"></input></td>
                          <td ><input type="checkbox" name="dispo2" value="dispo2"></input></td>
                          <td ><input type="checkbox" name="dispo3" value="dispo3"></input></td>
                          <td ><input type="checkbox" name="dispo4" value="dispo4"></input></td>
                          <td ><input type="checkbox" name="dispo5" value="dispo5"></input></td>
                          <td ><input type="checkbox" name="dispo6" value="dispo6"></input></td>
                                                                                                                                                                                
                        </tr>                        
                        <tr>
                          <th>15:01 / 18:00</th>
                          <td ><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ><input type="checkbox" name="dispo1" value="dispo1"></input></td>
                          <td ><input type="checkbox" name="dispo2" value="dispo2"></input></td>
                          <td ><input type="checkbox" name="dispo3" value="dispo3"></input></td>
                          <td ><input type="checkbox" name="dispo4" value="dispo4"></input></td>
                          <td ><input type="checkbox" name="dispo5" value="dispo5"></input></td>
                          <td ><input type="checkbox" name="dispo6" value="dispo6"></input></td>
                                                                                                                                                                                
                        </tr>                        
                        <tr>
                          <th>18:01 / 21:00</th>
                          <td ><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ><input type="checkbox" name="dispo1" value="dispo1"></input></td>
                          <td ><input type="checkbox" name="dispo2" value="dispo2"></input></td>
                          <td ><input type="checkbox" name="dispo3" value="dispo3"></input></td>
                          <td ><input type="checkbox" name="dispo4" value="dispo4"></input></td>
                          <td ><input type="checkbox" name="dispo5" value="dispo5"></input></td>
                          <td ><input type="checkbox" name="dispo6" value="dispo6"></input></td>
                                                                                                                                                                                
                        </tr>                        
                        <tr>
                          <th>21:01 / 00:00</th>
                          <td ><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ><input type="checkbox" name="dispo1" value="dispo1"></input></td>
                          <td ><input type="checkbox" name="dispo2" value="dispo2"></input></td>
                          <td ><input type="checkbox" name="dispo3" value="dispo3"></input></td>
                          <td ><input type="checkbox" name="dispo4" value="dispo4"></input></td>
                          <td ><input type="checkbox" name="dispo5" value="dispo5"></input></td>
                          <td ><input type="checkbox" name="dispo6" value="dispo6"></input></td>
                                                                                                                                                                                
                        </tr>
                                                                                                                                           
                      </tbody>
                    </table>										
				</main>

		<div data-role="footer" data-position="fixed">
			<h4>PPE4</h4>
		</div>

	</div><!-- /page -->

    </div>
   </div>
   
   
   
</body>

</html>