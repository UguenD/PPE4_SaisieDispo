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
					
                    <table data-role="table" id="movie-table" data-mode="reflow" class="ui-responsive">
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
                          <th>00:00 / 01:00</th>
                          <td ><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ><input type="checkbox" name="dispo1" value="dispo1"></input></td>
                          <td ><input type="checkbox" name="dispo2" value="dispo2"></input></td>
                          <td ><input type="checkbox" name="dispo3" value="dispo3"></input></td>
                          <td ><input type="checkbox" name="dispo4" value="dispo4"></input></td>
                          <td ><input type="checkbox" name="dispo5" value="dispo5"></input></td>
                          <td ><input type="checkbox" name="dispo6" value="dispo6"></input></td>
                                                                                                                                                                                
                        </tr>
                        <tr>
                          <th>01:00 / 02:00</th>
                          <td ondblclick="window.alert('<?php echo $listeJours[0]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[1]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[2]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[3]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[4]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[5]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[6]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                    
                        </tr>
                        <tr>
                          <th>02:00 / 03:00</th>
                          <td ondblclick="window.alert('<?php echo $listeJours[0]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[1]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[2]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[3]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[4]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[5]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[6]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                    
                        </tr>
                        <tr>
                          <th>03:00 / 04:00</th>
                          <td ondblclick="window.alert('<?php echo $listeJours[0]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[1]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[2]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[3]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[4]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[5]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[6]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                    
                        </tr>
                        <tr>
                          <th>04:00 / 05:00</th>
                          <td ondblclick="window.alert('<?php echo $listeJours[0]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[1]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[2]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[3]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[4]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[5]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[6]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                        </tr>
                        
                        <tr>
                          <th>05:00 / 06:00</th>
                          <td ondblclick="window.alert('<?php echo $listeJours[0]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[1]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[2]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[3]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[4]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[5]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[6]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                    
                        </tr>
                        <tr>
                          <th>06:00 / 07:00</th>
                          <td ondblclick="window.alert('<?php echo $listeJours[0]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[1]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[2]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[3]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[4]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[5]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[6]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                    
                        </tr>
                        <tr>
                          <th>07:00 / 08:00</th>
                          <td ondblclick="window.alert('<?php echo $listeJours[0]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[1]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[2]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[3]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[4]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[5]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[6]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                    
                        </tr>
                        <tr>
                          <th>08:00 / 09:00</th>
                          <td ondblclick="window.alert('<?php echo $listeJours[0]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[1]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[2]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[3]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[4]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[5]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[6]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                        </tr>
                        <tr>
                          <th>09:00 / 10:00</th>
                          <td ondblclick="window.alert('<?php echo $listeJours[0]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[1]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[2]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[3]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[4]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[5]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ondblclick="window.alert('<?php echo $listeJours[6]->format('d/m/Y') ?>');"><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          </tr>
                          
                        <tr>
                          <th>10:00 / 11:00</th>
                          <td ><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ><input type="checkbox" name="dispo1" value="dispo1"></input></td>
                          <td ><input type="checkbox" name="dispo2" value="dispo2"></input></td>
                          <td ><input type="checkbox" name="dispo3" value="dispo3"></input></td>
                          <td ><input type="checkbox" name="dispo4" value="dispo4"></input></td>
                          <td ><input type="checkbox" name="dispo5" value="dispo5"></input></td>
                          <td ><input type="checkbox" name="dispo6" value="dispo6"></input></td>                                                                                                                                                   
                        </tr>
                        
                        <tr>
                          <th>10:00 / 11:00</th>
                          <td ><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ><input type="checkbox" name="dispo1" value="dispo1"></input></td>
                          <td ><input type="checkbox" name="dispo2" value="dispo2"></input></td>
                          <td ><input type="checkbox" name="dispo3" value="dispo3"></input></td>
                          <td ><input type="checkbox" name="dispo4" value="dispo4"></input></td>
                          <td ><input type="checkbox" name="dispo5" value="dispo5"></input></td>
                          <td ><input type="checkbox" name="dispo6" value="dispo6"></input></td>                                                                                                                                                   
                        </tr>
                        <tr>
                          <th>10:00 / 11:00</th>
                          <td ><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ><input type="checkbox" name="dispo1" value="dispo1"></input></td>
                          <td ><input type="checkbox" name="dispo2" value="dispo2"></input></td>
                          <td ><input type="checkbox" name="dispo3" value="dispo3"></input></td>
                          <td ><input type="checkbox" name="dispo4" value="dispo4"></input></td>
                          <td ><input type="checkbox" name="dispo5" value="dispo5"></input></td>
                          <td ><input type="checkbox" name="dispo6" value="dispo6"></input></td>                                                                                                                                                   
                        </tr>
                        
                        <tr>
                          <th>10:00 / 11:00</th>
                          <td ><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ><input type="checkbox" name="dispo1" value="dispo1"></input></td>
                          <td ><input type="checkbox" name="dispo2" value="dispo2"></input></td>
                          <td ><input type="checkbox" name="dispo3" value="dispo3"></input></td>
                          <td ><input type="checkbox" name="dispo4" value="dispo4"></input></td>
                          <td ><input type="checkbox" name="dispo5" value="dispo5"></input></td>
                          <td ><input type="checkbox" name="dispo6" value="dispo6"></input></td>                                                                                                                                                   
                        </tr>
                        
                        <tr>
                          <th>10:00 / 11:00</th>
                          <td ><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td ><input type="checkbox" name="dispo1" value="dispo1"></input></td>
                          <td ><input type="checkbox" name="dispo2" value="dispo2"></input></td>
                          <td ><input type="checkbox" name="dispo3" value="dispo3"></input></td>
                          <td ><input type="checkbox" name="dispo4" value="dispo4"></input></td>
                          <td ><input type="checkbox" name="dispo5" value="dispo5"></input></td>
                          <td ><input type="checkbox" name="dispo6" value="dispo6"></input></td>                                                                                                                                                   
                        </tr>
                        
                        <tr>
                          <th>10:00 / 11:00</th>
                          <td><input type="checkbox" name="dispo0" value="dispo0"></input></td>
                          <td><input type="checkbox" name="dispo1" value="dispo1"></input></td>
                          <td><input type="checkbox" name="dispo2" value="dispo2"></input></td>
                          <td><input type="checkbox" name="dispo3" value="dispo3"></input></td>
                          <td><input type="checkbox" name="dispo4" value="dispo4"></input></td>
                          <td><input type="checkbox" name="dispo5" value="dispo5"></input></td>
                          <td><input type="checkbox" name="dispo6" value="dispo6"></input></td>                                                                                                                                                   
                        </tr>                                                                                                                        
                      </tbody>
                    </table>					

					

