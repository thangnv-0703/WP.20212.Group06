<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Select Table</title>
</head>

<body>
  <?php
  $host = "localhost";
  $user = "root";
  $pass = "root";
  $database = "Lab05";
  $connect = mysqli_connect($host, $user, $pass);
  $tableName = "Products";

  print "<br><font size=\"5\" color=\"blue\">";
  print "$tableName Data</font><br>";
  $query = "SELECT * FROM $tableName";
  print "The query is <i>$query</i><br>";

  mysqli_select_db($connect, $database);
  $resultsId = mysqli_query($connect, $query);
  if ($resultsId) {
    print "<table border=1>";
    print "<th>Num</th><th>Product</th><th>Cost</th><th>Weight</th><th>Count</th>";
    while ($row = mysqli_fetch_row($resultsId)) {
      print "<tr>";
      foreach ($row as $field) {
        print "<td>$field</td>";
      }
      print "</tr>";
    }
    print "</table>";
  } else {
    die("Query = $query failed!<br>");
  }
  mysqli_close($connect);
  ?>
</body>

</html>