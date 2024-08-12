<?php
class ReadMe

{
    public $githubID;
    public $githubClone;
    public $project;
    public $repoUrl;
    public $projectDesc;
    public $keyFeatures;
    public $screenshots;
    public $aboutProj;
    public $demoUrl;
    public $dependencies;
    public $installation;
    public $fileTree;
    public $howItWorks;
    public $support;
    public $contribute;
    public $credits;
    public $links;
    public $contacts;

    public $backTotop =
'

[( ↑ Back to top ↑ )](#readme-top)

---        
        ';

    public function __construct(
// LONG LIST OF ARGUMENTS WITH VALUES ASSIGNED (FOR DEMONSTRATION)        
// WARNING: IF YOU WANT TO KEEP THE DEMO CONTENT, IT IT ADVISBLE TO NOT FORMAT THIS FILE (TO MAINTAIN MD STRUCTURE)
$git_id='nicoleweathers', 
$git_repo='ReadMeMarkdownGen', 
$proj_name='ReadMe Markdown Gen', 
$project_desc='Time Saving  &#x1f550; ReadMe Markdown File Generator', 
$keyfeat=
'
* Preformatted Markdown - Just change the text
  - Designed to look good and save time.
* Demo Content Auto-Generated
  - Every field in form is pre-filled with demo data
* Unlimited Usage
  - Quickly and easily generate a new README.md file for every repository       
',
$images = 
'
<details open>
<summary> &nbsp; &#9756; </summary> <br />

<p align="center">
    <img width="45%" src="imgs/img1.webp" />
&nbsp;
    <img width="45%" src="imgs/img2.webp" />
</p>

<p align="center">
    <img width="45%" src="imgs/img3.webp" />
&nbsp;
    <img width="45%" src="imgs/img4.webp" />
</p> 

</details>
',
$about_proj = 
'
This generates a nicely formatted markdown ReadMe file, which you can also edit if needed or leave as-is and use in your project. Saves a ton of time because you don\'t have to manually format a MD file. Just fill in the fields you want to add and let the generator do the the rest.
'
,
$demo_url = 'https://nweathers.neocities.org/readme-md-generator/',

$depend = 
'
This project has NO DEPENDENCIES, but if it did, it might look something like this...

This software uses the following open source packages:

- [Electron](http://electron.atom.io/)
- [Node.js](https://nodejs.org/)
',
$install = 
'
To clone and run this application, from your command line:

```bash
# Clone this repository
$ git clone https://github.com/nicoleweathers/ReadMeMarkdownGen

# Go into the repository
$ cd readme-gen

# Remove git
$ rm -rf .git
```
',

$file_tree = 
'
readme_generator/
├── classes
│   ├── Form.php
│   └── ReadMe.php
├── imgs
│   ├── img1.webp
│   ├── img2.webp
│   └── img3.webp
├── form.php
└── index.php
',

$how = 
'
1. Add to htdocs (Xampp) local server and open in browser.
2. Select what you want to include in markdown file.
3. Complete multi-step form with your information
4. Markdown file is generated. Rename it or it will get overwritten next time you run application.
5. If you need to make changes, go back to form. Session data is saved for 30 minutes or until you close browser.
',

$support = 
'
<a href="https://www.buymeacoffee.com/nweathers" target="_blank">
<img src="imgs/purple_img.webp" style="height: 41px !important;width: 174px;" ></a>
<a href="https://www.patreon.com/nikkiwebd">
<img src="imgs/become_a_patron.webp" style="height: 41px !important;width: 174px;"></a><br><br> Or 

**Share the project link**  with your network on social media >>>

<a href="https://www.reddit.com/submit?url=https%3A%2F%2Fgithub.com%2Fnweathers%2FReadMeMarkdownGen&title=Awesome%20Readme%20Markdown%20File%20Generator!" target="_blank">
<img src="imgs/reddit.svg" width="100px" alt="Share on Reddit"/>
</a> 
<a href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A//github.com/nicoleweathers/ReadMeMarkdownGen" target="_blank">
<img src="imgs/linkedin.svg" width="100px" alt="Share on LinkedIn"/></a> 
',

$contribute = 
'
Contributions are appreciated; here\'s how:

1. Fork the Project
2. Create your Feature Branch (`git checkout -b fork/YourContribution`)
3. Commit your Changes (`git commit -m \'Add some YourContribution\'`)
4. Push to the Branch (`git push origin fork/YourContribution`)
5. Open a Pull Request
',

$credits = 
'
Here are some credits to my inspiration: 

+ [aimeos-typo3](https://github.com/aimeos/aimeos-typo3#readme) : Nice layout, flow, visually attractive.
+ [electron-markdownify](https://github.com/amitmerchant1990/electron-markdownify#readme) : Great layout and nice design.
+ [werewolves-assistant-api-next](https://github.com/antoinezanardi/werewolves-assistant-api-next#readme) : But I love how complete it is.
',

$links =
'
- [markdown](https://github.com/gomarkdown/markdown) - Markdown parser and HTML render for GO
- [markdown-cheatsheet](https://github.com/tchapi/markdown-cheatsheet) - Markdown Cheatsheet for Github Readme.md
- [markdown-badges](https://github.com/lleriayo/markdown-badges) - Badges for your personal developer branding, profile, and projects
',

$contacts = 
'
- **Email**: Send us your inquiries or support requests at [youremail@email.com](mailto:youremail@email.com).
- **Website**: [Nicole Weathers](https://nweathers.neocities.org)

> GitHub [@nicoleweathers](https://github.com/nicoleweathers) &nbsp;&middot;&nbsp;
> YouTube [@webdgem](https://youtube.com/@webdgem) &nbsp;&middot;&nbsp;
> LinkedIn [@ms-nicole-weathers](https://linkedin.com/in/ms-nicole-weathers) &nbsp;&middot;&nbsp;
'    
)


/** THIS IS THE END OF ARGUMENTS WITH ASSIGNED VALUES */

// public function __construct BEGINS
{ 
// The Class properties get values from arguments    
        $this->githubID = $git_id;
        $this->githubClone = $git_repo;
        $this->projectDesc = $project_desc;
        $this->project = $proj_name;
        $this->keyFeatures = $keyfeat;
        $this->screenshots = $images;
        $this->aboutProj = $about_proj;
        $this->demoUrl = $demo_url;
        $this->dependencies = $depend;
        $this->installation = $install;
        $this->repoUrl  = "https://github.com/$git_id/$git_repo";
        $this->fileTree = $file_tree;
        $this->howItWorks = $how;
        $this->support = $support;
        $this->contribute = $contribute;
        $this->credits = $credits;
        $this->links = $links;  
        $this->contacts = $contacts;
    }


/************* BEGINNING OF ALL METHODS *************/    

// The formatting is intentional for generating correctly formatted MD file. DONOT auto-format with an IDE!

    public function css()
    {
        return 
'
<style>
.banner1{font-family:"Open Sans",sans-serif;letter-spacing:2px;background-image:linear-gradient(45deg,#415ed0 0%,#c850c0 46%,#ffcc70 100%);text-align:center;padding:7px 10px;font-size:3.5em;font-weight:700;color:#fff;margin-bottom:0}.banner1desc{font-size:.4em;font-weight:400;color:#fff;margin-top:0;display:block}div.banner2{text-align:center}p.banner2{background-image:linear-gradient(180deg,#4388ff 10%,#8400ad 50%,#c0004d 70%);background-clip:text;-webkit-background-clip:text;-webkit-text-fill-color:transparent;padding:7px 10px;font-size:3.5em;margin-bottom:0!important;font-weight:700}span.banner2desc{color:#000;font-weight:700;font-size:1.5em;padding-top:0!important;margin-top:0!important}div.banner3{background:#0e0e0e;padding-bottom:10px;margin-bottom:25px!important}p.banner3{background-image:linear-gradient(to right,#462523 0,#cb9b51 22%,#f6e27a 45%,#f6f2c0 50%,#f6e27a 55%,#cb9b51 78%,#462523 100%);background-clip:text;-webkit-background-clip:text;-webkit-text-fill-color:transparent;padding:7px 10px;font-size:3em;font-weight:400;letter-spacing:3px;text-align:center}.banner3desc{font-weight:700;font-size:1.5em;background-image:linear-gradient(to right,#462523 0,#cb9b51 22%,#f6e27a 45%,#f6f2c0 50%,#f6e27a 55%,#cb9b51 78%,#462523 100%);background-clip:text;-webkit-background-clip:text;-webkit-text-fill-color:transparent;margin-top:0;text-align:center}p.key_feat{padding-bottom:20px;text-align:center}p.key_feat a::after{content:" \2022"}.end_cta{text-align:center;font-size:1.5em;padding-bottom:20px}.end_cta p{font-size:2em;font-weight:600}
</style>

';
    } // end of css()

    public function banner1()
    {
        $subtitle = $this->projectDesc;
        $subtitle = str_replace( '.','', $subtitle );

        return 
'
<p align="center"><img src="imgs/logo.webp" alt="ReadMe" width="160"></p>

<p style="font-family:\'Open Sans\',sans-serif;letter-spacing:2px;background-image:linear-gradient(45deg,#415ed0 0%,#c850c0 46%,#ffcc70 100%);text-align:center;padding:7px 10px;font-size:3.5em;font-weight:700;color:#fff;margin-bottom:0"> ' . $this->project . ' <span style="font-size:.4em;font-weight:400;color:#fff;margin-top:0;display:block"> ' . $subtitle . ' </span></p>

';
    } // end of banner1()
    
    public function banner2()
    {
        $subtitle = $this->projectDesc;
        $subtitle = str_replace( '.','', $subtitle );
        return 
'

<p align="center"><img src="imgs/logo2.webp" alt="ReadMe" width="160"></p>

<div style="text-align:center">
<p style="background-image:linear-gradient(180deg,#4388ff 10%,#8400ad 50%,#c0004d 70%);background-clip:text;-webkit-background-clip:text;-webkit-text-fill-color:transparent;padding:7px 10px;font-size:3.5em;margin-bottom:0!important;font-weight:700"> ' . $this->project . ' </p><span style="color:#000;font-weight:700;font-size:1.5em;padding-top:0!important;margin-top:0!important"> ' . $subtitle . ' </span>
</div>

---

';
    } // end of banner2()

    public function banner3()
    {
        $subtitle = $this->projectDesc;
        $subtitle = str_replace( '.','', $subtitle );
        return 
'
<div style="background:#0e0e0e;padding-bottom:10px;margin-bottom:25px!important;text-align:center;"><br>
<img src="imgs/logo-gold-blk.webp" alt="ReadMe" width="160">
<p style="background-image:linear-gradient(to right,#462523 0,#cb9b51 22%,#f6e27a 45%,#f6f2c0 50%,#f6e27a 55%,#cb9b51 78%,#462523 100%);background-clip:text;-webkit-background-clip:text;-webkit-text-fill-color:transparent;padding:7px 10px;font-size:3em;font-weight:400;letter-spacing:3px;text-align:center"> ' . $this->project . ' </p>
<p style="font-weight:700;font-size:1.5em;background-image:linear-gradient(to right,#462523 0,#cb9b51 22%,#f6e27a 45%,#f6f2c0 50%,#f6e27a 55%,#cb9b51 78%,#462523 100%);background-clip:text;-webkit-background-clip:text;-webkit-text-fill-color:transparent;margin-top:0;text-align:center"> ' . $this->$subtitle . ' </p>
</div>
';
    } // end of banner3()

    public function mini_nav()
    {
        return 
'
<p align="center"><strong>⭐ Star us on GitHub — it\'s easy & it fuels us!</strong></p>

<p style="padding-bottom:20px;text-align:center"> 
    <a href="#-key-features">&bull; Key Features</a> &bull;
    <a href="#-about">About</a> &bull;
    <a href="#-installation">Installation</a> &bull;
    <a href="#-license">License</a> &bull;
    <a href="#-how-it-works">How It Works</a> &bull;
    <a href="#-download">Download</a> &bull;
</p>

';
    } // end of mini_nav()
public function headtop()
{
return'<!-----------------------------------------------------------------------------------------------------
This README.md file was generated using web app repository available at github.com/nicoleweathers/ReadMeGen
------------------------------------------------------------------------------------------------------->
';

 
}
// endof headtop()
/*********************************/

public function banner($b = 'one')
{
    $banner = $b;

    switch($banner)
    {
        case 'three':
            $ban = $this->banner3();
            break;
        case 'two':
            $ban = $this->banner2();
            break;     
        default:
            $ban = $this->banner1();
            break;                        
    }

    return $ban;
}
// end of banner()

/****************************************/
public function top()
{
$nav = $this->mini_nav();

$end_top = 
'
<p align="center">
  <img src="imgs/readmemdgen.gif" alt="ReadMe">
</p>

---
<a id="readme-top"></a>
';

return $nav . $end_top;

    } 
// end of top()

/*******************************************/
    public function toc()
    {
    isset($_SESSION['key_features']) ? $keyfeatures = "- [Key Features](#-key-features)" : '';
    $about = "- [About](#-about)";
    isset($_SESSION['demo']) ? $demo = "- [Demo](#-demo)" : '';
    isset($_SESSION['dependencies']) ? $dependencies = "- [Dependencies](#-dependencies)" : '';
    isset($_SESSION['installation']) ? $installation = "- [Installation](#-installation)" : '';
    isset($_SESSION['adddownload']) ? $download  = "- [Download](#download)" : '';
    isset($_SESSION['file_tree']) ? $file_tree = "- [Output Structure](#output-structure)" : '';
    isset($_SESSION['how_it_works']) ? $how_it_works = "- [How It Works](#-how-it-works)" : '';
    isset($_SESSION['addlicense']) ? $license  = "- [License](#-license)" : '';
    isset($_SESSION['support_like_share_donate']) ? $support = "- [Support](#-support)" : '';
    isset($_SESSION['contributions']) ? $contributions = "- [Contribute](#-contribute)" : '';
    isset($_SESSION['connections']) ? $contacts  = "- [Contacts](#-contacts)" : '';

    return
"
# Table of Contents

<details open>
<summary> &nbsp; &#9756; </summary> <br />

$keyfeatures
$about
$demo
$dependencies
$installation
$download
$file_tree
$how_it_works
$license
$support
$contributions
$contacts
  
</details>

<br>
"
. $this->backTotop
;
    } // end of toc()
    public function keyfeat(){ 
        $head =
'

## &#9733; Key Features

';
        return $head . $this->keyFeatures . $this->backTotop; }

/*****************************************************/

    
    public function imgs()
    {
        $head = 
'

## &#9733; Screenshots

';        
        return $head . $this->screenshots . $this->backTotop;} 


/*****************************************************/

    
    public function about(){ 
        $head = 
'

## &#9733; About

';
        return $head . $this->aboutProj . $this->backTotop; } 

/*****************************************************/

  
    public function demo()
    {
        $head = 
'

## &#9733; Demo

';        
        return 
$head . 
'
[-> See a demo here <-](' . $this->demoUrl  . ')

<img src="imgs/readmemdgen.gif" alt="ReadMe" style="width:300px">
'
. $this->backTotop;
    } 

/*****************************************************/

    public function dependencies(){ 
        $head = 
'

## &#9733; Dependencies

';        
        return $head . $this->dependencies . $this->backTotop; } 

/*****************************************************/
  
    public function installation(){ 
        $head = 
'

## &#9733; Installation

';        
        return $head . $this->installation . $this->backTotop; }

/*****************************************************/
    
    public function download()
    { 
        $head = 
'

## Download

';        
        return 
$head .         
'

You can [download](' . $this->repoUrl  . '/archive/refs/heads/main.zip) the file instead of cloning.
'
. $this->backTotop
;
    } // end of download()

/*****************************************************/  
    
    public function output_struct()
    {
        $head = 
'

## Output Structure


```shell

';          
        return $head . $this->fileTree .

'
```
'
. $this->backTotop
;
    } 

/*****************************************************/

    public function how_it_works()
    {
$head =
'

## &#9733; How It Works

';
        return $head . $this->howItWorks .  $this->backTotop;
    } 

/*****************************************************/
    
    public function license()
    {
$head =       
'

## 📃 License

';
        return 

$head.
'

[`ReadMe Markdown Gen`](' . $this->repoUrl  . ') is free and open-source software licensed under 
the Apache 2.0 `License`. Official project was 
created by [Nicole Weathers](https://github.com/' . $this->githubID  . ') and distributed under 
`Creative Commons`.

'
. $this->backTotop
;
    } // end of license()

/*****************************************************/
  
    public function support()
    {
$head =
'

## &#10084; Support

';
        return $head . $this->support . $this->backTotop;
    }
/*****************************************************/
     
    public function contribute()
    {
$head = 
'
## 🐙 Contribute

';     
        return $head . $this->contribute . $this->backTotop;
    } 

/*****************************************************/

    public function credits()    
    {
$head =
'
## 🤝 Credits and Acknowledgements

' ;       
        return $head . $this->credits . $this->backTotop;
    } 

/*****************************************************/
      
    public function links()
    {
$head =
'

## &#x1F517; You may also like...

';     
        return $head . $this->links . $this->backTotop;
    } 

/*****************************************************/

    public function contacts()
    {
$head =
'

## &#x1F4AC; Contacts

';   
        return $head . $this->contacts . $this->backTotop;
    } 

/*****************************************************/

    public function bottom()
    {
return 
'
<div style="text-align:center;font-size:1.5em;padding-bottom:20px">
<p style="font-size:2em;font-weight:600">Liked the work?</p>

### ⭐ Star us on GitHub — it\'s easy & it fuels us!

</div> 
';

    } 
// end of bottom()

/*****************************************************/
    
 
} // End of class ReadMe