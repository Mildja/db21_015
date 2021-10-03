<?php
$controllers = array('pages'=>['Home', 'error'],'Quotation'=>['index_Quotation','newQuotation','addQuotation','search','updateForm','update','deleteConfirm','delete']
                ,'QuotationDetails'=>['index_QuotationDetails','NewQuotationDetails','addQuotationDetails','Delete_QuotationDetails','Delete','search']); //list controller


function call($controller, $action){
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages":  $controller = new PagesController();
                      break;
        case "Quotation":   require_once("./models/Quotation_models.php");
                            require_once("./models/Employee_models.php");
                            require_once("./models/Customer_models.php");
                            $controller = new QuotationController();
                            break;
        case "QuotationDetails":require_once("./models/QuotationDetails_models.php");
                                //require_once("./models/Product_models.php");
                                require_once("./models/Color_models.php");
                                require_once("./models/Quotation_models.php");
                                $controller = new QuotationDetails_controller();
                                break;
        
                      
    }

    $controller->{$action}();
}

if(array_key_exists($controller, $controllers)) 
{    if(in_array($action, $controllers[$controller]))
    {    call($controller, $action); }
    else
    {    call('pages', 'error'); }

}
else
{    call('pages', 'error');} 
?>
