<?php include_once 'ReadMe.php'; 

$readme = new ReadMe();

// EVERY SECTION IS GENERATED FROM ReadMe() OBJECT & STORED IN VARIABLE
$top = $readme->top();
$toc = $readme->toc();
$keyfeat = $readme->keyfeat();
$imgs = $readme->imgs();
$about = $readme->about();
$demo = $readme->demo();
$dep = $readme->dependencies();
$install  = $readme->installation();
$dl  = $readme->download();
$struct  = $readme->output_struct();
$how  = $readme->how_it_works();
$lic  = $readme->license();
$supp  = $readme->support();
$contr  = $readme->contribute();
$cred  = $readme->credits();
$lnks = $readme->links();
$contact  = $readme->contacts();
$bottom  = $readme->bottom();

// CONCATENATE ALL SECTIONS INTO ONE VARIABLE
$all = $top . $toc . $keyfeat . $imgs .$about . $demo . $dep . $install . $dl . $struct . $how . $lic . $supp . $contr . $cred . $lnks . $contact . $bottom;
?>
<html>
<body>

<pre><code>    
<?php echo htmlentities($all); ?>      
</code></pre>

</body>
</html>