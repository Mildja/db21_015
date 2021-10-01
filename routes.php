<?php
$controllers = array('pages'=>['home', 'error'],'Quotation'=>['index_Quotation'],'QuotationDetails'=>['index_QuotationDetails']); //list controller


function call($controller, $action){
    require_once("controller/".$controller."_controller.php");
    switch($controller)
    {
        case "pages":  $controller = new PagesController();
                      break;
        case "Quotation":   require_once("models/Quotation_models.php");
                                $controller = new QuotationController();
                                break;
        case "QuotationDetails": require_once("models/QuotationDetails_models.php");
                                $controller = new QuotationDetails_controller();
                                break;
        
                      
    }

    $controller->{$action}();
}

if(array_key_exists($controller, $controllers)) 
{    if(in_array($action, $controllers [$controller]))
    {    call($controller, $action); }
    else
    {    call('pages', 'error'); }

}
else
{    call('pages', 'error');} 
?>
