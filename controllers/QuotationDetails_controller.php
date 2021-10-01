<?php class QuotationDetails_controller
{
        public function index()
        {
            $QuotationDetails_list = QuotationDetails::getAll();
            require_once("views/QuotationDetails/index_QuotationDetails");
        }


}?>
