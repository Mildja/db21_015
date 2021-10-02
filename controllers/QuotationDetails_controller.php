<?php class QuotationDetails_controller
{
        public function index_QuotationDetails()
        {
            $QuotationDetails_list = QuotationDetails::getAll();
            require_once("./views/QuotationDetails/index_QuotationDetails.php");
        }

        public function NewQuotationDetails()
        {
            $Quotation_List = Quotation::getAll();
            //$Product_List = Product::getAll();
            $Color_List = Color::getAll();
            require_once("./views/QuotationDetails/NewQuotationDetails.php");
        }
        /*public function update()
        {
                $ID=$_GET['QD_ID'];
                $QuotationDetails = QuotationDetails::get($ID);

        }*/

}?>
