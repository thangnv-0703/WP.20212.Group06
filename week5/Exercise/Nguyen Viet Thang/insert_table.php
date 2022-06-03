<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert table</title>
</head>
<body>
    <?php
        $desc = $_POST["desc"];
        $weight = $_POST["weight"];
        $cost =$_POST["cost"];
        $numb = $_POST["numb"];

        if(is_numeric($weight) && is_numeric($cost)){
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
                $SQLcmd =  "INSERT INTO $table_name(Product_desc,Cost,Weight,Numb)
                            VALUES('$desc','$cost','$weight','$numb')";
                mysqli_select_db($connect,$mydb);
                if(mysqli_query($connect,$SQLcmd)){
                    print '<font font="5">Insert into table ';
                    print "<i style=\"color:blue;\">$table_name</i> in database <i style=\"color:blue;\">$mydb</i> successfully!!!</font><br/>";
                    print "SQLcmd = $SQLcmd";
                }
            }
        }else{
            die ("Insert data fail . "."<br/>");
        }
    ?>
</body>
</html>