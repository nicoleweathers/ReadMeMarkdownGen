<?php
include 'classes/Form.php';

$form = new Form();
?>

<html>
    <head>
        <title>Form</title>
        <link rel="stylesheet" href="form.css">

    </head>
    <body>
    <!-- <p style="font-size:20px; padding: 25px 10%;text-align:center">Will Generate a nicely formated markdown ReadMe file, which you can also edit if needed or leave as-is and use in your project. Saves a ton of time because you don't have to manually format a MD file. Just fill in the fields you want to add and let the generator do the the rest.</p> -->

<div class="form-wrapper">
    <form action="" method="POST">      

<?php
$tree ='
# EXAMPLE OF TREE
|-- assets
|   |-- fonts
|   |   |-- Poppins-Bold.woff2
|   |   |-- Poppins-ExtraBold.woff2
|   |   |-- Poppins-Regular.woff2
|   |   `-- fonts.css
|   |-- imgs
|   |   |-- logo-sq.png
|   |   `-- logo.png
|-- favicon.ico
|-- index.html
`-- style.css
';    

echo 
$form->inputTxt('Github id', 'Add your GitHub id.','ex. nweathers') .
$form->inputTxt('Github repo', 'Add the name of your repository.', 'ex. ReadMeMarkdownGen') .
$form->inputTxt('Project Name', 'Create a unique name for project, ', 'ex. ReadMe Markdown Gen"') .
$form->inputTxt('Subtitle', 'Use 1 short sentence to describe what this is or what it does.' , 'ex. Time Saving Readme File Generator') .
$form->inputArea('Key Features', 'Type or paste in key features here. Suggestion: Make a bullet list. For a bullet list, you can use MD or HTML format.', '') .
$form->inputArea('About', 'Write in as many words as you want, all about your project _what it is, what it does, and why you created it.', '') .
$form->inputArea('File Tree', 'Use the Shell or BASH to generate a file tree and PASTE it here.', $tree,'15') .
$form->inputArea('How It Works', 'Talk about how it works here.', '') .
$form->inputArea('Support, Like, Share, Donate', 'This is where you paste in support links like Paetreon and like/share buttons and instructions.', '') .
$form->inputArea('Contributions', 'Write instructions for contributing or just use the default created by generator.', '') .
$form->inputArea('Credits', 'Here is where you give credit to any source that helped you in creating this project. For example, I gained a lot of inspiration for creating this by cherry-picking ideas from ReadMe files created by others. To those inspiring creators, I give them credit by referencing their file here.', '') .
$form->inputArea('Related Links', 'Share links that are relevant to the project.' ).
$form->inputArea('Contacts', 'Provide contact information here _like your email (if you want) or other ways/instructions to reach you.', '');
?> 
<p align="center"><button class="form-btn">Generate ReadMe Markdown</button></p>
</form>
    </div>
<?php  
echo 
'<script type="text/javascript">';        

$ids = [ "Github id", "Github repo", "Project Name", "Subtitle", "Key Features", "About", "File Tree", "How It Works", "Support, Like, Share, Donate", "Contributions", "Credits", "Related Links", "Contacts"];

foreach($ids as $id)
{
    $id = str_replace(' ', '_', $id );
    $id = str_replace(',', '', $id );
    $id = strtolower($id);

echo'
textarea = document.querySelector("#' . $id . '");
textarea.addEventListener(\'input\', autoResize, false)
';    
} //end foreach

echo'
function autoResize() {
this.style.height = \'auto\';
this.style.height = this.scrollHeight + \'px\';
}    
</script>
 ';
?>






    </body>
</html>