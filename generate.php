<?php
session_start();
require_once 'inc/init.php';

$sect = new ReadMe();


if($_SERVER['REQUEST_METHOD']!=='POST'){
    die('You do not have permission to be here');
}


// HAVE TO ADD THIS HERE BECAUSE IT IS THE LAST PAGE IN THE FORM. ALL OTHER SESSIONS ARE SET ON THE FORM PAGE
if(isset($_POST['connections']) && $_SERVER['REQUEST_METHOD']=='POST') 
    $_SESSION['connections'] = $_POST['connections'];

/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
THE ORDER IN WHICH ALL THESE SECTIONS ARE APPENDED IS INTENTIONAL, SO KEEP 
PROCEDURES THAT FOLLOW IN THE ORDER THAT THEY ARE IN.
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/    

// ?input=2 PROJECT INFO
if(isset($_SESSION['subtitle'])) $sect->projectDesc =  $_SESSION['subtitle'];
if(isset($_SESSION['project_name'])) $sect->project = $_SESSION['project_name'];

// WRITE TO FILE First to will replace any contents already in file
file_put_contents("md-files/README_file.md",$sect->headtop());

// THESE ARE THE BANNER STYLE OTIONS
if($_SESSION['addbanner1']) file_put_contents("md-files/README_file.md",$sect->banner('one'), FILE_APPEND);
if($_SESSION['addbanner2']) file_put_contents("md-files/README_file.md",$sect->banner('two'), FILE_APPEND);
if($_SESSION['addbanner3']) file_put_contents("md-files/README_file.md",$sect->banner('three'), FILE_APPEND);

// TOP: CONTENT AT TOP OF PAGE
file_put_contents("md-files/README_file.md",$sect->top(), FILE_APPEND);

// TABLE OF CONTENTS
file_put_contents("md-files/README_file.md",$sect->toc(), FILE_APPEND);

// ?input=3 => KEY FEATURES
if(isset($_SESSION['key_features'])) 
{
    $sect->keyFeatures = $_SESSION['key_features']; //$sect->keyfeat()
    file_put_contents("md-files/README_file.md",$sect->keyfeat(), FILE_APPEND);
}
    file_put_contents("md-files/README_file.md",$sect->imgs(), FILE_APPEND);

// ?input=7 => ABOUT
if(isset($_SESSION['about'])) 
{
    $sect->aboutProj = $_SESSION['about']; //$sect->about()
    file_put_contents("md-files/README_file.md",$sect->about(), FILE_APPEND);
}

// ?input=6 => DEMO
if(isset($_SESSION['demo']))
{
    $sect->demoUrl = $_SESSION['demo'];
    file_put_contents("md-files/README_file.md",$sect->demo(), FILE_APPEND);
} 

// ?input=5 => DEPENDENCIES
if(isset($_SESSION['dependencies'])){
    $sect->dependencies = $_SESSION['dependencies'];
    file_put_contents("md-files/README_file.md",$sect->dependencies(), FILE_APPEND); 
} 

// ?input=4 => INSTALLATION
if(isset($_SESSION['installation']))
{
    $sect->installation = $_SESSION['installation'];
    file_put_contents("md-files/README_file.md",$sect->installation(), FILE_APPEND);
}

// DOWNLOAD
if(isset($_SESSION['adddownload']))
    file_put_contents("md-files/README_file.md",$sect->download(), FILE_APPEND);


// ?input=8 => OUTPUT STRUCTURE
if(isset($_SESSION['file_tree']))
{
    $sect->fileTree = $_SESSION['file_tree']; //$sect->output_struct()
    file_put_contents("md-files/README_file.md",$sect->output_struct(), FILE_APPEND);
}

// ?input=9 => HOW IT WORKS
if(isset($_SESSION['how_it_works']))
{
    $sect->howItWorks = $_SESSION['how_it_works']; //$sect->how_it_works()
    file_put_contents("md-files/README_file.md",$sect->how_it_works(), FILE_APPEND);
}
// LICENSE
if(isset($_SESSION['addlicense']))
    file_put_contents("md-files/README_file.md",$sect->license(), FILE_APPEND);    

// ?input=10 =>  SUPPORT
if(isset($_SESSION['support_like_share_donate']))
{
    $sect->support = $_SESSION['support_like_share_donate'] ; //$sect->support()
    file_put_contents("md-files/README_file.md",$sect->support(), FILE_APPEND);
}

// ?input=11 => CONTRIBUTIONS    
if(isset($_SESSION['contributions']))
{
    $sect->contribute = $_SESSION['contributions']; //$sect->contribute());
    file_put_contents("md-files/README_file.md",$sect->contribute(), FILE_APPEND);
}

// ?input=12 => CREDITS
if(isset($_SESSION['credits']))
{
    $sect->credits = $_SESSION['credits']; //$sect->credits()
    file_put_contents("md-files/README_file.md",$sect->credits(), FILE_APPEND);
}

// ?input=13 => LINKS
if(isset($_SESSION['related_links']))
{
    $sect->links = $_SESSION['related_links']; //$sect->links()
    file_put_contents("md-files/README_file.md",$sect->links(), FILE_APPEND);
}

// ?input14 => CONTACTS
if(isset($_SESSION['connections']))
{
    $sect->contacts = $_SESSION['connections']; //$sect->contacts()
    file_put_contents("md-files/README_file.md",$sect->contacts(), FILE_APPEND);
}
// BOTTOM
file_put_contents("md-files/README_file.md",$sect->bottom(), FILE_APPEND);

// THESE ARE THE BANNER STYLE OTIONS
if($_SESSION['addbanner1']) file_put_contents("md-files/README_file.md",$sect->banner('one'), FILE_APPEND);
if($_SESSION['addbanner2']) file_put_contents("md-files/README_file.md",$sect->banner('two'), FILE_APPEND);
if($_SESSION['addbanner3']) file_put_contents("md-files/README_file.md",$sect->banner('three'), FILE_APPEND);

file_put_contents("md-files/README_file.md",$sect->backTotop, FILE_APPEND);

header("location: results");