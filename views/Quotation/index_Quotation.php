
<div Align ="Center">
<!DOCTYPE html>
<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover{background-color:#f5f5f5}
</style>
</head>
<body>
<br>
<table style="width:80%">
<tr bgcolor = "skyblue">
        <td>ID</td>
        <td>Date</td>
        <td>Emp_ID</td>
        <td>Cus_ID</td>
        <td>Q_payment</td>
        <td>Q_percent</td>
    </tr>


<?php 
foreach($Quotation_List as $Quotation)
{
    echo "<tr>
        <td>$Quotation->ID</td>
        <td>$Quotation->date</td>
        <td>$Quotation->empID</td>
        <td>$Quotation->cusID</td>
        <td>$Quotation->payment</td>
        <td>$Quotation->percent</td>

    </tr>";
}
echo "</table>";
?>
</div>

