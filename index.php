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
        $controller = pages,$action = home
        <br>[<a href="http://158.108.207.4/db21/">Home</a>]
        [<a href="http://158.108.207.4/db21/db21_015/?controller=pages&action=home">Quotation</a>]
        <br>

        <p>Welcome to our homepage เว็บเวร</p>
    </body>
</html>