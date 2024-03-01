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
    $BDate = $_POST["bdate"];
    $BYear = $_POST["byear"];
    $BMonth = $_POST["bmonth"];
    $CUSID = $_POST["cusid"];
    $Current_Reading = $_POST["curr_reading"];
    $Previous_Reading = $_POST["prev_reading"];
    $BAmount = $_POST["bamount"];
    ?>
    <p>Bill ID : <?php echo $BID;?></p>
    <p>Bill Date : <?php echo $BDate;?></p>
    <p>Bill Year : <?php echo $BYear;?></p>
    <p>Bill Month : <?php echo $BMonth;?></p>
    <p>Customer ID : <?php echo $CUSID;?></p>
    <p>Current Reading : <?php echo $Current_Reading;?></p>
    <p>Previous Reading : <?php echo $Previous_Reading;?></p>
    <p>Bill Amount : <?php echo $BAmount;?></p>
    <?php
    include("dbconnect.php");
    $query = "INSERT into bill (BID,BDate,BYear,BMonth,CUSID,Current_Reading,Prev_Reading,Bamount) VALUES('$BID','$BDate','$BYear','$BMonth','$CUSID','$Current_Reading','$Previous_Reading','$BAmount')";
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
