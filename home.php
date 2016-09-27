<?php
  include 'security/session.php';

  $username = $_SESSION['login_user'];
  //echo $username;

  if (isset($_SESSION['login_user']) === true) {
    # code...
  }
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Timetable</title>
      <link rel="stylesheet" href="css/table.css">  
  </head>
  <body>
    <a href="logout.php">Logout</a>
    <!-- / College Timetable -->
    <div class='tab'>
      <table border='0' cellpadding='0' cellspacing='0'>
        <tr class='days'>
          <th></th>
          <th>Ist Hour</th>
          <th>IInd Hour</th>
          <th>IIIrd Hour</th>
          <th>IVth Hour</th>
          <th>Vth Hour</th>
          <th>VIth Hour</th>
          <th>VIIth Hour</th>
        </tr>
        <tr>
          <td class='time'>9.00</td>
          <td class='cs335 blue' data-tooltip='Software Engineering &amp; Software Process'>CS335 [JH1]</td>
          <td class='cs426 purple' data-tooltip='Computer Graphics'>CS426 [CS1]</td>
          <td></td>
          <td></td>
          <td>-</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class='time'>10.00</td>
          <td></td>
          <td class='cs335 blue lab' data-tooltip='Software Engineering &amp; Software Process'>CS335 [Lab]</td>
          <td class='md352 green' data-tooltip='Multimedia Production &amp; Management'>MD352 [Kairos]</td>
          <td></td>
          <td>-</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class='time'>11.00</td>
          <td></td>
          <td class='cs335 blue lab' data-tooltip='Software Engineering &amp; Software Process'>CS335 [Lab]</td>
          <td class='md352 green' data-tooltip='Multimedia Production &amp; Management'>MD352 [Kairos]</td>
          <td class='cs240 orange' data-tooltip='Operating Systems'>CS240 [CH]</td>
          <td>-</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class='time'>12.00</td>
          <td></td>
          <td class='md303 navy' data-tooltip='Media &amp; Globalisation'>MD303 [CS2]</td>
          <td class='md313 red' data-tooltip='Special Topic: Multiculturalism &amp; Nationalism'>MD313 [Iontas]</td>
          <td></td>
          <td>-</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class='time'>13.00</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>-</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class='time'>14.00</td>
          <td></td>
          <td></td>
          <td class='cs426 purple' data-tooltip='Computer Graphics'>CS426 [CS2]</td>
          <td class='cs240 orange' data-tooltip='Operating Systems'>CS240 [TH1]</td>
          <td>-</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class='time'>15.00</td>
          <td></td>
          <td></td>
          <td></td>
          <td class='cs240 orange lab' data-tooltip='Operating Systems'>CS240 [Lab]</td>
          <td>-</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class='time'>16.00</td>
          <td></td>
          <td></td>
          <td></td>
          <td class='cs240 orange lab' data-tooltip='Operating Systems'>CS240 [Lab]</td>
          <td>-</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class='time'>17.00</td>
          <td class='cs335 blue' data-tooltip='Software Engineering &amp; Software Process'>CS335 [TH1]</td>
          <td></td>
          <td></td>
          <td></td>
          <td>-</td>
          <td></td>
          <td></td>
        </tr>
      </table>
    </div>  
  </body>
</html>