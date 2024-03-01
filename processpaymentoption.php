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
    $POID = $_POST["poid"];
    $PO_Name= $_POST["po_name"];
    $Status = $_POST["status"];
    ?>
    <p>Payment Option ID : <?php echo $POID;?></p>
    <p>PO Name : <?php echo $PO_Name;?></p>
    <p>Status : <?php echo $Status;?></p>
<?php
include("dbconnect.php");
$query = "INSERT into payment_option(POID, Name, Status) VALUES('$POID','$PO_Name','$Status');";
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