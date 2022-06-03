<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Table</title>
</head>
<body>
    <?php
        $server = "localhost";
        $user = "root";
        $password = "quangtb201";
        $mydb = "mydatabase";
        $table_name = "Products";

        $connect = mysqli_connect($server,$user,$password);
        if(!$connect)
        {
            die ("Cannot connect to $server by account $user");
        }else
        {
            $SQLcmd =   "CREATE TABLE $table_name (
                            ProductID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            Product_desc VARCHAR(50),
                            Cost INT,
                            Weight INT,
                            Numb INT
                        )";
            
            mysqli_select_db($connect,$mydb);
            if(mysqli_query($connect,$SQLcmd)){
                print '<font font="5">Create table ';
                print "<i style=\"color:blue;\">$table_name</i> in database <i style=\"color:blue;\">$mydb</i></font><br/>";
                print "SQLcmd = $SQLcmd";
            }else
            {
                die ("Create table fail. SQLcmd = $SQLcmd");
            }
        }
        mysqli_close($connect);
    ?>
</body>
</html>