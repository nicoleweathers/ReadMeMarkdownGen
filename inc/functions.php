<?php

function footercopy()
{
    $start_yr = 2024;
    $current_yr = date('Y');

    if ($start_yr < $current_yr) {
      $copyright_date = $start_yr . ' - ' . $current_yr;
    } else {
      $copyright_date = $current_yr;
    }
    return '&copy; ' . $copyright_date . ' Designed by <a href="https://github.com/'.GITHUBID.'" target="_blank">'.AUTHOR.'</a>';
}

function option($class,$id,$title='',$checked='')
{
    echo '
        <div class="gchild '.$class.'">
            <input type="checkbox" id="'.$id.'" '.$checked.'>
            <label for="'.$id.'">
            <img src="imgs/px.png">
            </label>        
            <p>'.$title.'</p>        
        </div>
    ';
}

function htmlheader()
{
    return '
<!DOCTYPE html>
<html lang="en">

<head>
  <title>ReadMe Markdown File Generator</title>
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <div id="top">
    ReadMe MarkDown Gen
  </div>
  <div class="top">
    Time saving markdown file generator
  </div>    
    ';
}

function wsfooter()
{
    return '
    <footer>
    <a href="." class="home">&#8962;</a>
'.footercopy().'
    </footer>
</body</html>';
}

function md_download()
{
  // THIS WILL PROMPT DOWNLOAD OF FILE
 if(!empty($_GET['file']))
 { 
    // Define file name and path 
    $fileName = basename($_GET['file']); 
    $filePath = './'.$fileName; 
 
    if(!empty($fileName) && file_exists($filePath)){ 
        // Define headers 
        header("Content-Description: File Transfer"); 
        header("Content-Disposition: attachment; filename=$fileName"); 
        header('Content-Type: application/octet-stream'); // CHANGE THIS BASED ON CONTENT-TYPE
        header("Content-Transfer-Encoding: binary"); 
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
         
        // Read the file 
        readfile($filePath); 
    }
 }
}
