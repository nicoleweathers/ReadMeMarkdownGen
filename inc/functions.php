<?php

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
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <div id="top">
      ReadMe MarkDown Gen
    </div>
    <div class="top">
      '.PROJDESC.'
    </div>

    ';
}

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
projd('Nikki (Nicole) Weathers','nicoleweathers','https://nweathers.neocities.org','ReadMeMarkdownGen','ReadMe Markdown Gen','Time Saving ReadMe Markdow File Generator');
function wsfooter()
{
    return '
    <footer>
    <a href="." class="home">&#8962;</a>
'.footercopy().'
    </footer>
<script>
const growers = document.querySelectorAll(".grow-wrap");

growers.forEach((grower) => {
    const textarea = grower.querySelector("textarea");
    textarea.addEventListener("input", () => {
        grower.dataset.replicatedValue = textarea.value;
    });
});
</script>
</body>
</html>';
}
function projd($a,$b,$c,$d,$e,$f)
{
  DEFINE('AUTHOR', $a);
  DEFINE('GITHUBID', $b);
  DEFINE('WSURL', $c);
  DEFINE('GITREPO', $d);
  DEFINE('PROJNAME', $e);
  DEFINE('PROJDESC', $f);

}
function pagelinks()
{
  $pages = [
    'About' => '?input=7',
    'Contacts' => '?input=14',
    'Contribute' => '?input=11',
    'Credits' => '?input=12',
    "Demo" => "?input=6",
    "Dependencies" => "?input=5",
    "File Tree" => "?input=8",
    "GitHub id & Repo id" => "./form",
    "How it Works" => "?input=9",
    "Installation" => "?input=4",
    "Key Features" => "?input=3",
    "Links" => "?input=13",
    "Project Name & Subtitle" => "?input=2",
    "Support" => "?input=10"
  ];
 
  echo '<p align="center">';
  
  foreach($pages as $pg => $value) 
     echo "&nbsp;<a href=\"$value\">$pg</a>&nbsp;&bull;";
  
  echo '</p>';
}
