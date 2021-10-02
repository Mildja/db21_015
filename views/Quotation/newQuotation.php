<div Align ="Center">

<form method = "get" action = "">

    <label>เลขใบสั่งซื้อ(ID)<input type="text" name="ID"/></label><br>

    <label>วันที่ทำการสั่งซื้อ(Date)<input type="date" name="date" value="<?php echo date("Y-m-d");?>"/></label>
    
    <label>รหัสพนักงาน(Emp_ID)<select name="empID">
    <?php foreach($Employee_List as $E)
    {
        echo "<option value=$E->empID > $E->empID</option>";
    }?>
    </select></label><br>

    <label>รหัสลูกค้า(Cus_ID)<select name="cusID">
    <?php foreach($Customer_List as $C)
    {
        echo "<option value=$C->Cus_ID > $C->Cus_ID</option>";
    }?>
    </select></label><br>

    <label>รูปแบบการชำระเงิน(มัดจำ/เครดิต)<input type="text" name="payment"/></label>
    
    <label>จำนวนเปอร์เซ็นต์มัดจำ(เครดิต=0)<input type="number" name="percent"/></label>

    <input type="hidden" name="controller" value="Quotation"/>
    <button type="submit" name="action" value="index_Quotation">Back</button>
    <button type="submit" name="action" value="add">Save</button>
</form>

</div>