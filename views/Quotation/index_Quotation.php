
<div Align ="Center">
<table border = 1>
    <tr>
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

