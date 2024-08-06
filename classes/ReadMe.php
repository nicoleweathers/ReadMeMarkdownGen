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
$project_desc='Time Saving  &#x1f550; ReadMe Markdow File Generator', 
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
    <img width="49%" src="imgs/img1.png" />
&nbsp;
    <img width="49%" src="imgs/img2.png" />
</p>

<p align="center">
    <img width="49%" src="imgs/img3.png" />
&nbsp;
    <img width="49%" src="imgs/img4.png" />
</p> 

</details>
',
$about_proj = 
'
**DRY Obsession** ☜This is my motivation for writing most of the code that I write. 

Will Generate a nicely formatted markdown ReadMe file, which you can also edit if needed or leave as-is and use in your project. Saves a ton of time because you don\'t have to manually format a MD file. Just fill in the fields you want to add and let the generator do the the rest.

As you can see, it is one of my first repositories (on here), so I created it while brainstorming ideas for how to get in the practice of using GitHub (and GIT). I didn\'t want to have to spend hours just to write an attractive README file for every project; and that is why this was created. 

I literally spent hours looking at other README files on GitHub to get ideas while determining the essentials and borrowing bits and pieces from several sources to come up with a final master piece. Here, you will find le crème de la crème.
'
,
$demo_url = 'https://nweathers.neocities/readme-md-generator',

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

# Initialize git on your machine (optional)
$ git init
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
│   ├── img3.webp
│   ├── img4.webp
│   ├── logo.webp
│   └── screenshot.gif
├── end_session.php
├── form.php
├── generate.php
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
<a href="https://www.buymeacoffee.com/nweathers" target="_blank"><img src="imgs/purple_img.webp" alt="Buy Me A Coffee" style="height: 41px !important;width: 174px !important;box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;-webkit-box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;" ></a>

<p>Or</p> 

<a href="https://www.patreon.com/nikkiwebd">
	<img src="imgs/become_a_patron.png" width="160">
</a><br><br>


**Share the project link**  with your network on social media >>>

<a href="https://www.reddit.com/submit?url=https%3A%2F%2Fgithub.com%2Fnweathers%2FReadMeMarkdownGen&title=Awesome%20Readme%20Markdown%20File%20Generator!" target="_blank"><img src="https://img.shields.io/twitter/url?label=Reddit&logo=Reddit&style=social&url=https%3A%2F%2Fgithub.com%2Fnweathers%2FReadMeMarkdownGen" alt="Share on Reddit"/></a> 
<a href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A//github.com/nicoleweathers/ReadMeMarkdownGen" target="_blank"><img src="https://img.shields.io/twitter/url?label=LinkedIn&logo=LinkedIn&style=social&url=https%3A%2F%2Fgithub.com%2Fnweathers%2FReadMeMarkdownGen" alt="Share on LinkedIn"/></a> 
',

$contribute = 
'
I would love to see more banner options. These are pure CSS generated banner styles. If you have any other suggestions, you are more than welcome to give feedback. 

1. Fork the Project
2. Create your Feature Branch (`git checkout -b fork/YourContribution`)
3. Commit your Changes (`git commit -m \'Add some YourContribution\'`)
4. Push to the Branch (`git push origin fork/YourContribution`)
5. Open a Pull Request
   
You can also simply open an issue with the tag "suggestion".
Don\'t forget to give the project a star! Thanks again!
',

$credits = 
'
To create this web app, I needed some inspiration, so I searched for good README file recommendations. Ultimately, here are the resources that helped get some good ideas for how to create the ultimate readme.md file:

