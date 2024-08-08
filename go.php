<?php
session_start();
if(!isset($_SESSION['stat']))
{
    echo '
<html>
    <head>
        <title>ReadMe Markdown File Generator</title>
        <link rel="icon" href="favicon.ico">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="start_head">
            <h1> <a href=".">Start Here</a> </h1>
            <div><a href="."> &nbsp;&#10148; </a></div>
        </div>  
    </body>
</html>  
';
    die();
} 

require_once 'inc/init.php';

echo htmlheader();
?>

<div class="form-wrapper">

    <h1 class="redheading" style="text-align:center;padding:50px 10px">Almost There...</h1>
</div>
    <div style="margin-top: 25px; padding: 10px 5%;display:flex;flex-direction:column:justify-content:center;width:100%;min-height: calc(100vh - 330px)">
        <form action="generate" method="POST">
            <button style="padding: 20px 50px;width:100%;font-size:2.5em" type="submit" name="submit">Generate ReadMe Markdown</button>
        </form>
    </div>





<?php echo wsfooter(); ?>