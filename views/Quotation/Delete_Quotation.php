
<br><br>
<img src="https://i.pinimg.com/736x/d5/62/21/d56221fbed03e1b99a66f819952aa9f8.jpg" width="200" height="200">
<br>
<?php echo "<br>Are u sure to DELETE this Quotation (?)";?><br><br>
<table style="width:50%">
    <tr bgcolor = "lightblue">
            <td>ID</td>
            <td>Date</td>
            <td>Emp_ID</td>
            <td>Cus_ID</td>
            <td>Q_payment</td>
            <td>Q_percent</td>
    </tr>
<?php echo 
        "<tr>
        <td>$Quotation->ID</td>
        <td>$Quotation->date</td>
        <td>$Quotation->empID</td>
        <td>$Quotation->cusID</td>
        <td>$Quotation->payment</td>
        <td>$Quotation->percent</td>
        </tr>";
?>
</table><br>



<form method="get" action="">
    <input type="hidden" name="controller" value="Quotation"/>
    <input type="hidden" name="ID" value="<?php echo $Quotation->ID;?>"/>
    <button type="submit" name="action" value="index_Quotation">Back</button>
    <button type="submit" name="action" value="Delete">Delete</button>
</form><br>
