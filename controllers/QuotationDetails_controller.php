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
            $Color_List = Color::getAll();
            require_once("./views/QuotationDetails/NewQuotationDetails.php");
        }
        public function addQuotationDetails()
        {
            $ID = $_GET['PL_ID'];
            $Q_ID = $_GET['Q_ID'];
            $P_ID= $_GET['P_ID'];
            $Color_ID = $_GET['Color_ID'];
            $NumOfProduct = $_GET['NumOfProduct'];
            $NumColorScreen = $_GET['NumColorScreen'];
            QuotationDetails::add($ID,$Q_ID,$P_ID,$Color_ID,$NumOfProduct,$NumColorScreen);
            QuotationDetails_Controller::index_QuotationDetails();
        }
        /*public function update()
        {
                $ID=$_GET['QD_ID'];
                $QuotationDetails = QuotationDetails::get($ID);

        }*/

}?>
