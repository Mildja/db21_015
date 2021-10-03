<?php echo "<br>Are u sure to DELETE this Quotation (?)<br>
        <br>
        $Quotation->ID
        $Quotation->date 
        $Quotation->empID 
        $Quotation->cusID
        $Quotation->payment
        $Quotation->percent
        <br>";
?>

<form method="get" action="">
    <input type="hidden" name="controller" value="Quotation"/>
    <input type="hidden" name="ID" value="<?php echo $Quotation->ID;?>"/>
    <button type="submit" name="action" value="index_Quotation">Back</button>
    <button type="submit" name="action" value="Delete">Delete</button>
</form>
