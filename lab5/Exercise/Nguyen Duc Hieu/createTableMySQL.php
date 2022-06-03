<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Table MySQL</title>
</head>

<body>
  <?php
  $server = "localhost";
  $user = "root";
  $pass = "root";
  $mydb = "Lab05";
  $table_name = "Products";
  $connect = mysqli_connect($server, $user, $pass);
  if (!$connect) {
    die("Cannot connect to $server using $user");
  } else {
    $sqlCmd = "CREATE TABLE $table_name (
      ProductID INT UNSIGNED NOT NULL
      AUTO_INCREMENT PRIMARY KEY,
      Product_desc VARCHAR(50),
      Cost INT,
      Weight INT,
      Numb INT
    )";
    mysqli_select_db($connect, $mydb);
    if (mysqli_query($connect, $sqlCmd)) {
      print "<font size=\"4\" color=\"blue\">";
      print "Created Table";
      print "<i>$table_name</i> in database <i>$mydb</i>";
      print "<br></font>";
    } else {
      die("Table Create Creation Failed SQL command = $sqlCmd");
    }
    mysqli_close($connect);
  }
  ?>
</body>

</html>