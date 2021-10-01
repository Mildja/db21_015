<table border = 1>

        <tr>
                <td>ID</td>
                <td>Q_ID</td>
                <td>P_ID</td>
                <td>Color_ID</td>
                <td>NumOfProduct</td>
                <td>NumColorScreen</td>
          
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
        </tr>";
}
echo "</table>";
?>
