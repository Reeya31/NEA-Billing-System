<?php
    include('dbconnect.php');
    $sql = "SELECT * FROM branch";
    $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        echo "Choose a Branch to see the list of all the customers in that particular branch."."<br>";
        echo '<form method="GET">';
        echo "<select name='branch'>";
        while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row["bid"] . "'>" . $row["bname"] . "</option>";
        }	
        echo "</select>";
        echo '<input type="submit" value="Submit">';
        echo '</form>';
    } else {
        echo "No branches found.";
    }
 $branch = $_GET['branch'];  
$sql = "SELECT * FROM customer WHERE branch_id = '$branch'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<br>"."<h1>"."Customer Details"."</h1>"."<br>";
    echo "<table border = 1>";
    echo "<tr><th>Customer ID</th><th>Name</th><th>Address</th><th>Branch</th></tr>";
    while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['customerid'] . "</td>";
            echo "<td>" . $row['fullname'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['branch_id'] . "</td>";
            echo "</tr>";
        }echo "</table>";}
 else {echo "<br>"."No customers found in the specified branch."."<br>" ;}
$customerCount = $result->num_rows;
echo "<br>". "Total Customers in this branch are: $customerCount"."<br>";

$sql = "SELECT bill.* FROM bill INNER JOIN customer ON bill.customerid = customer.customerid INNER JOIN branch ON customer.branch_id = branch.branch_id WHERE branch.branch_id = '$branch' ";
$result = $conn->query($sql);
$totalBillAmountNotPaid = 0;
if (mysqli_num_rows($result) > 0) {
    echo "<br>"."<h1>"."Bill Details"."</h1>"."<br>";
echo "<table border = 1>";
echo "<tr><th>Bill ID</th><th>Customer ID</th><th>BDate</th><th>BMonth</th><th>BYear</th><th>Current Reading</th><th>Previous Reading</th><th>Bill Amount</th><th>Status</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['bill_id'] . "</td>";
    echo "<td>" . $row['customerid'] . "</td>";
    echo "<td>" . $row['Bdate'] . "</td>";
    echo "<td>" . $row['Bmonth'] . "</td>";
    echo "<td>" . $row['Byear'] . "</td>";
    echo "<td>" . $row['current_reading'] . "</td>";
    echo "<td>" . $row['previous_reading'] . "</td>";
    echo "<td>" . $row['bill_amount'] . "</td>";
    if($row['status'] == 0)
    {
      echo "<td>".$row['status']. "<p>Bills not paid." ."</td>";
      $totalBillAmountNotPaid += $row['bill_amount'];
}
else
{
    echo "<td>" .$row['status'] ."<p>Bills are paid.</td>";
}
    echo "</tr>";
    if($row['status'] == 0)
    {
        $totalBillAmountNotPaid = $row['bill_amount'];
        echo "<h3>Total Bill Amount not Paid by Customer ID: " . $row['customerid'] . " is Rs." . $totalBillAmountNotPaid."</h3>"."<br>";
    }
  
}
echo "</table>"; 
 
echo "<br>";
echo "<h3>Total Bill Amount Not Paid in this Particular Branch is Rs.: " . $totalBillAmountNotPaid . "</h3>"; 
}

$conn->close();
?>
