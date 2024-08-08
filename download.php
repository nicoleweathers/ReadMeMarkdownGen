<?php
// THIS WILL PROMPT DOWNLOAD OF FILE
 if(!empty($_GET['file'])){ 
    // Define file name and path 
    $fileName = basename($_GET['file']); 
    $filePath = 'md-files/'.$fileName; 
 
    if(!empty($fileName) && file_exists($filePath)){ 
        // Define headers 
        header("Content-Description: File Transfer"); 
        header("Content-Disposition: attachment; filename=$fileName"); 
        header('Content-Type: application/octet-stream');
        header("Content-Transfer-Encoding: binary"); 
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
         
        // Read the file 
        readfile($filePath); 
    }
 }