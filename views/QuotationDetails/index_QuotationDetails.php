<!DOCTYPE html>
<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover{background-color:#f5f5f5}
</style>
</head>
<body>



        <table style="width:80%">
        สร้างรายละเอียดใบสั่งซื้อ <a href=?controller=QuotationDetails&action=NewQuotationDetails> click</a><br>
        <br>
        
        <tr bgcolor = "pink">
                <td>ID</td>
                <td>Q_ID</td>
                <td>P_ID</td>
                <td>Color_ID</td>
                <td>NumOfProduct</td>
                <td>NumColorScreen</td>
                <td>Update</td>
                <td>Delete</td>
        </tr>
<?php foreach($QuotationDetails_list as $QuotationDetails)
{


        echo "<tr>
                <td>$QuotationDetails->ID</td>
                <td>$QuotationDetails->Q_ID</td>
                <td>$QuotationDetails->P_ID</td>
                <td>$QuotationDetails->Color_ID</td>
                <td>$QuotationDetails->NumOfProduct</td>
                <td>$QuotationDetails->NumColorScreen</td>
                <td><a href=?controller=QuotationDetails&action=updateFrom&PL_ID=$QuotationDetails->ID>Update</a></td>
                <td><a href=?controller=QuotationDetails&action=Delete_QuotationDeails&ID=$QuotationDetails->ID>Delete</a></td>
                </tr>";
        
}
echo "</table>";
?>
</div>