+ [@matiassingers](https://github.com/matiassingers/awesome-readme) : Saved me time so I didn\'t have to use a search engine for my research.
+ [amplication](https://github.com/amplication/amplication#readme) : Multiple image screenshots in collapsible section.
+ [ajeetdsouza](https://github.com/ajeetdsouza/zoxide#readme) : Nice file tree.
+ [aimeos-typo3](https://github.com/aimeos/aimeos-typo3#readme) : Nice layout, flow, visually attractive.
+ [EventualShop](https://github.com/AntonioFalcaoJr/EventualShop#readme) : Attractive banner and attractive like [electron-markdownify](https://github.com/amitmerchant1990/electron-markdownify#readme) & [aimeos-typo3](https://github.com/aimeos/aimeos-typo3#readme).
+ [electron-markdownify](https://github.com/amitmerchant1990/electron-markdownify#readme) : 
**BEST BY FAR** - This one was like the starting point for my design because it is attractive yet simple _which is perfect for me. As cool as all those emojis/icons are, it\'s too overwhelming for me as an autistic person. I like clean yet attractive styles; and this one did it.
+ [werewolves-assistant-api-next](https://github.com/antoinezanardi/werewolves-assistant-api-next#readme) : 
 **Worth mentioning**  I did not use any of their styling for this because it was a bit much for me (autistic). But I love how complete and it is I think it is really worth mentioning because if I had the time, I would enhance my template more by adding more icons like they have on their page
',

$links =
'
- [markdownify-web](https://github.com/amitmerchant1990/markdownify-web) - Web version of Markdownify
- [markdown](https://github.com/gomarkdown/markdown) - Markdown parser and HTML render for GO
- [markdown-cheatsheet](https://github.com/tchapi/markdown-cheatsheet) - Markdown Cheatsheet for Github Readme.md
- [markdown-badges](https://github.com/lleriayo/markdown-badges) - Badges for your personal developer branding, profile, and projects
',

$contacts = 
'
- **Email**: Send us your inquiries or support requests at [youremail@email.com](mailto:youremail@email.com).
- **Website**: [Nicole Weathers](https://nweathers.neocities.com)

> GitHub [@nicoleweathers](https://github.com/nicoleweathers) &nbsp;&middot;&nbsp;
> YouTube [@webdgem](https://youtube.com/@webdgem) &nbsp;&middot;&nbsp;
> LinkedIn [@ms-nicole-weathers](https://linkedin.com/in/ms-nicole-weathers) &nbsp;&middot;&nbsp;
'    
)


/** THIS IS THE END OF ARGUMENTS WITH ASSIGNED VALUES */


{ // public function __construct BEGINS
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
        $subtitle = str_replace('.','', $subtitle);

        return 
'
<p class="banner1">' . $this->project . '<span class="banner1desc">' . $subtitle . '</span></p>
        ';
    } // end of banner1()
    
    public function banner2()
    {
        return 
'
<div class="banner2">
<p class="banner2">' . $this->project . ' </p><span class="banner2desc">' . $this->projectDesc . '</span>
</div>

---
';
    } // end of banner2()

    public function banner3()
    {
        return 
'
<div class="banner3">
  <p class="banner3">' . $this->project . '</p>
  <p class="banner3desc">' . $this->projectDesc . '</p>
</div>
';
    } // end of banner3()

    public function mini_nav()
    {
        return 
'

<p align="center">⭐ Star us on GitHub — it motivates us a lot!</p>

<p class="key_feat"> 
    <a href="#-key-features">&bull; Key Features</a>
    <a href="#-about">About</a>
    <a href="#-installation">Installation</a>
    <a href="#-license">License</a>
    <a href="#-usage">Usage</a>
    <a href="#-download">Download</a>
</p>

';
    } // end of mini_nav()

    public function top($b = 'one')
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
       $txt = "
<!--------------------------------------------------------------------------------------------------------
This README.md file was generated using web app repository available at github.com/nicoleweathers/ReadMeGen
---------------------------------------------------------------------------------------------------------->
";
$css = $this->css();
$logo = 
'
<p align="center">
  <img src="imgs/logo.webp" alt="ReadMe" width="200">
</p>
';

$nav = $this->mini_nav();

$end_top = 
'
<p align="center">
  <img src="imgs/screenshot.gif" alt="ReadMe" style="width:75%">
</p>

---
<a id="readme-top"></a>
';

return $txt . $css . $logo . $ban . $nav . $end_top;

    } // end of top()

    public function toc()
    {
        return 
'
# Table of Contents

<details open>
<summary> &nbsp; &#9756; </summary> <br />

- [Key Features](#-key-features)
- [Screenshots](#-screenshots)
- [About](#-about)
- [Demo](#-demo)
- [Dependencies](#-dependencies)
- [Installation](#-installation)
- [Download](#download)
- [Output Structure](#output-structure)
- [Usage](#-usage)
- [License](#-license)
- [Support](#-support)
- [Contribute](#-contribute)
- [Credits and Acknowledgements](#-credits-and-acknowledgements)
- [Contacts](#-contacts)
  
</details>

<br>
'
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

<img src="imgs/screenshot.gif" alt="ReadMe" style="width:300px">
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

## &#9733; Usage

';
        return $head . $this->howItWorks .  $this->backTotop;
    } 

/*****************************************************/
    
    public function license()
    {
$head =       
'

## &#9733; License 

';
        return 

$head.
'Distributed under the MIT License. See `LICENSE.txt` for more information.
'
. $this->backTotop
;
    } // end of license()

/*****************************************************/
  
    public function support()
    {
$head =
'

## &#9733; Support

';
        return $head . $this->support . $this->backTotop;
    }
/*****************************************************/
     
    public function contribute()
    {
$head = 
'
## &#9733; Contribute

';     
        return $head . $this->contribute . $this->backTotop;
    } 

/*****************************************************/

    public function credits()    
    {
$head =
'
## &#9733; Credits and Acknowledgements

' ;       
        return $head . $this->credits . $this->backTotop;
    } 

/*****************************************************/
      
    public function links()
    {
$head =
'

## &#9733; You may also like...

';     
        return $head . $this->links . $this->backTotop;
    } 

/*****************************************************/

    public function contacts()
    {
$head =
'
## &#9733; Contacts

';   
        return $head . $this->contacts . $this->backTotop;
    } 

/*****************************************************/

    public function bottom($b = 'one')
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

    return 
'
<div class="end_cta">
<p>Liked the work?</p>

### ⭐ Star us on GitHub — it motivates us a lot!

</div> 
' 
. $ban . $this->backTotop;

    } // end of bottom()

/*****************************************************/
    
 
} // End of class ReadMe