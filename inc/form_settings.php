<?php
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
/* CREATING THESE SESSIONS IF POST ISSET: */

if(isset($_POST['github_id']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['github_id'] = $_POST['github_id'];
if(isset($_POST['github_repo']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['github_repo'] = $_POST['github_repo'];
if(isset($_POST['project_name']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['project_name'] = $_POST['project_name'];
if(isset($_POST['subtitle']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['subtitle'] = $_POST['subtitle'];
if(isset($_POST['key_features']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['key_features'] = $_POST['key_features'];
if(isset($_POST['about']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['about'] = $_POST['about'];
if(isset($_POST['demo']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['demo'] = $_POST['demo'];
if(isset($_POST['dependencies']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['dependencies'] = $_POST['dependencies'];
if(isset($_POST['installation']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['installation'] = $_POST['installation'];
if(isset($_POST['file_tree']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['file_tree'] = $_POST['file_tree'];
if(isset($_POST['how_it_works']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['how_it_works'] = $_POST['how_it_works'];
if(isset($_POST['support_like_share_donate']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['support_like_share_donate'] = $_POST['support_like_share_donate'];
if(isset($_POST['contributions']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['contributions'] = $_POST['contributions'];
if(isset($_POST['credits']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['credits'] = $_POST['credits'];
if(isset($_POST['related_links']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['related_links'] = $_POST['related_links'];
if(isset($_POST['connections']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['connections'] = $_POST['connections'];
 
include 'classes/ReadMe.php';
include 'classes/Form.php';

$markdown = new ReadMe();
$form = new Form();

$mainurl = "./form";

if(isset($_GET['input'])){
    $add = $_GET['input'];
}else{
    $add = 1;
}

switch($add)
{
    case 14:
        if(isset($_SESSION['connections'])){
            $value = $_SESSION['connections'];
        }else{$value = $markdown->contacts;}

        $input = $form->inputArea('Connections', 'Provide contact information here _like your email (if you want) or other ways/instructions to reach you.', $value,8);
        $action = "generate";
        $back = "?input=13";         
        break;

    case 13:
        if(isset($_SESSION['related_links'])){
            $value = $_SESSION['related_links'];
        }else{$value = $markdown->links;}
        
        $input = $form->inputArea('Related Links', 'Share links that are relevant to the project.', $value,10);
        $action = "?input=14";
        $back = "?input=12";         
        break;  



    case 12:
        if(isset($_SESSION['credits'])){
            $value = $_SESSION['credits'];
        }else{$value = $markdown->credits;}
        
        $input = $form->inputArea('Credits', 'Here is where you give credit to any source that helped you in creating this project.', $value,20);
        $action = "?input=13";
        $back = "?input=11";         
        break; 

    case 11:
        if(isset($_SESSION['contributions'])){
            $value = $_SESSION['contributions'];
        }else{$value = $markdown->contribute;}
        
        $input = $form->inputArea('Contributions', 'Write instructions for contributing or just use the default created by generator.', $value,14);
        $action = "?input=12";
        $back = "?input=10";         
        break;        
    case 10:
        if(isset($_SESSION['support_like_share_donate'] )){
            $value = $_SESSION['support_like_share_donate'] ;
        }else{$value = $markdown->support;}
        
        $input = $form->inputArea('Support, Like, Share, Donate', 'This is where you paste in support links like Paetreon and like/share buttons and instructions.', $value);
        $action = "?input=11";
        $back = "?input=9";         
        break;

    case 9:
        if(isset($_SESSION['how_it_works'])){
            $value = $_SESSION['how_it_works'];
        }else{$value = $markdown->howItWorks;}
        
        $input = $form->inputArea('How It Works', 'Talk about how it works here.', $value);
        $action = "?input=10";
        $back = "?input=8";         
        break;
    case 8:
        if(isset($_SESSION['file_tree'])){
            $value = $_SESSION['file_tree'];
        }else{$value = $markdown->fileTree;}

        $input = $form->inputArea('File Tree', 'Use the Shell or BASH to generate a file tree and PASTE it here.', $value,'16');
        $action = "?input=9";
        $back = "?input=7";         
        break;

    case 7:
        if(isset($_SESSION['about'])){
            $value = $_SESSION['about'];
        }else{$value = $markdown->aboutProj; }

        $input = $form->inputArea('About', 'Write in as many words as you want, all about your project _what it is, what it does, and why you created it.', $value,18);
        $action = "?input=8";
        $back = "?input=6";         
        break;

    case 6:// $gen->demo();
        if(isset($_SESSION['demo'])){
            $value = 'value="' . $_SESSION['demo'] . '" ';
        }else{$value = 'value="ex. '.$markdown->demoUrl.'"'; }        

        $input = $form->inputTxt('Demo', 'Add url to project demo', $value);
        $action = "?input=7";
        $back = "?input=5";         
        break;

    case 5: // $gen->; 

        if(isset($_SESSION['dependencies'])){
            $value = $_SESSION['dependencies'];
        }else{$value = $markdown->dependencies; }

        $input = $form->inputArea('Dependencies', 'Write about dependecies here', $value,8);
        $action = "?input=6";
        $back = "?input=4";         
        break;

    case 4:// $gen->;
        if(isset($_SESSION['installation'])){
            $value = $_SESSION['installation'];
        }else{$value = $markdown->installation; }

        $input = $form->inputArea('Installation', 'This is where you give installation instructions. ', $value,15);
        $action = "?input=5";
        $back = "?input=3";         
        break;

    case 3:
        if(isset($_SESSION['key_features'])){
            $value = $_SESSION['key_features'];
        }else{$value = $markdown->keyFeatures; }

        $input = $form->inputArea('Key Features', 'Type or paste in key features here. Suggestion: Make a bullet list. For a bullet list, you can use MD or HTML format.', $value,8);
        $action = "?input=4";
        $back = "?input=2";        
        break;

    case 2:
        if(isset($_SESSION['project_name'])){
            $value = 'value="' . $_SESSION['project_name'] . '" ';
        }else{$value = 'value="ex. '.$markdown->project.'"'; }
        
        if(isset($_SESSION['subtitle'])){
            $value2 = 'value="' . $_SESSION['subtitle'] . '" ';
        }else{$value2 = 'value="ex. '.$markdown->projectDesc.'"'; }

        $input = $form->inputTxt('Project Name', 'Create a unique name (title) for project, ', $value ) .
        $form->inputTxt('Subtitle', 'Use 1 short sentence to describe what this is or what it does.', $value2 );
        $action = "?input=3";
        $back = $mainurl;          
        break;       
        
    case 1:
        if(isset($_SESSION['github_id'])){
            $value = 'value="' . $_SESSION['github_id'] . '" ';
        }else{$value = 'value="ex. '.$markdown->githubID.'"'; }
        
        if(isset($_SESSION['github_repo'])){
            $value2 = 'value="' . $_SESSION['github_repo'] . '" ';
        }else{$value2 = 'value="ex. '.$markdown->githubClone.'"'; }

        $input = $form->inputTxt('Github id', 'Add your GitHub id.', $value) .
        $form->inputTxt('Github repo', 'Add the name of your repository (no spaces).', $value2);
        $action = "?input=2";
        $back = null;          
        break;             

    default: 
        if(isset($_SESSION['github_id'])){
            $value = 'values="' . $_SESSION['github_id'] . '" ';
        }else{$value = 'value="ex. '.$markdown->githubID.'"'; }
        
        if(isset($_SESSION['github_repo'])){
            $value2 = 'values="' . $_SESSION['github_repo'] . '" ';
        }else{$value2 = 'value="ex. '.$markdown->githubClone.'"'; }

        $input = $form->inputTxt('Github id', 'Add your GitHub id.', $value) .
        $form->inputTxt('Github repo', 'Add the name of your repository.', $value2);
        $action = "?pid=2";
        $back = null;            
        break;   
}  

function form()
{
    echo '<form action="'.$GLOBALS['action'].'" method="POST">' .

    $GLOBALS['input'] . '<br><br>';

     if($GLOBALS['back'] !== null) 
    
    echo '<a href="'.$GLOBALS['back'].'"><button  class="form-btn" style="float:left"><< Back</button></a>';

    if(isset($_GET['input'])){
        if($_GET['input'] != 14) {
    
        echo '<button  class="form-btn" style="float:right" type="submit" name="submit">Next >></button>';
    }

    if($_GET['input'] == 14){
        echo '<p align="center"><button class="form-btn" type="submit" name="submit">Generate ReadMe Markdown >></button></p>';
    }
    }else{
        echo '<button  class="form-btn" style="float:right" type="submit" name="submit">Next >></button>';
    }
    
    echo '</form>';
}

function links()
{
    $pages = [
        'About' => '?input=7',
        'Contacts' => '?input=14',
        'Contribute' => '?input=11',
        'Credits' => '?input=12',
        'Demo' => '?input=6',
        'Dependencies' => '?input=5',
        'File Tree' => '?input=8',
        'GitHub id & Repo id' => 'form',
        'How it Works' => '?input=9',
        'Installation' => '?input=4',
        'Key Features' => '?input=3',
        'Links' => '?input=13',
        'Project Name & Subtitle' => '?input=2',
        'Support' => '?input=10',
    ];

    echo '<p align="center">';

    foreach($pages as $name => $link)
    {
        echo '&nbsp;<a href="'.$link.'">'.$name.'</a>&nbsp;&bull;';
    }
    
    echo '</p>';
}