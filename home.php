<?php
  include 'security/session.php';

  $username = $_SESSION['login_user'];

  $dateobj = date_create(); //Creating Date Object
  $timestamp = date_timestamp_get($dateobj); // Getting Timestamp
  $date = date("d/m/Y",$timestamp);
  $day = date("l",$timestamp);
  $select_sql = "SELECT * FROM booking WHERE bookdate = $date";
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Timetable</title>
      <link rel="stylesheet" href="css/table.css">  
  </head>
  <body>
    <div>
      <a href="logout.php">Logout</a>
    </div>
    <!-- Booking Timetable -->
    <div class='tab' style="text-align: center;">
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
        <?php for ($i=0; $i <30; $i++) { 
          $select_result = mysqli_query($db,$select_sql);
          $query_result = mysqli_fetch_array($select_result);
        ?>
        <tr>
          <td class='time'><font size="3"><?php echo $date; ?></font><br><?php echo $day; ?></td>
          <!-- Hour 1 -->
          <?php if ($query_result['hour1'] === null){ ?>
            <td class='green' data-tooltip='Available'>BOOK NOW</td>
          <?php }else { ?>
            <td class='red' data-tooltip='Booked by <?php echo $username; ?>'>NOT AVAILABLE</td>
          <?php } ?>


          <!-- Hour 2 -->
          <?php if ($query_result['hour2'] === null){ ?>
            <td class='green' data-tooltip='Available'>BOOK NOW</td>
          <?php }else { ?>
            <td class='red' data-tooltip='Booked by <?php echo $username; ?>'>NOT AVAILABLE</td>
          <?php } ?>


          <!-- Hour 3 -->
          <?php if ($query_result['hour3'] === null){ ?>
            <td class='green' data-tooltip='Available'>BOOK NOW</td>
          <?php }else { ?>
            <td class='red' data-tooltip='Booked by <?php echo $username; ?>'>NOT AVAILABLE</td>
          <?php } ?>


          <!-- Hour 4 -->
          <?php if ($query_result['hour4'] === null){ ?>
            <td class='green' data-tooltip='Available'>BOOK NOW</td>
          <?php }else { ?>
            <td class='red' data-tooltip='Booked by <?php echo $username; ?>'>NOT AVAILABLE</td>
          <?php } ?>


          <!-- Hour 5 -->
          <?php if ($query_result['hour5'] === null){ ?>
            <td class='green' data-tooltip='Available'>BOOK NOW</td>
          <?php }else { ?>
            <td class='red' data-tooltip='Booked by <?php echo $username; ?>'>NOT AVAILABLE</td>
          <?php } ?>


          <!-- Hour 6 -->
          <?php if ($query_result['hour6'] === null){ ?>
            <td class='green' data-tooltip='Available'>BOOK NOW</td>
          <?php }else { ?>
            <td class='red' data-tooltip='Booked by <?php echo $username; ?>'>NOT AVAILABLE</td>
          <?php } ?>


          <!-- Hour 7 -->
          <?php if ($query_result['hour7'] === null){ ?>
            <td class='green' data-tooltip='Available'>BOOK NOW</td>
          <?php }else { ?>
            <td class='red' data-tooltip='Booked by <?php echo $username; ?>'>NOT AVAILABLE</td>
          <?php } ?>
        </tr>
        <?php 
          $timestamp = $timestamp + 86400;
          $date = date("d/m/Y",+$timestamp);
          $day = date("l",+$timestamp);
          if ($day == "Sunday") {
            $timestamp = $timestamp + 86400;
            $date = date("d/m/Y",+$timestamp);
            $day = date("l",+$timestamp);
            $i=$i+1;
          }
        } ?>
      </table>
    </div>  
    <!-- / Booking Timetable -->
  </body>
</html>