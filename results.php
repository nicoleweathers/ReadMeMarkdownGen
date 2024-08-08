<?php
session_start();
require_once 'inc/init.php';

echo htmlheader();
?>

<div id="resultsmain">
    <h1 class="redheading">Great News... Your File Is Ready!</h1>
<h1>Important things to know:</h1>


<section>
    <ol>
<li>Your file is located in the directory named 'md-files'. You should MOVE this file to your project and rename it from README_file.md to the conventional name, which is <em>README.md</em>. Every time you use ReadMe Markdown Gen it will overwrite the existing file in the <em>/md-files</em> directory named <em>'README_file'</em>. Alternatively, you can just choose to dowload the file that you created and save it with a different name.
<p align="center">
<br><img src="./md-files/imgs/readme-save.png" width="450"><br><br>
    <a href="download?file=README_file.md"><button>Click to Download <u>Your Markdown File</u></button></a>
</p><br>&nbsp;<br>
</li>

<li>
    Open your file in a markdown viewer because it will not display accurately in a browser. If you try to use the popular browser extension named '<em>Markdown Viewer</em>', it will not display correctly using '<em>http://localhost/</em>' path. I found that if you want a good view of your markdown file using <em>Markdown Viewer</em> extension, you have to open your .md file in the browser using the computer path to the file and not the local server path. Also, while creating this project, I discovered (unintentionally) a GitHub repository that you can use for viewing and editing markdown files. Here is the link: <a href="https://github.com/amitmerchant1990/electron-markdownify" target="_blank">Electron Markdownify</a>.
</li>

<li>
    This application comes with demo content which includes predefined data and images. You need to replace all of the images with your own images. If you use the same names for the images, you do not have to edit the links to these images. If you use images with different names, then you need to edit your markdown file with the correct image path. When creating a markdown file for GitHub, your images can be relative or they can be a full path to a non local server. All the images here are local so that you can preview what your file looks like before you push to a live repository.
</li>
<li>
    Make sure all the urls in your file are correct before publishing.
</li>
<li>
    Edit the license section. If you are using the same license type, then you can leave as-is because the path to the license is relative. 
</li>
</ol>

    <p align="center"><a href="download?file=README_file.md"><button>Click to Download <u>Your Markdown File</u></button></a></p>
</section>
</div>

    <footer>
    <a href="." class="home">&#8962;</a>
<?php echo footercopy() ?>
    </footer>
</body</html>