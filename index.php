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
    <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    <style>
        body {
        font-family: 'Mitr', sans-serif;
        font-size: 20px;
        }

    </style>
    </head>
    <body>
        <div Align ="Center">
            <h1>Premium Shop</h1>
            <br>[<a href="http://158.108.207.4/db21">หนีไป</a>]
            [<a href="http://158.108.207.4/db21/db21_015/?controller=pages&action=Home">Home</a>]
            [<a href="?controller=Quotation&action=index_Quotation">Quotation</a>]
            [<a href="?controller=QuotationDetails&action=index_QuotationDetails">QuotationDetails</a>]
            <br>
            <?php require_once("./routes.php");?>
        </div>
       
    </body>
</html>