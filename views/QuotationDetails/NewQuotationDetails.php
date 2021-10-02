<form method = "get" action = "">
    <label>ID<input type="text" name="Q_ID"/></label><br>
    <label>Date<input type="date" name="Q_date" value="<?php echo date("Y-m-d");?>"/></label>
    <label>Emp_ID<select name="Emp_ID">
    <?php foreach($Employee_List as $Emp)
    {
        echo "<option value=$Emp->Emp_ID>$Emp->Emp_ID</option>";
    }?>
    </label></label><br>
    <label>Cus_ID<select name="Cus_ID">
    <?php foreach($Customer_List as $Cus)
    {
        echo "<option value=$Cus->Cus_ID>$Cus->Cus_ID</option>";
    }?>
    </label></label><br>
    <label>Payment<input type="text" name="Q_payment"/></label>

    <input type="hidden" name="controller" value="Quotation"/>
    <button type="submit" name="action" value="index_Quotation">Back</button>
    <button type="submit" name="action" value="addQuotation">Save</button>
</form>
