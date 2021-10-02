<?php
class QuotationController
{
    public function index_Quotation()
    {
        $Quotation_List = Quotation::getAll();
        require_once("./views/Quotation/index_Quotation.php");
    }

    public function newQuotation()
    {
        $Quotation_List = Quotation::getAll();
        $Employee_List = Employee::getAll();
        $Customer_List = Customer::getAll();
        require_once("./views/Quotation/newQuotation.php");
    }
}?>