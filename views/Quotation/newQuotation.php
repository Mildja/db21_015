<div Align ="Center">
<br><br>
<img src="https://campus.campus-star.com/app/uploads/2018/10/docss01.jpg" width="400" height="250">
<br><br>

<form method = "get" action = "">

    <label>เลขใบสั่งซื้อ (ID)  <input type="text" name="ID"/></label><br>

    <label>วันที่ทำการสั่งซื้อ (Date)  <input type="date" name="date" value="<?php echo date("Y-m-d");?>"/></label><br>
    
    <label>รหัสพนักงาน (Emp_ID)  <select name="empID">
    <?php foreach($Employee_List as $E)
    {
        echo "<option value=$E->ID > $E->ID</option>";
    }?>
    </select></label><br>

    <label>รหัสลูกค้า (Cus_ID)  <select name="cusID">
    <?php foreach($Customer_List as $C)
    {
        echo "<option value=$C->ID > $C->ID</option>";
    }?>
    </select></label><br>

    <label>รูปแบบการชำระเงิน (มัดจำ/เครดิต)  <input type="text" name="payment"/></label><br>
    
    <label>เปอร์เซ็นต์มัดจำ (Percent)  <input type="text" name="percent"/></label><br>

    <input type="hidden" name="controller" value="Quotation"/><br>
    <button type="submit" name="action" value="index_Quotation">Back</button>
    <button type="submit" name="action" value="addQuotation">Save</button>
</form>

</div>