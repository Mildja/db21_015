<?php
if(isset($_GET['controller'])&&isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}else
{
    $controller = 'pages';
    $action = 'home';
}?>
<html>
    <head></head>
    <body>
        <h1 style="font-family:verdana;">Premium Shop</h1>
       
    
        <br>[<a href="http://158.108.207.4/db21">หนีไป</a>]
        <br>[<a href="http://158.108.207.4/db21/db21_015/?controller=pages&action=home">Home</a>]
        <br>[<a href="?controller=Quotation&action=index_Quotation">Quotation</a>]
        <br>[<a href="?controller=QuotationDetails&action=index_QuotationDetails">QuotationDetails</a>]
        <br>
        <?php require_once("./routes.php");?>
       
    </body>
</html>