<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> The information you entered is: </h2>
    <?php
    include("dbconnect.php");
    $BID = $_POST["bid"];
    $BName = $_POST["bname"];
    $bstatus = $_POST["status"];
    ?>
    <p>Branch ID : <?php echo $BID;?></p>
    <p>Branch Name : <?php echo $BName;?></p>
    <p>Status : <?php echo $bstatus;?></p>
    <?php
    include("dbconnect.php");
    $query = "INSERT into branch (Branch_ID,Name,Status) VALUES('$BID','$BName','$bstatus')";
    $result = mysqli_query($conn,$query);
    if($result)
    {
        echo "Data Inserted Successfully";
    }
    else
    {
        echo "Error: ".$query.":-".mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
</body>
</html>