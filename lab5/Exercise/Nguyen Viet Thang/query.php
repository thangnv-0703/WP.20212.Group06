<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display table</title>
    <style>
        table,th,td{
            border: 1px solid black;
        }
        th,td{
            padding: 6px;
        }
        table{
            border-collapse: collapse;
        }
        tr:hover{
            background-color: #ffff99;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php
        $server = "localhost";
        $user = "root";
        $password = "quangtb201";
        $mydb = "mydatabase";
        $table_name = 'products';
 
        $connect = mysqli_connect($server,$user,$password);
        if(!$connect)
        {
            die ("Cannot connect to $server by account $user");
        }else
        {
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
        }
    ?>
</body>
</html>