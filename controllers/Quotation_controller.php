<?php
class QuotationController
{
    public function index_Quotation()
    {
        $QuotationList = Quotation::getAll();
        require_once('views/Quotation/index_Quotation.php';)
    }
}?>