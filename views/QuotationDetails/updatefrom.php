<div Align ="Center">
<form method = "get" action = "">

    <label>รหัสรายละเอียด (PL_ID)  <input type="text" name="ID"
        value="<?php echo $QuotationDetails->ID; ?>"/></label><br>
        
    <label>รหัสออเดอร์(Q_ID)  <select name="Q_ID">
    <?php foreach($Quotation_List as $Q)
    {  
            echo "<option value=$Q->ID";
            if($Q->ID==$Quotation->Q_ID){echo " selected='selected'";}
            echo ">$Q->ID</option>"; 
    }?>
    </select></label><br>
    
    <label>สินค้า (P_ID)  <select name="P_ID">
    <?php foreach($Product_List as $P)
    {  
            echo "<option value=$P->ID";
            if($P->ID==$Product->ID){echo " selected='selected'";}
            echo ">$P->Name</option>";
    }?>
    </select></label><br>

    <label>สี (Color_ID)  <select name="Color_ID">
    <?php foreach($Color_List as $C)
    {
        echo "<option value=$C->Color_ID";
        if($C->Color_ID==$Color->Color_ID){echo " selected='selected'";}
        echo ">$C->Color_name</option>";
        
    }?>
    </select></label><br>

    <label>จำนวนสีสกรีน(NumColorScreen)  <input type="number" name="NumColorScreen"
        value="<?php echo $QuotationDetails->NumColorScreen; ?>"/></label><br>
    
    <label>จำนวนที่สั่ง(NumOfProduct)  <input type="number" name="NumOfProduct"
        value="<?php echo $QuotationDetails->NumOfProduct; ?>"/></label><br>

    <input type="hidden" name="controller" value="QuotationDetails"/><br>
    <button type="submit" name="action" value="index_QuotationDetails">Back</button>
    <button type="submit" name="action" value="update">Update</button>
</form>

</div>