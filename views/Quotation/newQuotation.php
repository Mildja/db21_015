<form method = "get" action = "">
    <label>ID<input type="text" name="Q_ID"/></label>
    <label>Date<input type="date" name="Q_date"/></label>
    <label>Emp_ID<input type="text" name="Emp_ID"/></label>
    <label>Cus_ID<input type="text" name="Cus_ID"/></label>
    <label>Payment<input type="text" name="Q_payment"/></label>

    <?php foreach($Customer_List as $Cus)
    {
        echo "<option value=$Cus->ID>$Cus->Cus_name</option>";
    }?>

    <input type="hidden" name="controller" value="Quotation"/>
    <button type="submit" name="action" value="index_Quotation">Back</button>
    <button type="submit" name="action" value="addQuotation">Save</button>
</form>