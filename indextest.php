lundiYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

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
          <form id="formulaire" action="recap.php" method="get" >
                    <table data-role="table" id="tab" data-mode="reflow" class="ui-responsive">
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

                      <?php 

                        $i =0;

                        while($i<7):

                          switch ($i) {
                            case 0:
                                $heure = "00:01 / 03:00";
                                $dispo = "0";
                                break;
                            case 1:
                                $heure = "03:01 / 06:00";
                                $dispo = "1";
                                break;
                            case 2:
                                $heure = "06:01 / 09:00";
                                $dispo = "2";
                                break;
                            case 3:
                                $heure = "09:01 / 12:00";
                                $dispo = "3";
                                break;
                            case 4:
                                $heure = "12:01 / 15:00";
                                $dispo = "4";
                                break;
                            case 5:
                                $heure = "15:01 / 18:00";
                                $dispo = "5";
                                break;
                            case 6:
                                $heure = "18:01 / 21:00";
                                $dispo = "6";
                                break;

                            case 7:
                                $heure = "21:01 / 00:00";
                                $dispo = "7";
                                break;
                        }

                        $checked = null;
                        // if($i == 1){
                        //   $checked = "checked";
                        // }

                      ?>

                        <tr>
                          <th> <?php echo $heure; ?> </th>
                          <td>
                            <input type="checkbox" name="lundi[]" id="lundi[]" value="<?php echo $dispo; ?>" <?php echo $checked; ?> ></input>
                          </td>
                          <td >
                            <input type="checkbox" name="mardi[]" id="mardi[]" value="<?php echo $dispo ?>" <?php echo $checked; ?>></input>
                          </td>
                          <td>
                            <input type="checkbox" name="mercredi[]" id="mercredi[]" value="<?php echo $dispo ?>" <?php echo $checked; ?>></input>
                          </td>
                          <td>
                            <input type="checkbox" name="jeudi[]" id="jeudi[]" value="<?php echo $dispo ?>" <?php echo $checked; ?>></input>
                          </td>
                          <td>
                            <input type="checkbox" name="vendredi[]" id="vendredi[]" value="<?php echo $dispo ?>" <?php echo $checked; ?>></input>
                          </td>
                          <td>
                            <input type="checkbox" name="samedi[]"  id="samedi[]" value="<?php echo $dispo ?>" <?php echo $checked; ?>></input>
                          </td>
                          <td>
                            <input type="checkbox" name="dimanche[]" id="dimanche[]" value="<?php echo $dispo ?>" <?php echo $checked; ?>></input>
                          </td>
                        </tr>


                      <?php
                          $i++;
                        endwhile

                      ?>

                      </tbody>
                    </table>	
                      <?php
                        if (isset($_GET['message']))
                          echo $_GET['message'];
                        else
                          echo "&nbsp;";
                      ?>
                  <input id="envoyer" name="envoi" type="submit" title="" />

            </form>		
				</main>

		<div data-role="footer" data-position="fixed">
			<h4>PPE4</h4>
		</div>

	</div><!-- /page -->

    </div>
   </div>
   
</body>

</html>