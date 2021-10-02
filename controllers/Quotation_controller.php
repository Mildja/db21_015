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
            $empID = $_GET['empID'];
            $cusID = $_GET['cusID'];
            $payment = $_GET['payment'];
            $percent = $_GET['percent'];
            Quotation::add($ID,$date,$empID,$cusID,$payment,$percent);
            QuotationController::index_Quotation();
    }

    public function search()
    {
        $key=$_GET['key'];
        $Quotation_List = Quotation::search($key);
        require_once("./views/Quotation/index_Quotation.php");
    }

    public function updateForm()
    {
        $ID=$_GET['Q_ID'];
        $Quotation = Quotation::get($ID);
        $Customer_List = Customer::getAll();
        $Employee_List = Employee::getAll();
        require_once('./views/Quotation/updateForm.php');
    }

    public function update()
    {
            $ID = $_GET['ID'];
            $date = $_GET['date'];
            $empID = $_GET['empID'];
            $cusID = $_GET['cusID'];
            $payment = $_GET['payment'];
            $percent = $_GET['percent'];
            Quotation::update($ID,$date,$empID,$cusID,$payment,$percent);
            QuotationController::index_Quotation();
    }
}?>