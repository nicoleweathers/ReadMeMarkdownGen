<?php
session_start();
if(isset($_SESSION))
{  
    session_unset(); 
    session_destroy(); 
}

if(isset($_POST)) unset($_POST);

session_start();
$_SESSION['stat'] = 1;
require_once 'inc/init.php';

echo htmlheader();
?>

<!-- #main -->
<div id="main">
  <div class="content">
    <h1>Overview</h1>
    The way this web app works is very simple. All you have to do is select the options that you want (or select all is
    recommended). Then you will be taken to the page that will contain form
    fields to collect data about your project. After you complete the form fields, a new markdown file will be
    generated and you can edit the file in any text editor if you want to make adjustments to the output. And that's
    it!<br><br>

    <p align="center"><img src="./md-files/imgs/index-image.png" width="85%"></p>
  </div>
  <aside>
    <hr>
    <h3><span style="color:var(--blue)">ReadMe Markdown Gen</span> is <strong>free</strong>!</h3>
    <img src="./md-files/imgs/d.png" width="150px">
    <p>If you would like to show your appreciation, consider a donation to fund future development.</p>
    <hr><br>
    <a href=""><img src="./md-files/imgs/become_a_patron.png" alt="Become a Patron" width="180px"
        style="border-radius:7px"></a><br><br>

    <a href=""><img src="./md-files/imgs/purple_img.webp" alt="Buy Me a Cup of Coffee" width="180px"></a><br><br>
    <hr>
  </aside>
</div>
<!-- end of main -->

<form action="./form" method="POST">

  <!-- #customoptions -->
  <div id="customoptions">
    <section>
      <h1>Choose The Sections You Want To Include</h1>
      We recommend choosing all sections because they were carefully selected after comparing dozens of good readme
      files.
      You can always edit the output once it is generated. For example, you might want to remove a section or change the
      heading/title of a section. Even if you select all sections, you still need to replace the data with your own
      content if the default (demo) data does not match your project specifications.<br><br>
    </section>

    <!-- child 1 -->
    <div class="child">

      <div class="gchild keyfeatures_sel">
        <input type="checkbox" name="addkeyfeatures" id="keyfeatures" checked>
        <label for="keyfeatures">
          <img src="./md-files/imgs/px.png">
        </label>
        <p>key features</p>
      </div>

      <div class="gchild installation_sel">
        <input type="checkbox" name="addinstallation" id="installation">
        <label for="installation">
          <img src="./md-files/imgs/px.png">
        </label>
        <p>installation</p>
      </div>

      <div class="gchild dependencies_sel">
        <input type="checkbox" name="adddependencies" id="dependencies">
        <label for="dependencies">
          <img src="./md-files/imgs/px.png">
        </label>
        <p>dependencies</p>
      </div>

    </div>
    <!-- end of child 1 -->

    <!-- child 2 -->
    <div class="child">

      <div class="gchild demo_sel">
        <input type="checkbox" name="adddemo" id="demo">
        <label for="demo">
          <img src="./md-files/imgs/px.png">
        </label>
        <p>link to demo</p>
      </div>

      <div class="gchild output-structure_sel">
        <input type="checkbox" name="addoutput-structure" id="output-structure">
        <label for="output-structure">
          <img src="./md-files/imgs/px.png">
        </label>
        <p>file tree</p>
      </div>

      <div class="gchild how-it-works_sel">
        <input type="checkbox" name="addhow-it-works" id="how-it-works" checked>
        <label for="how-it-works">
          <img src="./md-files/imgs/px.png">
        </label>
        <p>Instructions</p>
      </div>

    </div>
    <!-- end of child 2 -->

    <!-- child 3 -->
    <div class="child">

      <div class="gchild support_sel">
        <input type="checkbox" name="addsupport" id="support">
        <label for="support">
          <img src="./md-files/imgs/px.png">
        </label>
        <p>support or donate</p>
      </div>

      <div class="gchild contributions_sel">
        <input type="checkbox" name="addcontributions" id="contributions">
        <label for="contributions">
          <img src="./md-files/imgs/px.png">
        </label>
        <p>contributions</p>
      </div>

      <div class="gchild credits_sel">
        <input type="checkbox" name="addcredits" id="credits">
        <label for="credits">
          <img src="./md-files/imgs/px.png">
        </label>
        <p>credits & acknowledgements</p>
      </div>

    </div>
    <!-- end of child 3 -->

    <!-- child 4 -->
    <div class="child">

      <div class="gchild links_sel">
        <input type="checkbox" name="addlinks" id="links">
        <label for="links">
          <img src="./md-files/imgs/px.png">
        </label>
        <p>links</p>
      </div>

      <div class="gchild contacts_sel">
        <input type="checkbox" name="addcontacts" id="contacts">
        <label for="contacts">
          <img src="./md-files/imgs/px.png">
        </label>
        <p>contacts</p>
      </div>

      <div class="gchild license_sel">
        <input type="checkbox" name="addlicense" id="license">
        <label for="license">
          <img src="./md-files/imgs/px.png">
        </label>
        <p>license</p>
      </div>

    </div>
    <!-- end of child 4 -->

    <!-- child 5 -->
    <div class="child">

      <div class="gchild download_sel">
        <input type="checkbox" name="adddownload" id="download">
        <label for="download">
          <img src="./md-files/imgs/px.png">
        </label>
        <p>download</p>
      </div>

      <div></div>
      <div></div>
    </div>
    <!-- end of child 5 -->

  </div>
  <!-- end of customoptions -->

  <!-- #bannerstyle -->
  <div id="bannerstyle">

    <h1>Pick A Banner Style</h1>
    <hr>

    <!-- child 6 -->
    <div class="child">

      <div class="gchild banner1_sel">
        <input type="checkbox" name="addbanner1" id="banner1" checked>
        <label for="banner1">
          <img src="./md-files/imgs/px.png">
        </label>
        <p></p>
      </div>

      <div class="gchild banner2_sel">
        <input type="checkbox" name="addbanner2" id="banner2">
        <label for="banner2">
          <img src="./md-files/imgs/px.png">
        </label>
        <p></p>
      </div>

      <div class="gchild banner2_sel">
        <input type="checkbox" name="addbanner3" id="banner3">
        <label for="banner3">
          <img src="./md-files/imgs/px.png">
        </label>
        <p></p>
      </div>

    </div>
    <!-- end of child 6 -->

  </div>
  <!-- end of #bannerstyle -->

  <div style="width:75%;text-align:center">
    <button class="submit" type="submit" name="submit">Click to Continue...</button>
  </div>

</form>

<?php echo wsfooter(); ?>