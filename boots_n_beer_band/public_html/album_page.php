<!-- Matt Rockhold --> 
<!DOCTYPE html> 
<html lang="en">


<head> 
  <meta charset="utf-8">
  <title>Boots N Beer Band Album Page </title> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/sandstone/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/css_karson_richardson.css">
  
  <style>
  table {
    border-collapse: collapse;
  }
  table, th {
    border: solid;
    border-color: #653119;
    border-style: outset;
  }
  tfoot {
    border: solid #653119;
    border-style: outset;
  }
  td:hover {
    background-color: #fff;
  }
  </style>
</head>
<body> 

<?php
include '../resources/navigation.php';
?>
<div class = "below_menu_container">
<img class="boot" src="img/bootsnbeer_logo2.png" alt="Band Logo"/> 

<h1> Album Page </h1>

<p> Main page displays Boots 'N Beer's latest hit albums. </p>

<p> Here are two of Boots 'N Beer's hottest albums, "Dirty" and "Muddy Spurs". </p>

<p> Both "Dirty" and "Muddy Spurs" were recorded in Des Moines, Iowa, which is close to where
Boots 'N Beer will have the first few concerts of their upcoming tour! </p>

<img class="album" src="img/album_cover.png" alt="Album Cover"/> 
<br>

<table class="table table-striped" style= "width: 40%;">
  <tbody>
    <tr>
      <th>Dirty</th>
      <th>Muddy Spurs</th>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <td>List of songs on album:</td>
      <td>List of songs on album:</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <td>"Dirt Roads and Tractor Tires"</td>
      <td>"Cornbread (Iowa Carbs)"</td>
    </tr>
    <tr>
      <td>"I Got a Woman"</td>
      <td>"Everything's Better Wrapped in Bacon"</td>
    </tr>
    <tr> 
      <td>"Rollin' Through the Fields"</td> 
      <td>"Bumpy Towns, Flat Highways"</td>
    </tr> 
    <tr> 
      <td>"The Big One"</td>
      <td>"Iowa: America's Mini Canada"</td> 
    </tr>
    <tr> 
      <td>"You Only Need Some Grit"</td>
      <td>"Bootscooters"</td>
    </tr> 
  </tfoot>
</table>

<p>Looking for your favorite song but don't want to purchase the whole album? 
Boots 'N Beer will be releasing various songs on ITunes and Google Music soon! 
Make sure you stay tuned to find out when it is official!</p>

<b> Albums were recorded at Golden Fiddle Records. </b>

<address> Golden Fiddle Records located at 1234 Shawqa Avenue in Des Moines, IA. </address>

<?php
include '../resources/footer.php';
?>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body> 
</html>
