<?php
session_start();
if(!isset($_SESSION['stat'])) 
{
    echo '
<html>
    <head>
        <title>ReadMe Markdown File Generator</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="start_head">
            <h1> <a href=".">Start Here</a> </h1>
            <div> >> </div>
        </div>  
    </body>
</html>  
';
    die();
}
/* CREATING THESE SESSIONS IF POST ISSET:
$_SESSION['github_id']
$_SESSION['github_repo']
$_SESSION['project_name']
$_SESSION['subtitle']
$_SESSION['key_features']
$_SESSION['about']
$_SESSION['file_tree']
$_SESSION['how_it_works']
$_SESSION['support_like_share_donate'] 
$_SESSION['contributions']
$_SESSION['credits']
$_SESSION['related_links']
$_SESSION['connections']
*/

if(isset($_POST['github_id']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['github_id'] = $_POST['github_id'];
if(isset($_POST['github_repo']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['github_repo'] = $_POST['github_repo'];
if(isset($_POST['project_name']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['project_name'] = $_POST['project_name'];
if(isset($_POST['subtitle']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['subtitle'] = $_POST['subtitle'];
if(isset($_POST['key_features']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['key_features'] = $_POST['key_features'];
if(isset($_POST['about']) && $_SERVER['REQUEST_METHOD']=='POST') $_SESSION['about'] = $_POST['about'];
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
    case 11:
        if(isset($_SESSION['connections'])){
            $value = $_SESSION['connections'];
        }else{$value = $markdown->contacts;}

        $input = $form->inputArea('Connections', 'Provide contact information here _like your email (if you want) or other ways/instructions to reach you.', $value);
        $action = $mainurl;
        $back = "?input=10";         
        break;

    case 10:
        if(isset($_SESSION['related_links'])){
            $value = $_SESSION['related_links'];
        }else{$value = $markdown->links;}
        
        $input = $form->inputArea('Related Links', 'Share links that are relevant to the project.', $value );
        $action = "?input=11";
        $back = "?input=9";         
        break;  



    case 9:
        if(isset($_SESSION['credits'])){
            $value = $_SESSION['credits'];
        }else{$value = $markdown->credits;}
        
        $input = $form->inputArea('Credits', 'Here is where you give credit to any source that helped you in creating this project.', $value);
        $action = "?input=10";
        $back = "?input=8";         
        break; 

    case 8:
        if(isset($_SESSION['contributions'])){
            $value = $_SESSION['contributions'];
        }else{$value = $markdown->contribute;}
        
        $input = $form->inputArea('Contributions', 'Write instructions for contributing or just use the default created by generator.', $value);
        $action = "?input=9";
        $back = "?input=7";         
        break;        
    case 7:
        if(isset($_SESSION['support_like_share_donate'] )){
            $value = $_SESSION['support_like_share_donate'] ;
        }else{$value = $markdown->support;}
        
        $input = $form->inputArea('Support, Like, Share, Donate', 'This is where you paste in support links like Paetreon and like/share buttons and instructions.', $value);
        $action = "?input=8";
        $back = "?input=6";         
        break;

    case 6:
        if(isset($_SESSION['how_it_works'])){
            $value = $_SESSION['how_it_works'];
        }else{$value = $markdown->howItWorks;}
        
        $input = $form->inputArea('How It Works', 'Talk about how it works here.', $value);
        $action = "?input=7";
        $back = "?input=5";         
        break;
    case 5:
        if(isset($_SESSION['file_tree'])){
            $value = $_SESSION['file_tree'];
        }else{$value = $markdown->fileTree;}

        $input = $form->inputArea('File Tree', 'Use the Shell or BASH to generate a file tree and PASTE it here.', $value,'15');
        $action = "?input=6";
        $back = "?input=4";         
        break;

    case 4:
        if(isset($_SESSION['about'])){
            $value = $_SESSION['about'];
        }else{$value = $markdown->aboutProj; }

        $input = $form->inputArea('About', 'Write in as many words as you want, all about your project _what it is, what it does, and why you created it.', $value);
        $action = "?input=5";
        $back = "?input=3";         
        break;

    case 3:
        if(isset($_SESSION['key_features'])){
            $value = $_SESSION['key_features'];
        }else{$value = $markdown->keyFeatures; }

        $input = $form->inputArea('Key Features', 'Type or paste in key features here. Suggestion: Make a bullet list. For a bullet list, you can use MD or HTML format.', $value);
        $action = "?input=4";
        $back = "?input=2";        
        break;

    case 2:
        if(isset($_SESSION['project_name'])){
            $value = 'value="' . $_SESSION['project_name'] . '" ';
        }else{$value = 'placeholder="ex. '.$markdown->project.'"'; }
        
        if(isset($_SESSION['subtitle'])){
            $value2 = 'value="' . $_SESSION['subtitle'] . '" ';
        }else{$value2 = 'placeholder="ex. '.$markdown->projectDesc.'"'; }

        $input = $form->inputTxt('Project Name', 'Create a unique name for project, ', $value ) .
        $form->inputTxt('Subtitle', 'Use 1 short sentence to describe what this is or what it does.', $value2 );
        $action = "?input=3";
        $back = $mainurl;          
        break;       
        
    case 1:
        if(isset($_SESSION['github_id'])){
            $value = 'value="' . $_SESSION['github_id'] . '" ';
        }else{$value = 'placeholder="ex. '.$markdown->githubID.'"'; }
        
        if(isset($_SESSION['github_repo'])){
            $value2 = 'value="' . $_SESSION['github_repo'] . '" ';
        }else{$value2 = 'placeholder="ex. '.$markdown->githubClone.'"'; }

        $input = $form->inputTxt('Github id', 'Add your GitHub id.', $value) .
        $form->inputTxt('Github repo', 'Add the name of your repository.', $value2);
        $action = "?input=2";
        $back = null;          
        break;             

    default: 
        if(isset($_SESSION['github_id'])){
            $value = 'values="' . $_SESSION['github_id'] . '" ';
        }else{$value = 'placeholder="ex. '.$markdown->githubID.'"'; }
        
        if(isset($_SESSION['github_repo'])){
            $value2 = 'values="' . $_SESSION['github_repo'] . '" ';
        }else{$value2 = 'placeholder="ex. '.$markdown->githubClone.'"'; }

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
        <link rel="stylesheet" href="style.css">

    </head>
    <body>

<div class="start_head">
    <h1>ReadMe Markdown File Generator</h1>
    <div>>></div>
</div>
<div class="form-wrapper">
    <form action="<?=$action?>" method="POST">      

<?php echo $input.'<br><br>';
 if($back !== null) : ?>

<button  class="form-btn" style="float:left"><a href="<?=$back?>"><< Back</a></button>
<?php 
endif ;
if(isset($_GET['input'])){
    if($_GET['input'] != 11) {

    echo '<button  class="form-btn" style="float:right" type="submit" name="submit">Next >></button>';
}
if($_GET['input'] == 11){
    echo '<p align="center"><button class="form-btn" type="submit" name="submit">Generate ReadMe Markdown >></button></p>';
}
}else{
    echo '<button  class="form-btn" style="float:right" type="submit" name="submit">Next >></button>';
}

?>

</form>
    </div>

<p align="center"><a href="end_session"><u>Clear Session Cookies</u></a></p>

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