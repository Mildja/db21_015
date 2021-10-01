<?php
<<<<<<< HEAD
$controllers = array('pages'=>['home', 'error'],'QuotationDetails'=>['index']); //list controller
=======
$controllers = array('pages'=>['home', 'error']
                     'Quotation'=>['index_Quotation']); //list controller
>>>>>>> afdf92d673da52558b1bed73baf74f6be92c6e98

function call($controller, $action){
    require_once("controller/".$controller."_controller.php");
    switch($controller)
    {
        case "pages":  $controller = new PagesController();
                      break;
<<<<<<< HEAD
        case "QuotationDetails": require_once("models/QuotationDetails_models.php");
                                $controller = new QuotationDetails_controller();
                                break;





=======
        case "Quotation":   require_once("models/Quotation_models.php");
                            $controller = new QuotationController();
                            break;
>>>>>>> afdf92d673da52558b1bed73baf74f6be92c6e98

                      
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
