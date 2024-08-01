<?php
class ReadMe

{
    public $githubID;
    public $githubClone;
    public $project;
    public $repoUrl;
    public $projectDesc;
    public $keyFeatures;
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
        $keyfeat='
* LivePreview - Make changes, See changes
  - Instantly see what your Markdown documents look like in HTML as you create them.
* Full screen mode
  - Write distraction free.
* Cross platform
  - Windows, macOS and Linux ready.
',
        $about_proj = '
**Bold Text** is a .NET library designed to provide comprehensive support for OAuth2 and OpenID Connect on the server side. These patterns ensure the following benefits:

- **Bold bullet li**: Different parts of the library can function independently.
- **Bold bullet li**: Improved separation of concerns makes the code more testable.
- **Bold bullet li**: Clear structure and separation facilitate better management of the codebase.

The library also supports Dependency Injection through the standard.
',
        $demo_url = 'https://nweathers.neocities/readme-md-generator',
        $depend = '
This project has no dependencies. It does however use Fontawesome and Google fonts (for the Ui) with links to both in the code, therefeor there is no need to download any additional files other than what is included in this repository.

---        
        ',
        $install = '
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
'shallow_backup/
├── configs
│   ├── plist
│   │   └── com.apple.Terminal.plist
│   ├── sublime_2
│   │   └── ...
│   └── sublime_3
│       └── ...
├── dotfiles
│   ├── .bash_profile
│   ├── .ssh/
│   │   └── known_hosts
│   ├── .vim/
│   └── .zshrc
├── fonts
│   ├── AllerDisplay.ttf
│   └── Ubuntu Mono derivative Powerline.ttf
└── packages
    ├── brew-cask_list.txt
    ├── brew_list.txt
    └── sublime3_list.txt
',
$how = 
'1. Install on local server.
2. Run App.
3. The `webpack` plugin creates an empty webpack project, adds your library
   and looks for the bundle size difference.
4. The `time` plugin compares the current machine performance with that of
   a low-priced Android devices to calculate the CPU throttling rate.
5. Then the `time` plugin runs headless Chrome (or desktop Chrome if it’s
   available) to track the time a browser takes to compile and execute your JS.
   Note that these measurements depend on available resources and might
   be unstable.',
   $support = 
'<a href="https://www.buymeacoffee.com/5Zn8Xh3l9" target="_blank"><img src="md-imgs/purple_img.webp" alt="Buy Me A Coffee" style="height: 41px !important;width: 174px !important;box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;-webkit-box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;" ></a>

<p>Or</p> 

<a href="https://www.patreon.com/amitmerchant">
	<img src="md-imgs/become_a_patron_button@2x.png" width="160">
</a><br><br>


**Share the project link**  with your network on social media >>>

<a href="https://www.reddit.com/submit?url=https%3A%2F%2Fgithub.com%2Fnweathers%2FReadMeMarkdownGen&title=Awesome%20communcation%20engine!" target="_blank"><img src="https://img.shields.io/twitter/url?label=Reddit&logo=Reddit&style=social&url=https%3A%2F%2Fgithub.com%2Fnweathers%2FReadMeMarkdownGen" alt="Share on Reddit"/></a>&nbsp;
<a href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A//github.com/nicoleweathers/ReadMeMarkdownGen" target="_blank"><img src="https://img.shields.io/twitter/url?label=LinkedIn&logo=LinkedIn&style=social&url=https%3A%2F%2Fgithub.com%2Fnweathers%2FReadMeMarkdownGen" alt="Share on LinkedIn"/></a>&nbsp;
<a href="mailto:?subject=Awesome%20communication%20engine&body=Checkout%20this%20awesome%20communication%20engine%3A%0Ahttps%3A//github.com/nicoleweathers/ReadMeMarkdownGen%0A" target="_blank"><img src="https://img.shields.io/twitter/url?label=GMail&logo=GMail&style=social&url=https%3A%2F%2Fgithub.com%2Fnweathers%2FReadMeMarkdownGen"/></a>',

$contribute = 
'1. Fork the Project
2. Create your Feature Branch (`git checkout -b fork/YourContribution`)
3. Commit your Changes (`git commit -m \'Add some YourContribution\'`)
4. Push to the Branch (`git push origin fork/YourContribution`)
5. Open a Pull Request
   
You can also simply open an issue with the tag "suggestion".
Don\'t forget to give the project a star! Thanks again!',

$credits = 
'This project started in 2020 and an early and incomplete version of it was presented as my final work for the graduation at the [Cybersecurity HackAdemy](https://www.cyberhackademy.unina.it/en/home-page/) organized by the University of Naples Federico II. For that, I would like to thank Roberto Celletti for the initial idea and my team which was composed by [gianpor](https://github.com/gianpor), [MrFelpon](https://github.com/MrFelpon) and [xdinax](https://github.com/xdinax), who helped me in the early stages of the development of the application with the initial deployment and the first tests. 

+ [@shobrook](https://www.github.com/shobrook) for logo and UI design assistance.
+ Base logo vector made by [Freepik](https://www.freepik.com/) from [Flaticon](www.flaticon.com).
+ [drduh\'s macOS-Security-and-Privacy-Guide](https://github.com/drduh/macOS-Security-and-Privacy-Guide) and [Jonathan Levin\'s MacOS Security Guide](http://newosxbook.com/files/moxii3/AppendixA.pdf) were incredibly helpful while I was building `stronghold`.

This software uses the following open source packages:

- [Electron](http://electron.atom.io/)
- [Node.js](https://nodejs.org/)
- [Marked - a markdown parser](https://github.com/chjj/marked)
- [showdown](http://showdownjs.github.io/showdown/)
- [CodeMirror](http://codemirror.net/)
- Emojis are taken from [here](https://github.com/arvida/emoji-cheat-sheet.com)',

$links =
'- [Pomolectron](https://github.com/amitmerchant1990/pomolectron) - A pomodoro app
- [Correo](https://github.com/amitmerchant1990/correo) - A menubar/taskbar Gmail App for Windows and macOS
- [markdownify-web](https://github.com/amitmerchant1990/markdownify-web) - Web version of Markdownify',

$contacts = 
'- **Email**: Send us your inquiries or support requests at [support@abblix.com](mailto:support@abblix.com).
- **Website**: [Nicole Weathers](https://nweathers.neocities.com)

> GitHub [@nicoleweathers](https://github.com/nicoleweathers) &nbsp;&middot;&nbsp;
> YouTube [@webdgem](https://youtube.com/@webdgem) &nbsp;&middot;&nbsp;
> LinkedIn [@ms-nicole-weathers](https://linkedin.com/in/ms-nicole-weathers) &nbsp;&middot;&nbsp;'    
)
{ // public function __construct...
        $this->githubID = $git_id;
        $this->githubClone = $git_repo;
        $this->projectDesc = $project_desc;
        $this->project = $proj_name;
        $this->keyFeatures = $keyfeat;
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

    public function css()
    {
        return "<style>
.banner1{font-family:'Open Sans',sans-serif;letter-spacing:2px;background-image:linear-gradient(45deg,#415ed0 0%,#c850c0 46%,#ffcc70 100%);text-align:center;padding:7px 10px;font-size:3.5em;font-weight:700;color:#fff;margin-bottom:0}.banner1desc{font-size:.4em;font-weight:400;color:#fff;margin-top:0;display:block}div.banner2{text-align:center}p.banner2{background-image:linear-gradient(180deg,#4388ff 10%,#8400ad 50%,#c0004d 70%);background-clip:text;-webkit-background-clip:text;-webkit-text-fill-color:transparent;padding:7px 10px;font-size:3.5em;margin-bottom:0!important;font-weight:700}span.banner2desc{color:#000;font-weight:700;font-size:1.5em;padding-top:0!important;margin-top:0!important}div.banner3{background:#0e0e0e;padding-bottom:10px;margin-bottom:25px!important}p.banner3{background-image:linear-gradient(to right,#462523 0,#cb9b51 22%,#f6e27a 45%,#f6f2c0 50%,#f6e27a 55%,#cb9b51 78%,#462523 100%);background-clip:text;-webkit-background-clip:text;-webkit-text-fill-color:transparent;padding:7px 10px;font-size:3em;font-weight:400;letter-spacing:3px;text-align:center}.banner3desc{font-weight:700;font-size:1.5em;background-image:linear-gradient(to right,#462523 0,#cb9b51 22%,#f6e27a 45%,#f6f2c0 50%,#f6e27a 55%,#cb9b51 78%,#462523 100%);background-clip:text;-webkit-background-clip:text;-webkit-text-fill-color:transparent;margin-top:0;text-align:center}p.key_feat{padding-bottom:20px;text-align:center}p.key_feat a::after{content:' \2022'}.end_cta{text-align:center;font-size:1.5em;padding-bottom:20px}.end_cta p{font-size:2em;font-weight:600}
</style>";
    } // end of css()

    public function banner1()
    {
        return '
<p class="banner1">' . $this->project . '<span class="banner1desc">' . $this->projectDesc . '</span></p>
        ';
    } // end of banner1()
    
    public function banner2()
    {
        return '
<div class="banner2">
<p class="banner2">' . $this->project . ' </p><span class="banner2desc">' . $this->projectDesc . '</span>
</div>

---
        ';
    } // end of banner2()

    public function banner3()
    {
        return '
<div class="banner3">
  <p class="banner3">' . $this->project . '</p>
  <p class="banner3desc">' . $this->projectDesc . '</p>
</div>
        ';
    } // end of banner3()

    public function mini_nav()
    {
        return '

<p align="center">⭐ Star us on GitHub — it motivates us a lot!</p>

<p class="key_feat"> 
    <a href="#-key-features">&bull; Key Features</a>
    <a href="#-about">About</a>
    <a href="#-installation">Installation</a>
    <a href="#-license">License</a>
    <a href="#-support">Support</a>
    <a href="#-contribute">Contribute</a>
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
       $txt = "<!--------------------------------------------------------------------------------------------------------
This README.md file was generated using web app repository available at github.com/nicoleweathers/ReadMeGen
---------------------------------------------------------------------------------------------------------->
";
$css = $this->css();
$logo = '
<p align="center">
  <img src="imgs/logo.webp" alt="ReadMe" width="200">
</p>';

$nav = $this->mini_nav();

$end_top = '
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
        return '
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
- [How It Works](#-how-it-works)
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
    
    public function imgs()
    {
        return '
## &#9733; Screenshots

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
'
. $this->backTotop
;
    } // end of imgs()
    
    public function about(){ 
        $head = 
'
## &#9733; About

';
        return $head . $this->aboutProj . $this->backTotop; } 
  
    public function demo()
    {
        return '
## &#9733; Demo
[-> See a demo here <-](' . $this->demoUrl  . ')

---        
        ';
    } // end of demo()

    public function dependencies(){ 
        $head = 
'
## &#9733; Dependencies
';        
        return $head . $this->dependencies ; } 
    
    public function installation(){ 
        $head = 
'## &#9733; Installation
';        
        return $this->installation . $this->backTotop; }
    
    public function download()
    {
        return '
## Download

You can [download](' . $this->repoUrl  . ') the file instead of cloning.
'
. $this->backTotop
;
    } // end of download()
    
    public function output_struct()
    {
        return '
### Output Structure
---
<br>

```shell'
. $this->fileTree .
'```
'
. $this->backTotop
;
    } // end of output_struct()
  
    public function how_it_works()
    {
        return '
## &#9733; How It Works' . 
$this->howItWorks . 
$this->backTotop
;
    } // end of how_it_works()
    
    public function license()
    {
        return '
## &#9733; License

Distributed under the MIT License. See `LICENSE.txt` for more information.
'
. $this->backTotop
;
    } // end of license()
    
    public function support()
    {
        return '
## &#9733; Support

'
. $this->support 
. $this->backTotop
;
    } // end of support()
    
    public function contribute()
    {
        return '
## &#9733; Contribute

'
. $this->contribute 
. $this->backTotop
;
    } // end of contribute()

    public function credits()
    {
        return '
## &#9733; Credits and Acknowledgements

'
. $this->credits
. $this->backTotop
;
    } // end of credits()
    
    public function links()
    {
        return '
## &#9733; You may also like...

'. $this->links .'

---        
        ';
    } // end of links();

    public function contacts()
    {
        return '
## &#9733; Contacts

'. $this->contacts . 
'
---        
        ';
    } // end of contacts()

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

    return '
<div class="end_cta">
<p>Liked the work?</p>

### ⭐ Star us on GitHub — it motivates us a lot!

</div> 
' . $ban . '
[( ↑ Back to top ↑ )](#readme-top)
';

    } // end of bottom()
 
} // End of class ReadMe