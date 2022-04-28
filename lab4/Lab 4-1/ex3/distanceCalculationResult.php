<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Results</title>
  <style>
    table,
    td,
    th {
      border: 1px solid black;
      padding: 10px;
    }
  </style>
</head>

<body>
  <?php
  $destinations = $_POST["destination"];
  $distanceFrom = array(
    'Dallas' => 803,
    'Toronto' => 435,
    'Boston' => 848,
    'Nashville' => 406,
    'Las Vegas' => 1526,
    'San Francisco' => 1835,
    'Washington, DC' => 595,
    'Miami' => 1189,
    'Pittsburgh' => 409
  );
  if (count($destinations) == 1) {
    $distance = $distanceFrom[$destinations[0]];
    $time = round($distance / 60, 2);
    $walktime = round($distance / 5, 2);
    print "The distance between Chicago and $destinations is $distance miles<br>";
    print "Driving at 60 miles/hour would takes $time hours<br>";
    print "Walking at 5 miles/hour would takes $walktime hours<br>";
  } else if (count($destinations) > 1) {
    print "From Chicago to: <br>";
    print "<table>";
    print "<tr><th>No.</th><th>Destination</th><th>Distance</th><th>Driving time</th><th>Walking time</th></tr>";
    $i = 1;
    foreach ($destinations as $destination) {
      $distance = $distanceFrom[$destination];
      $time = round($distance / 60, 2);
      $walktime = round($distance / 5, 2);
      print "<tr><td>$i</td><td>$destination</td><td>$distance</td><td>$time</td><td>$walktime</td></tr>";
      $i += 1;
    }
    print "</table>";
  } else {
    print "Sorry, do not have destination information for $destinations.";
  }
  ?>
</body>

</html>