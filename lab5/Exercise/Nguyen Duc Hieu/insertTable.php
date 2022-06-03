<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Table</title>
</head>

<body>
  <form action="insertTable.php" method="POST">
    <label>Item Description</label>
    <input type="text" size="20" maxlength="20" name="item">
    <br>
    <label>Weight</label>
    <input type="text" size="5" maxlength="20" name="weight">
    <br>
    <label>Cost</label>
    <input type="text" size="5" maxlength="20" name="cost">
    <br>
    <label>Number Available</label>
    <input type="text" size="5" maxlength="20" name="quantity">
    <br>
    <input type="submit">
    <input type="reset">
  </form>
  <?php
  $item = $_POST["item"];
  $weight = $_POST["weight"];
  $cost = $_POST["cost"];
  $quantity = $_POST["quantity"];

  if (!empty($item) && !empty($weight) && !empty($cost) && !empty($quantity)) {
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $database = "Lab05";
    $connect = mysqli_connect($host, $user, $pass);
    $tableName = "Products";
    $query = "INSERT INTO $tableName VALUES ('0','$item','$cost','$weight','$quantity')";

    print "The query is <i>$query</i><br>";
    print "<br><font size=\"4\" color=\"blue\">";
    mysqli_select_db($connect, $database);
    if (mysqli_query($connect, $query)) {
      print "Insert into $database was successful!";
    } else {
      print "Insert into $database was failed!";
    }
    print "</font>";
    mysqli_close($connect);
  }
  ?>
</body>

</html>