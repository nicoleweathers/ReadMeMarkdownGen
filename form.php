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


/** @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ **/


/* CREATING THESE SESSIONS IF POST ISSET: */

// if(isset($_POST['github_id']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['github_id'] = $_POST['github_id'];
// if(isset($_POST['github_repo']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['github_repo'] = $_POST['github_repo'];
// if(isset($_POST['project_name']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['project_name'] = $_POST['project_name'];
// if(isset($_POST['subtitle']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['subtitle'] = $_POST['subtitle'];
// if(isset($_POST['key_features']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['key_features'] = $_POST['key_features'];
// if(isset($_POST['about']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['about'] = $_POST['about'];
// if(isset($_POST['demo']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['demo'] = $_POST['demo'];
// if(isset($_POST['dependencies']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['dependencies'] = $_POST['dependencies'];
// if(isset($_POST['installation']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['installation'] = $_POST['installation'];
// if(isset($_POST['file_tree']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['file_tree'] = $_POST['file_tree'];
// if(isset($_POST['how_it_works']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['how_it_works'] = $_POST['how_it_works'];
// if(isset($_POST['support_like_share_donate']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['support_like_share_donate'] = $_POST['support_like_share_donate'];
// if(isset($_POST['contributions']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['contributions'] = $_POST['contributions'];
// if(isset($_POST['credits']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['credits'] = $_POST['credits'];
// if(isset($_POST['related_links']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['related_links'] = $_POST['related_links'];
// if(isset($_POST['connections']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['connections'] = $_POST['connections'];
 
