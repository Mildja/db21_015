<?php class QuotationDetails_controller
{
        public function index_QuotationDetails()
        {
            $QuotationDetails_list = QuotationDetails::getAll();
            require_once("./views/QuotationDetails/index_QuotationDetails.php");
        }

        public function newQuotation()
        {
            $Quotation_List = Quotation::getAll();
            $Customer_List = Customer::getAll();
            $Employee_List = Employee::getAll();
            require_once("./views/Quotation/newQuotation.php");
        }
        /*public function update()
        {
                $ID=$_GET['QD_ID'];
                $QuotationDetails = QuotationDetails::get($ID);

        }*/

}?>
