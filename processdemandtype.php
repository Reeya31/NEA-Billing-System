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
    $DemandtypeID = $_POST["dtid"];
    $Description = $_POST["description"];
    $Status = $_POST["status"];
    ?>
    <p>Demand Type ID : <?php echo $DemandtypeID;?></p>
    <p>Description : <?php echo $Description;?></p>
    <p>Status : <?php echo $Status;?></p>
<?php
include("dbconnect.php");
$query = "INSERT into demandtype(Demand_type_ID,Description,Status) VALUES('$DemandtypeID','$Description','$Status');";
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