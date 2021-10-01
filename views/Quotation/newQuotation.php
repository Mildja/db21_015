<form method = "get" action = "">
    <label>ID<input type="text" name="Q_ID"/></label>
    <label>Date<input type="date" name="Q_date"/></label>
    <label>Emp_ID<input type="text" name="Emp_ID"/></label>
    <?php foreach($Employee_List as $Emp)
    {
        echo "<option value=$Emp->empID>$Eus->Emp_name</option>";
    }?>
    <label>Cus_ID<input type="text" name="Cus_ID"/></label>
    <?php foreach($Customer_List as $Cus)
    {
        echo "<option value=$Cus->cusID>$Cus->Cus_name</option>";
    }?>
    <label>Payment<input type="text" name="Q_payment"/></label>

    <input type="hidden" name="controller" value="Quotation"/>
    <button type="submit" name="action" value="index_Quotation">Back</button>
    <button type="submit" name="action" value="addQuotation">Save</button>
</form>