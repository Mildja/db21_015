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

    public function addQuotation()
    {
            $ID = $_GET['ID'];
            $date = $_GET['date'];
            $empID = $_GET['ID'];
            $cusID = $_GET['ID'];
            $payment = $_GET['payment'];
            $percent = $_GET['percent'];
            Quotation::add($ID,$date,$empID,$cusID,$payment,$percent);

            QuotationController::index_Quotation();

    }
}?>