<div Align ="Center">
<br><br>
<img src="https://www.npa-account.com/images/blog5800262.jpg" width="400" height="250">
<br><br>

<form method = "GET" action = "">

    <label>เลขใบสั่งซื้อ (ID)  <input type="text" name="ID"
        value="<?php echo $Quotation->ID; ?>"/></label><br>

    <label>วันที่ทำการสั่งซื้อ (Date)  <input type="date" name="date" 
        value="<?php echo date("Y-m-d",strtotime($Quotation->date));?>"/></label><br>
    
    <label>รหัสพนักงาน (Emp_ID)  <select name="empID">
    <?php foreach($Employee_List as $E)
    {       
        echo "<option value=$E->ID";
        if($E->ID==$Quotation->ID){echo "selected='selected'";}
        echo ">$E->ID</option>";
    }?>
    </select></label><br>

    <label>รหัสลูกค้า (Cus_ID)  <select name="cusID">
    <?php foreach($Customer_List as $C)
    {
        echo "<option value=$C->ID";
        if($C->ID==$Quotation->ID){echo "selected='selected'";}
        echo ">$C->ID</option>";
    }?>
    </select></label><br>

    <label>รูปแบบการชำระเงิน (มัดจำ/เครดิต)  <input type="text" name="payment"
        value="<?php echo $Quotation->payment;?>"/></label><br>
    
    <label>เปอร์เซ็นต์มัดจำ (Percent)  <input type="number" name="percent"
        value="<?php echo $Quotation->percent;?>"/></label><br>

    <input type="hidden" name="controller" value="Quotation"/><br>
    <button type="submit" name="action" value="index_Quotation">Back</button>
    <button type="submit" name="action" value="update">Update</button>
</form>

</div>