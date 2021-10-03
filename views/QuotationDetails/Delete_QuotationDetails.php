<br><br>
<img src="https://cdn.teknotut.com/wp-content/uploads/2019/05/menghapus-file-dengan-kondisi-tertentu-di-linux.png" width="500" height="250">
<br>
<?php echo "<br>คุณต้องการที่จะลบรายละเอียดใบสั่งซื้อหรือไม่";?><br><br>
<table style="width:80%">
    <tr bgcolor = "pink">
    <td>ID</td>
    <td>Q_ID</td>
    <td>P_ID</td>
    <td>Color_ID</td>
    <td>NumOfProduct</td>
    <td>NumColorScreen</td>
    </tr>
<?php echo 
        "<tr>
        <td>$QuotationDetails->ID</td>
        <td>$QuotationDetails->Q_ID</td>
        <td>$QuotationDetails->P_ID</td>
        <td>$QuotationDetails->Color_ID</td>
        <td>$QuotationDetails->NumOfProduct</td>
        <td>$QuotationDetails->NumColorScreen</td>
        </tr>";
?>
</table><br>
<form method="get" action="">
    <input type="hidden" name="controller" value="QuotationDetails"/>
    <input type="hidden" name="ID" value="<?php echo $QuotationDetails->ID;?>"/>
    <button type="submit" name="action" value="index_QuotationDetails">Back</button>
    <button type="submit" name="action" value="Delete">Delete</button>
</form>
