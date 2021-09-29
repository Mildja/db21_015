<?php
if(isset($_GET['controller'])&&isset($GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}else
{
    $controller = 'pages','Quotation';
    $action = 'home','index_Quatation';
}?>
<html>
    <head></head>
    <body>
        $controller = pages,$action = home
        <br>[<a href="/school">Home</a>]<br>        
        <p>Welcome to our homepage เว็บเวร</p>
    </body>
</html>