<!-- <table data-role="table" id="movie-table" data-mode="reflow" class="ui-responsive"> -->
<!--   <thead> -->
<!--     <tr> -->
<!--       <th data-priority="1">Heure</th> -->
<!--       <th data-priority="persist">Disponibilit&eacute;</th> -->
<!--       <th data-priority="2">Year</th> -->
<!-- <!--       <th data-priority="3"><abbr title="Rotten Tomato Rating">Rating</abbr></th> --> 
<!-- <!--       <th data-priority="4">Reviews</th> -->
<!--     </tr> -->
<!--   </thead> -->
<!--   <tbody> -->
<!--     <tr> -->
<!--       <th>00:00 / 01:00</th> -->
<!--       <td><input type="checkbox" name="Cheese" value="Cheese"></input></td> -->
<!--       <td>1941</td> -->

<!--     </tr> -->
<!--     <tr> -->
<!--       <th>01:00 / 02:00</th> -->
<!--       <td><a href="http://en.wikipedia.org/wiki/Casablanca_(film)" data-rel="external">Casablanca</a></td> -->
<!--       <td>1942</td> -->

<!--     </tr> -->
<!--     <tr> -->
<!--       <th>02:00 / 03:00</th> -->
<!--       <td><a href="http://en.wikipedia.org/wiki/The_Godfather" data-rel="external">The Godfather</a></td> -->
<!--       <td>1972</td> -->

<!--     </tr> -->
<!--     <tr> -->
<!--       <th>03:00 / 04:00</th> -->
<!--       <td><a href="http://en.wikipedia.org/wiki/Gone_with_the_Wind_(film)" data-rel="external">Gone with the Wind</a></td> -->
<!--       <td>1939</td> -->

<!--     </tr> -->
<!--     <tr> -->
<!--       <th>04:00 / 05:00</th> -->
<!--       <td><a href="http://en.wikipedia.org/wiki/Lawrence_of_Arabia_(film)" data-rel="external">Lawrence of Arabia</a></td> -->
<!--       <td>1962</td> -->

<!--     </tr> -->
<!--     <tr> -->
<!--       <th>6</th> -->
<!--       <td><a href="http://en.wikipedia.org/wiki/Dr._Strangelove" data-rel="external">Dr. Strangelove Or How I Learned to Stop Worrying and Love the Bomb</a></td> -->
<!--       <td>1964</td> -->

<!--     </tr> -->
<!--     <tr> -->
<!--       <th>7</th> -->
<!--       <td><a href="http://en.wikipedia.org/wiki/The_Graduate" data-rel="external">The Graduate</a></td> -->
<!--       <td>1967</td> -->

<!--     </tr> -->
<!--     <tr> -->
<!--       <th>8</th> -->
<!--       <td><a href="http://en.wikipedia.org/wiki/The_Wizard_of_Oz_(1939_film)" data-rel="external">The Wizard of Oz</a></td> -->
<!--       <td>1939</td> -->

<!--     </tr> -->
<!--     <tr> -->
<!--       <th>9</th> -->
<!--       <td><a href="http://en.wikipedia.org/wiki/Singin%27_in_the_Rain" data-rel="external">Singin' in the Rain</a></td> -->
<!--       <td>1952</td> -->

<!--     </tr> -->
<!--     <tr> -->
<!--       <th>10</th> -->
<!--       <td class="title"><a href="http://en.wikipedia.org/wiki/Inception" data-rel="external">Inception</a></td> -->
<!--       <td>2010</td> -->
<!--     </tr> -->
<!--   </tbody> -->
<!-- </table> -->
					
				</main>

		<div data-role="footer" data-position="fixed">
			<h4>PPE4</h4>
		</div>

	</div><!-- /page -->

    </div>
   </div>
   
   
   
</body>

</html>