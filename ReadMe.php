<?php
class ReadMe
{
    public function css()
    {
        return "<style>
.banner1{font-family:'Open Sans',sans-serif;letter-spacing:2px;background-image:linear-gradient(45deg,#415ed0 0%,#c850c0 46%,#ffcc70 100%);text-align:center;padding:7px 10px;font-size:3.5em;font-weight:700;color:#fff;margin-bottom:0}.banner1desc{font-size:.4em;font-weight:400;color:#fff;margin-top:0;display:block}div.banner2{text-align:center}p.banner2{background-image:linear-gradient(180deg,#4388ff 10%,#8400ad 50%,#c0004d 70%);background-clip:text;-webkit-background-clip:text;-webkit-text-fill-color:transparent;padding:7px 10px;font-size:3.5em;margin-bottom:0!important;font-weight:700}span.banner2desc{color:#000;font-weight:700;font-size:1.5em;padding-top:0!important;margin-top:0!important}div.banner3{background:#0e0e0e;padding-bottom:10px;margin-bottom:25px!important}p.banner3{background-image:linear-gradient(to right,#462523 0,#cb9b51 22%,#f6e27a 45%,#f6f2c0 50%,#f6e27a 55%,#cb9b51 78%,#462523 100%);background-clip:text;-webkit-background-clip:text;-webkit-text-fill-color:transparent;padding:7px 10px;font-size:3em;font-weight:400;letter-spacing:3px;text-align:center}.banner3desc{font-weight:700;font-size:1.5em;background-image:linear-gradient(to right,#462523 0,#cb9b51 22%,#f6e27a 45%,#f6f2c0 50%,#f6e27a 55%,#cb9b51 78%,#462523 100%);background-clip:text;-webkit-background-clip:text;-webkit-text-fill-color:transparent;margin-top:0;text-align:center}p.key_feat{padding-bottom:20px;text-align:center}p.key_feat a::after{content:' \2022'}.end_cta{text-align:center;font-size:1.5em;padding-bottom:20px}.end_cta p{font-size:2em;font-weight:600}
</style>";
    } // end of css()

    public function banner1()
    {
        return '
<p class="banner1">ReadMe Markdown Gen<span class="banner1desc">Time Saving  &#x1f550; ReadMe Markdow File Generator</span></p>

        ';
    } // end of banner1()
    
    public function banner2()
    {
        return '
<div class="banner2">
<p class="banner2">ReadMe Markdown Gen </p><span class="banner2desc">Time Saving ReadMe Markdow File Generator</span>
</div>

---
        ';
    } // end of banner2()

    public function banner3()
    {
        return '
<div class="banner3">
  <p class="banner3">ReadMe Markdown Gen</p>
  <p class="banner3desc">Time Saving ReadMe Markdow File Generator
</div>
        ';
    } // end of banner3()

    public function mini_nav()
    {
        return '

<p align="center">⭐ Star us on GitHub — it motivates us a lot!</p>

<p class="key_feat"> 
    <a href="#key-features">&bull; Key Features</a>
    <a href="#how-to-use">How To Use</a>
    <a href="#download">Download</a>
    <a href="#credits">Credits</a>
    <a href="#related">Related</a>
    <a href="#license">License</a>
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
  <a href="https://nweathers.neocities.org"><img src="imgs/g.webp" alt="ReadMe" width="200"></a>
</p>';

$nav = $this->mini_nav();

$end_top = '
![screenshot](imgs/nicole_weathers_function.gif)

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

[( ↑ Back to top ↑ )](#readme-top)

---        
        ';
    } // end of toc()
     public function keyfeat()
    {
        return '
## &#9733; Key Features

* LivePreview - Make changes, See changes
  - Instantly see what your Markdown documents look like in HTML as you create them.
* Full screen mode
  - Write distraction free.
* Cross platform
  - Windows, macOS and Linux ready.


[( ↑ Back to top ↑ )](#readme-top)

---        
        ';
    } // end of keyfeatfunction ()
    
    public function imgs()
    {
        return '
## &#9733; Screenshots

<details open>
<summary> &nbsp; &#9756; </summary> <br />

<p align="center">
    <img width="49%" src="md-imgs/9908a54a-7d49-4dbb-8f5e-3e99b7cadf30.png" alt="apis"/>
&nbsp;
    <img width="49%" src="md-imgs/ff406403-27f7-42b5-9569-d011432f16e5.png" alt="data-models"/>
</p>

<p align="center">
    <img width="49%" src="md-imgs/62c8d533-8475-4290-abc8-c433c095e68a.png" alt="plugins"/>
&nbsp;
    <img width="49%" src="md-imgs/9c67a354-a06f-47d1-a118-ab89b775bf91.png" alt="microservices"/>
</p> 
    
<p align="center">
    <img width="49%" src="md-imgs/4daf03a4-0866-49c9-8dd6-a340f3465c73.png" alt="own-your-code"/>
&nbsp;
    <img width="49%" src="md-imgs/1cca9721-b8d6-425b-a1a9-d10d3cdcc9b8.png" alt="customize-code"/>
</p>

</details>

[( ↑ Back to top ↑ )](#readme-top)

---
        ';
    } // end of imgs()
    
    public function about()
    {
        return '
## &#9733; About

**Bold Text** is a .NET library designed to provide comprehensive support for OAuth2 and OpenID Connect on the server side. These patterns ensure the following benefits:

- **Bold bullet li**: Different parts of the library can function independently.
- **Bold bullet li**: Improved separation of concerns makes the code more testable.
- **Bold bullet li**: Clear structure and separation facilitate better management of the codebase.

The library also supports Dependency Injection through the standard .

[( ↑ Back to top ↑ )](#readme-top)

---        
        ';
    } // end of about()
  
    public function demo()
    {
        return '
## &#9733; Demo
[-> See a demo here <-](https://nweathers.neocities/readme-md-generator)

---        
        ';
    } // end of demo()

    public function dependencies()
    {
        return '
## &#9733; Dependencies

This project has no dependencies. It does however use Fontawesome and Google fonts (for the Ui) with links to both in the code, therefeor there is no need to download any additional files other than what is included in this repository.

---        
        ';
    } // end of dependencies()
    
    public function installation()
    {
        return '
## &#9733; Installation

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


[( ↑ Back to top ↑ )](#readme-top)

---        
        ';
    } // end of installation()
    
    public function download()
    {
        return '
## Download

You can [download](https://github.com/nicoleweathers/ReadMeMarkdownGen) the file instead of cloning.

[( ↑ Back to top ↑ )](#readme-top)        
        ';
    } // end of download()
    
    public function output_struct()
    {
        return '
### Output Structure
---
<br>

```shell
shallow_backup/
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
```

[( ↑ Back to top ↑ )](#readme-top)

---
        ';
    } // end of output_struct()
  
    public function how_it_works()
    {
        return '
## &#9733; How It Works

1. Install on local server.
2. Run App.
3. The `webpack` plugin creates an empty webpack project, adds your library
   and looks for the bundle size difference.
4. The `time` plugin compares the current machine performance with that of
   a low-priced Android devices to calculate the CPU throttling rate.
5. Then the `time` plugin runs headless Chrome (or desktop Chrome if it’s
   available) to track the time a browser takes to compile and execute your JS.
   Note that these measurements depend on available resources and might
   be unstable. [See here](https://github.com/mbalabash/estimo/issues/5)
   for more details.

[( ↑ Back to top ↑ )](#readme-top)


---        
        ';
    } // end of how_it_works()
    
    public function license()
    {
        return '
## &#9733; License

Distributed under the MIT License. See `LICENSE.txt` for more information.


[( ↑ Back to top ↑ )](#readme-top)

---        
        ';
    } // end of license()
    
    public function support()
    {
        return '
## &#9733; Support

<a href="https://www.buymeacoffee.com/5Zn8Xh3l9" target="_blank"><img src="md-imgs/purple_img.webp" alt="Buy Me A Coffee" style="height: 41px !important;width: 174px !important;box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;-webkit-box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;" ></a>

<p>Or</p> 

<a href="https://www.patreon.com/amitmerchant">
	<img src="md-imgs/become_a_patron_button@2x.png" width="160">
</a><br><br>


**Share the project link**  with your network on social media >>>

<a href="https://www.reddit.com/submit?url=https%3A%2F%2Fgithub.com%2Fnweathers%2FReadMeMarkdownGen&title=Awesome%20communcation%20engine!" target="_blank"><img src="https://img.shields.io/twitter/url?label=Reddit&logo=Reddit&style=social&url=https%3A%2F%2Fgithub.com%2Fnweathers%2FReadMeMarkdownGen" alt="Share on Reddit"/></a>&nbsp;
<a href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A//github.com/nicoleweathers/ReadMeMarkdownGen" target="_blank"><img src="https://img.shields.io/twitter/url?label=LinkedIn&logo=LinkedIn&style=social&url=https%3A%2F%2Fgithub.com%2Fnweathers%2FReadMeMarkdownGen" alt="Share on LinkedIn"/></a>&nbsp;
<a href="https://twitter.com/intent/tweet?text=%23AREG%20%23realtime%20communication%20engine%20for%20%23embedded%20and%20%23IoT%0A%0Ahttps%3A//github.com/nicoleweathers/ReadMeMarkdownGen" target="_blank"><img src="https://img.shields.io/twitter/url?label=Twitter&logo=Twitter&style=social&url=https%3A%2F%2Fgithub.com%2Fnweathers%2FReadMeMarkdownGen" alt="Shared on Twitter"/></a>&nbsp;
<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//github.com/nicoleweathers/ReadMeMarkdownGen" target="_blank"><img src="https://img.shields.io/twitter/url?label=Facebook&logo=Facebook&style=social&url=https%3A%2F%2Fgithub.com%2Fnweathers%2FReadMeMarkdownGen" alt="Share on Facebook"/></a>&nbsp;
<a href="https://t.me/share/url?text=Awesome%20communication%20engine!&url=https%3A%2F%2Fgithub.com%2Fnweathers%2FReadMeMarkdownGen" target="_blank"><img src="https://img.shields.io/twitter/url?label=Telegram&logo=Telegram&style=social&url=https%3A%2F%2Fgithub.com%2Fnweathers%2FReadMeMarkdownGen" alt="Share on Telegram"/></a>&nbsp;
<a href="https://wa.me/?text=Awesome%20communication%20engine!%5Cn%20https%3A%2F%2Fgithub.com%2Fnweathers%2FReadMeMarkdownGen" target="_blank"><img src="https://img.shields.io/twitter/url?label=Whatsapp&logo=Whatsapp&style=social&url=https%3A%2F%2Fgithub.com%2Fnweathers%2FReadMeMarkdownGen" alt="Share on Whatsapp"/></a>&nbsp;
<a href="mailto:?subject=Awesome%20communication%20engine&body=Checkout%20this%20awesome%20communication%20engine%3A%0Ahttps%3A//github.com/nicoleweathers/ReadMeMarkdownGen%0A" target="_blank"><img src="https://img.shields.io/twitter/url?label=GMail&logo=GMail&style=social&url=https%3A%2F%2Fgithub.com%2Fnweathers%2FReadMeMarkdownGen"/></a>


[( ↑ Back to top ↑ )](#readme-top)

---        
        ';
    } // end of support()
    
    public function contribute()
    {
        return '
## &#9733; Contribute

1. Fork the Project
2. Create your Feature Branch (`git checkout -b fork/YourContribution`)
3. Commit your Changes (`git commit -m \'Add some YourContribution\'`)
4. Push to the Branch (`git push origin fork/YourContribution`)
5. Open a Pull Request
   
You can also simply open an issue with the tag "suggestion".
Don\'t forget to give the project a star! Thanks again!


[( ↑ Back to top ↑ )](#readme-top)

---        
        ';
    } // end of contribute()

    public function credits()
    {
        return '
## &#9733; Credits and Acknowledgements

This project started in 2020 and an early and incomplete version of it was presented as my final work for the graduation at the [Cybersecurity HackAdemy](https://www.cyberhackademy.unina.it/en/home-page/) organized by the University of Naples Federico II. For that, I would like to thank Roberto Celletti for the initial idea and my team which was composed by [gianpor](https://github.com/gianpor), [MrFelpon](https://github.com/MrFelpon) and [xdinax](https://github.com/xdinax), who helped me in the early stages of the development of the application with the initial deployment and the first tests. 

+ [@shobrook](https://www.github.com/shobrook) for logo and UI design assistance.
+ Base logo vector made by [Freepik](https://www.freepik.com/) from [Flaticon](www.flaticon.com).
+ [drduh\'s macOS-Security-and-Privacy-Guide](https://github.com/drduh/macOS-Security-and-Privacy-Guide) and [Jonathan Levin\'s MacOS Security Guide](http://newosxbook.com/files/moxii3/AppendixA.pdf) were incredibly helpful while I was building `stronghold`.

This software uses the following open source packages:

- [Electron](http://electron.atom.io/)
- [Node.js](https://nodejs.org/)
- [Marked - a markdown parser](https://github.com/chjj/marked)
- [showdown](http://showdownjs.github.io/showdown/)
- [CodeMirror](http://codemirror.net/)
- Emojis are taken from [here](https://github.com/arvida/emoji-cheat-sheet.com)

[( ↑ Back to top ↑ )](#readme-top)

---        
        ';
    } // end of credits()
    
    public function links()
    {
        return '
## &#9733; You may also like...

- [Pomolectron](https://github.com/amitmerchant1990/pomolectron) - A pomodoro app
- [Correo](https://github.com/amitmerchant1990/correo) - A menubar/taskbar Gmail App for Windows and macOS
- [markdownify-web](https://github.com/amitmerchant1990/markdownify-web) - Web version of Markdownify

---        
        ';
    } // end of links();

    public function contacts()
    {
        return '
## &#9733; Contacts

- **Email**: Send us your inquiries or support requests at [support@abblix.com](mailto:support@abblix.com).
- **Website**: [Nicole Weathers](https://nweathers.neocities.com)

> GitHub [@nicoleweathers](https://github.com/nicoleweathers) &nbsp;&middot;&nbsp;
> YouTube [@webdgem](https://youtube.com/@webdgem) &nbsp;&middot;&nbsp;
> LinkedIn [@ms-nicole-weathers](https://linkedin.com/in/ms-nicole-weathers) &nbsp;&middot;&nbsp;

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

    $htm = '
<div class="end_cta">
<p>Liked the work?</p>

### ⭐ Star us on GitHub — it motivates us a lot!
</div> 
' . $ban . '
[( ↑ Back to top ↑ )](#readme-top)
';


        return $htm;
    } // end of bottom()
 
} // End of class ReadMe