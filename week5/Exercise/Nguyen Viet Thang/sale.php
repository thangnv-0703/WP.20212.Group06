<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sale</title>
</head>
<body>
    <?php
        $saleitem = $_POST["saleitem"];
        $server = "localhost";
        $user = "root";
        $password = "quangtb201";
        $mydb = "mydatabase";
        $table_name = 'products';

        $connect = mysqli_connect($server, $user, $password);
        if (!$connect) {
            die("Cannot connect to $server by account $user");
        } else 
        {
            $SQLcmd =  "UPDATE $table_name SET Numb = Numb - 1 WHERE Product_desc=\"".$saleitem.'"';
            mysqli_select_db($connect, $mydb);
            if (mysqli_query($connect, $SQLcmd) > 0) {
                print "<h2 style=\"color:blue;\">Update sale</h2>";
                print "SQLcmd = $SQLcmd";
                $SQLcmd =  "SELECT * FROM $table_name";
                mysqli_select_db($connect,$mydb);
                $result = mysqli_query($connect,$SQLcmd);
                print "<h2>Product table </h2>";
                print "The Query sql is : ";
                print "SQLcmd = $SQLcmd";
                if(mysqli_num_rows($result) > 0)
                {
                    echo "<table>";
                    echo    "<tr>
                                <th>Product ID</th>
                                <th>Name</th>
                                <th>Cost</th>
                                <th>Weight</th>
                                <th>Number</th>
                            </tr>";
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>
                                <td>".$row["ProductID"]."</td>
                                <td>".$row["Product_desc"]."</td>
                                <td>".$row["Cost"]."</td>
                                <td>".$row["Weight"]."</td>
                                <td>".$row["Numb"]."</td>
                            </tr>";
                    }
                    echo "</table>";
                }else
                {
                    print("No results");
                }
            } else 
            {
                print("Update fail");
            }
        }
    ?>
</body>
</html>