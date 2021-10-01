<?php
if(isset($_GET['controller'])&&isset($GET['action']))
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

        <br>[<a href="http://158.108.207.4/db21">หนีไป</a>]
        [<a href="http://158.108.207.4/db21/db21_015/?controller=pages&action=home">Home</a>]
        [<a href="?controller=Quotation&action=index_Quotation">Quotation</a>]
        [<a href="?controller=QuotationDetails&action=index_QuotationDetails">QuotationDetails</a>]
        <br>
        <?php require_once("routes.php") ?>
        <p>Welcome to our homepage เว็บเวร</p>
    </body>
</html>