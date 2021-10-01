<?php class QuotationDetails_controller
{
        public function index_QuotationDetails()
        {
           echo "fgdgdg";
            $QuotationDetails_list = QuotationDetails::getAll();
            require_once("./views/QuotationDetails/index_QuotationDetails.php");
        }


}?>