require_once './inc/init.php';

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
        if(!isset($_SESSION['addcontacts'])) header('location: go');
        if(isset($_SESSION['connections'])){
            $value = $_SESSION['connections'];
        }else{$value = $markdown->contacts;}

        $input = $form->inputArea('Connections', 'Provide contact information here _like your email (if you want) or other ways/instructions to reach you.', $value,8);

        $action = "generate";

        if(isset($_SESSION['addlinks'])) $back = "?input=13";
        else $back = "?input=12";  

        break;

    case 13:
        if(!isset($_SESSION['addlinks'])) header('location: ?input=14');
        if(isset($_SESSION['related_links'])){
            $value = $_SESSION['related_links'];
        }else{$value = $markdown->links;}
        
        $input = $form->inputArea('Related Links', 'Share links that are relevant to the project.', $value,10);

        if(isset($_SESSION['addcontacts'])) $action = "?input=14";
        else $action = "generate";
      
        if(isset($_SESSION['addcredits'])) $back = "?input=12";
        else $back = "?input=11";          
        
        break;  


    case 12:
        if(!isset($_SESSION['addcredits'])) header('location: ?input=13');
        if(isset($_SESSION['credits'])){
            $value = $_SESSION['credits'];
        }else{$value = $markdown->credits;}
        
        $input = $form->inputArea('Credits', 'Here is where you give credit to any source that helped you in creating this project.', $value,20);

        
        if(isset($_SESSION['addlinks'])) $action = "?input=13";
        else $action = "?input=14";
      
        if(isset($_SESSION['addcontributions'])) $back = "?input=11";
        else $back = "?input=10";  

        break; 
  
    case 11:
        
        if(!isset($_SESSION['addcontributions'])) header('location: ?input=12');
        if(isset($_SESSION['contributions'])){
            $value = $_SESSION['contributions'];
        }else{$value = $markdown->contribute;}
        
        $input = $form->inputArea('Contributions', 'Write instructions for contributing or just use the default created by generator.', $value,14);

        if(isset($_SESSION['addcredits'])) $action = "?input=12";
        else $action = "?input=13";
      
        if(isset($_SESSION['addsupport'])) $back = "?input=10";
        else $back = "?input=9";          
        
        break;    
      
        
    case 10:
        if(!isset($_SESSION['addsupport'])) header('location: ?input=11');
        if(isset($_SESSION['support_like_share_donate'] )){
            $value = $_SESSION['support_like_share_donate'] ;
        }else{$value = $markdown->support;}
        
        $input = $form->inputArea('Support, Like, Share, Donate', 'This is where you paste in support links like Paetreon and like/share buttons and instructions.', $value);

        if(isset($_SESSION['addcontributions'])) $action = "?input=11";
        else $action = "?input=12";
      
        if(isset($_SESSION['addhow-it-works'])) $back = "?input=9";
        else $back = "?input=8";       

        break;
 
    case 9:
        if(!isset($_SESSION['addhow-it-works'])) header('location: ?input=10');
        if(isset($_SESSION['how_it_works'])){
            $value = $_SESSION['how_it_works'];
        }else{$value = $markdown->howItWorks;}
        
        $input = $form->inputArea('How It Works', 'Talk about how it works here.', $value);

        if(isset($_SESSION['addsupport'])) $action = "?input=10";
        else $action = "?input=11";
      
        if(isset($_SESSION['addoutput-structure'])) $back = "?input=8";
        else $back = "?input=7";          
        
        break;
      
    case 8:
        if(!isset($_SESSION['addoutput-structure'])) header('location: ?input=9');
        if(isset($_SESSION['file_tree'])){
            $value = $_SESSION['file_tree'];
        }else{$value = $markdown->fileTree;}

        $input = $form->inputArea('File Tree', 'Use the Shell or BASH to generate a file tree and PASTE it here.', $value,'16');

        if(isset($_SESSION['addhow-it-works'])) $action = "?input=9";
        else $action = "?input=10";
      
        $back = "?input=7";       
        
        break;

    case 7:
        if(isset($_SESSION['about'])){
            $value = $_SESSION['about'];
        }else{$value = $markdown->aboutProj; }

        $input = $form->inputArea('About', 'Write in as many words as you want, all about your project _what it is, what it does, and why you created it.', $value,18);

        if(isset($_SESSION['addoutput-structure'])) $action = "?input=8";
        else $action = "?input=9";
      
        if(isset($_SESSION['adddemo'])) $back = "?input=6";
        else $back = "?input=5";  

        break;

    case 6:// $gen->demo();
        if(!isset($_SESSION['adddemo'])) header('location: ?input=7');
        if(isset($_SESSION['demo'])){
            $value = 'value="' . $_SESSION['demo'] . '" ';
        }else{$value = 'value="'.$markdown->demoUrl.'"'; }        

        $input = $form->inputTxt('Demo', 'Add url to project demo', $value);

        $action = "?input=7";
      
        if(isset($_SESSION['adddependencies'])) $back = "?input=5";
        else $back = "?input=4";  

        break;

    case 5: // $gen->; 
        if(!isset($_SESSION['adddependencies'])) header('location: ?input=6');
        if(isset($_SESSION['dependencies'])){
            $value = $_SESSION['dependencies'];
        }else{$value = $markdown->dependencies; }

        $input = $form->inputArea('Dependencies', 'Write about dependecies here', $value,8);

        if(isset($_SESSION['adddemo'])) $action = "?input=6";
        else $action = "?input=7";
      
        if(isset($_SESSION['addinstallation'])) $back = "?input=4";
        else $back = "?input=3";  

        break;

    case 4:// $gen->;
        if(!isset($_SESSION['addinstallation'])) header('location: ?input=5');
        if(isset($_SESSION['installation'])){
            $value = $_SESSION['installation'];
        }else{$value = $markdown->installation; }

        $input = $form->inputArea('Installation', 'This is where you give installation instructions. ', $value,15);

        if(isset($_SESSION['adddependencies'])) $action = "?input=5";
        else $action = "?input=6";
      
        if(isset($_SESSION['addkeyfeatures'])) $back = "?input=3";
        else $back = "?input=2";

        break;

    case 3:
        if(!isset($_SESSION['addkeyfeatures'])) header('location: ?input=4');
        if(isset($_SESSION['key_features'])){
            $value = $_SESSION['key_features'];
        }else{$value = $markdown->keyFeatures; }

        $input = $form->inputArea('Key Features', 'Type or paste in key features here. Suggestion: Make a bullet list. For a bullet list, you can use MD or HTML format.', $value,8);

        if(isset($_SESSION['addinstallation'])) $action = "?input=4";
        else $action = "?input=5";

        $back = "?input=2";        
        break;

    case 2:
        if(isset($_SESSION['project_name'])){
            $value = 'value="' . $_SESSION['project_name'] . '" ';
        }else{$value = 'value="'.$markdown->project.'"'; }
        
        if(isset($_SESSION['subtitle'])){
            $value2 = 'value="' . $_SESSION['subtitle'] . '" ';
        }else{$value2 = 'value="'.$markdown->projectDesc.'"'; }

        $input = $form->inputTxt('Project Name', 'Create a unique name (title) for project, ', $value ) .
        $form->inputTxt('Subtitle', 'Use 1 short sentence to describe what this is or what it does.', $value2 );

        if(isset($_SESSION['addkeyfeatures'])) $action = "?input=3";
        else $action = "?input=4";

        $back = $mainurl;          
        break;       
        
    case 1:
        if(isset($_SESSION['github_id'])){
            $value = 'value="' . $_SESSION['github_id'] . '" ';
        }else{$value = 'value="'.$markdown->githubID.'"'; }
        
        if(isset($_SESSION['github_repo'])){
            $value2 = 'value="' . $_SESSION['github_repo'] . '" ';
        }else{$value2 = 'value="'.$markdown->githubClone.'"'; }

        $input = $form->inputTxt('Github id', 'Add your GitHub id.', $value) .
        $form->inputTxt('Github repo', 'Add the name of your repository (no spaces).', $value2);
        $action = "?input=2";
        $back = null;          
        break;             

    default: 
        if(isset($_SESSION['github_id'])){
            $value = 'values="' . $_SESSION['github_id'] . '" ';
        }else{$value = 'value="'.$markdown->githubID.'"'; }
        
        if(isset($_SESSION['github_repo'])){
            $value2 = 'values="' . $_SESSION['github_repo'] . '" ';
        }else{$value2 = 'value="'.$markdown->githubClone.'"'; }

        $input = $form->inputTxt('Github id', 'Add your GitHub id.', $value) .
        $form->inputTxt('Github repo', 'Add the name of your repository.', $value2);
        $action = "?pid=2";
        $back = null;            
        break;   
}  

?>

<html>
    <head>
        <title>Form</title>
        <link rel="icon" href="favicon.ico">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

<div class="start_head">
    <h1>ReadMe Markdown File Generator</h1>
    <div>&nbsp;&#10148;</div>
</div>
<p style="color:#F43E30;text-align:center">Important: You should change the text but not formatting, unless you know what you are doing. </p>
<div class="form-wrapper">
    <form action="<?=$action?>" method="POST">      

<?php echo $input.'<br><br>';
 if($back !== null) : ?>

<button  class="form-btn" style="float:left"><a href="<?=$back?>"><< Back</a></button>
<?php 
endif ;
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

?>

</form>
    </div>
    <div style="display:flex;align-items:center">
        <p style="font-size:2em;margin-right:25px;"><a href=".">&#8962;</a></p>
<p style="flex:1"><a href="end_session"><u>Clear Session Cookies</u></a></p>
    </div>

<?php pagelinks() ?>

<script>
const growers = document.querySelectorAll(".grow-wrap");

growers.forEach((grower) => {
    const textarea = grower.querySelector("textarea");
    textarea.addEventListener("input", () => {
        grower.dataset.replicatedValue = textarea.value;
    });
});
</script>    


<br><br>
    </body>
</html>