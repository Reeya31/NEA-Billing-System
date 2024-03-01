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
    $SCNO = $_POST["scno"];
    $CUSID = $_POST["cusid"];
    $Fullname = $_POST["fullname"];
    $Address = $_POST["address"];
    $MobileNo = $_POST["mobileno"];
    $BID = $_POST["bid"];
    $DTID = $_POST["dtid"];
    ?>
    <p>SC NO : <?php echo $SCNO;?></p>
    <p>Customer ID : <?php echo $CUSID;?></p>
    <p>Fullname : <?php echo $Fullname;?></p>
    <p>Address : <?php echo $Address;?></p>
    <p>Mobile No : <?php echo $MobileNo;?></p>
    <p>Branch ID : <?php echo $BID;?></p>
    <p>D.T. ID : <?php echo $DTID;?></p>
    <?php
    include("dbconnect.php");
    $query = "INSERT into customer (SCNO,CUSID,FullName,Address,MobileNo,Branch_ID,Demand_type_ID) VALUES('$SCNO','$CUSID','$Fullname','$Address','$MobileNo','$BID','$DTID')";
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