<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>README.md Generator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php
session_start();
$_SESSION['stat'] = 1;
?>

  <div class="index_wrapper">

    <form action="./form" method="POST">

      <div class="input-radio-wrapper">
        <label class="form-label">
          Which languages & freameworks you know?
        </label>

        <div class="radio-flex">
          <div class="radio-group">
            <label class="radio-label" for="c">
              <input
                class="input-radio"
                type="radio"
                name="c"
                id="c"
              />
              C
              <span class="radio-checkmark"></span>
            </label>
          </div>

          <div class="radio-group">
            <label class="radio-label" for="c++">
              <input
                class="input-radio"
                type="radio"
                name="c++"
                id="c++"
              />
              c++
              <span class="radio-checkmark"></span>
            </label>
          </div>

          <div class="radio-group">
            <label class="radio-label" for="java">
              <input
                class="input-radio"
                type="radio"
                name="java"
                id="java"
              />
              Java
              <span class="radio-checkmark"></span>
            </label>
          </div>

          <div class="radio-group">
            <label class="radio-label" for="python">
              <input
                class="input-radio"
                type="radio"
                name="python"
                id="python"
              />
              Python
              <span class="radio-checkmark"></span>
            </label>
          </div>

          <div class="radio-group">
            <label class="radio-label" for="javaScript">
              <input
                class="input-radio"
                type="radio"
                name="javaScript"
                id="javaScript"
              />
              JavaScript
              <span class="radio-checkmark"></span>
            </label>
          </div>

          <div class="radio-group">
            <label class="radio-label" for="react">
              <input
                class="input-radio"
                type="radio"
                name="react"
                id="react"
              />
              React
              <span class="radio-checkmark"></span>
            </label>
          </div>

          <div class="radio-group">
            <label class="radio-label" for="angular">
              <input
                class="input-radio"
                type="radio"
                name="angular"
                id="angular"
              />
              Angular
              <span class="radio-checkmark"></span>
            </label>
          </div>

          <div class="radio-group">
            <label class="radio-label" for="django">
              <input
                class="input-radio"
                type="radio"
                name="django"
                id="django"
              />
              Django
              <span class="radio-checkmark"></span>
            </label>
          </div>

          <div class="radio-group">
            <label class="radio-label" for="tailwind">
              <input
                class="input-radio"
                type="radio"
                name="tailwind"
                id="tailwind"
              />
              Tailwind CSS
              <span class="radio-checkmark"></span>
            </label>
          </div>

          <div class="radio-group">
            <label class="radio-label" for="bootstrap">
              <input
                class="input-radio"
                type="radio"
                name="bootstrap"
                id="bootstrap"
              />
              Bootstrap
              <span class="radio-checkmark"></span>
            </label>
          </div>
        </div>
      </div>


      <button class="btn" type="submit">Submit</button>
    </form>
  </div>

</body>

</html>