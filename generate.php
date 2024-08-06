<?php
/**
 * 
 * THIS IS HOW YOU FIX THE PROBLEM SHOWING BENEATH IMAGES:
 * THE REASON IT IS SHOWING IS BECAUSE YOU ARE USING foreach TO LOOP THROUGH ALL ARRAY VALUES IN SESSION. IT STARTS WITH THE FIRST TWO ARRAY VALUES. SO YOU DO NOT WANT IT TO LOOP THROUGH THE SESSIONS, INSTEAD STORE TEH SESSIONS INTO VARIABLES LIKE BELOW ($part[]) AND APPEND TO FILE IN THE CORRECT ORDER. THIS WAY YOU DO NOT HAVE PIECES OF CODE APPENDING THAT YOU DO NOT WANT IN THE FILE
 * 
 */
session_start();
include 'classes/ReadMe.php';
$gen = new ReadMe();

// HAVE TO ADD THIS HERE BECAUSE IT IS THE LAST PAGE IN THE FORM. ALL OTHER SESSIONS ARE SET ON THE FORM PAGE
if(isset($_POST['connections']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['connections'] = $_POST['connections'];

// ASSIGNING VALUES TO CLASS PROPERTIES USING SESSION VALUES

$gen->projectDesc =  $_SESSION['subtitle'];
$gen->project = $_SESSION['project_name'];
$gen->keyFeatures = $_SESSION['key_features']; //$gen->keyfeat()
$gen->aboutProj = $_SESSION['about']; //$gen->about()
$gen->demoUrl = $_SESSION['demo'];
$gen->dependencies = $_SESSION['dependencies'];
$gen->installation = $_SESSION['installation'];
$gen->fileTree = $_SESSION['file_tree']; //$gen->output_struct()
$gen->howItWorks = $_SESSION['how_it_works']; //$gen->how_it_works()
$gen->support = $_SESSION['support_like_share_donate'] ; //$gen->support()
$gen->contribute = $_SESSION['contributions']; //$gen->contribute()
$gen->credits = $_SESSION['credits']; //$gen->credits()
$gen->links = $_SESSION['related_links']; //$gen->links()
$gen->contacts = $_SESSION['connections']; //$gen->contacts()


// file_put_contents("README_file.md",'');
// foreach($part as $section)
// {        
//     file_put_contents("README_file.md", $section, FILE_APPEND);
//     header("location: README_file.md");
// }


///////////////////////////////////////////////////////////////////////////
if($_SERVER['REQUEST_METHOD']=='POST')
{

    // First add does not append, so that it will replace any contents already in file
    file_put_contents("README_file.md",$gen->top());

    file_put_contents("README_file.md",$gen->toc(), FILE_APPEND);
    file_put_contents("README_file.md",$gen->keyfeat(), FILE_APPEND);
    file_put_contents("README_file.md",$gen->imgs(), FILE_APPEND);
    file_put_contents("README_file.md",$gen->about(), FILE_APPEND);
    file_put_contents("README_file.md",$gen->demo(), FILE_APPEND);
    file_put_contents("README_file.md",$gen->dependencies(), FILE_APPEND);
    file_put_contents("README_file.md",$gen->installation(), FILE_APPEND);
    file_put_contents("README_file.md",$gen->download(), FILE_APPEND);
    file_put_contents("README_file.md",$gen->output_struct(), FILE_APPEND);
    file_put_contents("README_file.md",$gen->how_it_works(), FILE_APPEND);
    file_put_contents("README_file.md",$gen->license(), FILE_APPEND);
    file_put_contents("README_file.md",$gen->support(), FILE_APPEND);
    file_put_contents("README_file.md",$gen->contribute(), FILE_APPEND);
    file_put_contents("README_file.md",$gen->credits(), FILE_APPEND);
    file_put_contents("README_file.md",$gen->links(), FILE_APPEND);
    file_put_contents("README_file.md",$gen->contacts(), FILE_APPEND);
    file_put_contents("README_file.md",$gen->bottom(), FILE_APPEND);

    header("location: form");

}    