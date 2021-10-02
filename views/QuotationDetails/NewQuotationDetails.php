<div Align ="Center">
<form method="get" action="">
<label> รหัสรายละเอียด <input type="text" name="PL_ID"/> </label><br>

<label> รหัสออเดอร์ <select name="Q_ID">
    <?php foreach($Quotation_List as $Q){echo "<option value = $Q->ID> $Q->ID</option>";}?>
</select> </label><br>

<label>สินค้า <select name="P_ID">
    <?php foreach($Color_List as $c) {echo "<option value = $c->P_ID> $c->P_name  $c->Color_name";}?>
</select></label><br>



<label> จำนวนสีสกรีน <input type="number" name="NumColorScreen"/> </label><br>
<label> จำนวนที่สั่ง <input type="number" name="NumOfProduct"/> </label><br>




<input type="hidden" name="controller" value = "QuotationDetails"/>
<button type="submit"name="action" value = "index_QuotationDetails"> Back </button>
<button type="submit"name="action" value= "add"> Save </button>
</form>
</div>