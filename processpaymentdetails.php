<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>The information you entered is: </h2>
<?php
    include("dbconnect.php");
    $PID = $_POST["pid"];
    $BID = $_POST["bid"];
    $PDate = $_POST["pdate"];
    $PAmount = $_POST["pamount"];
    $POID = $_POST["poid"];
    $Rebate = $_POST["rebate"];
    $Fine = $_POST["fine"];
    ?>
    <p>Payment ID : <?php echo $PID;?></p>
    <p>Bill ID : <?php echo $BID;?></p>
    <p>Payment Date : <?php echo $PDate;?></p>
    <p>Payment Amount : <?php echo $PAmount;?></p>
    <p>Payment Option ID : <?php echo $POID;?></p>
    <p>Rebate Amount : <?php echo $Rebate;?></p>
    <p>Fine Amount : <?php echo $Fine;?></p>
<?php
include("dbconnect.php");
$query = "INSERT into payment(PID, BID, PDate, PAmount, POID, Rebate_Amt, Fine_Amt) VALUES('$PID','$BID','$PDate','$PAmount','$POID','$Rebate','$Fine');";
$result = mysqli_query($conn,$query);
if($result)
{
    echo "Data Inserted Succesfully";
}
else
{
    echo "ERROR: ".$query.":-".mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>