<div Align ="Center">
<br><br>
<img src="https://www.thaihealth.or.th/data/content/2014/02/19697/cms/aehorsuwxyz4.jpg" width="500" height="250">
<br><br>

<form method="get" action="">
<label> รหัสรายละเอียด <input type="text" name="PL_ID"/> </label><br>

<label> รหัสออเดอร์ <select name="Q_ID">
    <?php foreach($Quotation_List as $Q){echo "<option value = $Q->ID> $Q->ID</option>";}?>
</select> </label><br>

<label>สินค้า <select name="P_ID">
    <?php foreach($Product_List as $P){echo "<option value = $P->ID>$P->Name</option>";}?>
</select></label><br>

<label>สี <select name="Color_ID">
    <?php foreach($Color_List as $c)
    {echo "<option value =$c->Color_ID>$c->Color_name</option>";}?>
</select></label><br>


<label> จำนวนสีสกรีน <input type="number" name="NumColorScreen"/> </label><br>
<label> จำนวนที่สั่ง <input type="number" name="NumOfProduct"/> </label><br>


<input type="hidden" name="controller" value = "QuotationDetails"/>
<button type="submit"name="action" value = "index_QuotationDetails"> Back </button>
<button type="submit"name="action" value= "addQuotationDetails"> Save </button>
</form>
</div>