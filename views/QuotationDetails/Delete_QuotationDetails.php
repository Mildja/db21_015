<?php echo "<br>คุณต้องการที่จะลบรายละเอียดใบสั่งซื้อหรือไม่<br>
        <br>$QuotationDetails->ID
        $QuotationDetails->P_ID $QuotationDetails->Color_ID br>";?>

<form method="get" action="">
    <input type="hidden" name="controller" value="QuotationDetails"/>
    <input type="hidden" name="ID" value="<?php echo $QuotationDetails->ID;?>"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="Delete">Delete</button>
</form>
