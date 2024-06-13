<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AboutMe</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/about.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/footer.css">
    <script src="https://kit.fontawesome.com/0704d54d24.js" crossorigin="anonymous"></script>
    <script src="assets/js/about.js" defer></script>
    <script src="assets/js/script.js" defer></script>
</head>
<body>
<?php include_once 'header.php';?>
    <div class="container">
        <div class="row">
                <div class="about-col-1">
                    <img src="assets/imgs/bunny.jpg" alt="a little cute bunny">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title"></h1>
                    <p data-lang="aboutme">I'm Ömer, originally from Turkey,learning and stuyding french,I still got a lot to learn <br><br> 
                        I am stuyding Comp.Sci & Maths<br><br>
                        My favorite french meal is RACLETTE so far,especially in winter it goes perfectly gooood...<br><br>
                        I kind of enjoy making new friends and doing sports such as; Swimming,Voleyball <br><br>
                        I like go on sites where I can enjoy coding in my spare time <br><br>
                        That's it! Enjoy my website!</p>
                    <div class="tab-title">
                        <p class="tab-links active-link" data-lang="skills" onclick="opentab('skills')">SKILLS</p>
                        <p class="tab-links" onclick="opentab('education')">EXPERIENCES</p>
                    </div>
                    <div id="skills" class="tab-contents active-tab">
                        <ul>
                            <li><span>Py</span>thon</li>
                            <li><span>C</span>&nbsp;Language</li>
                            <li><span>J</span>ava</li>
                            <li><span>C</span>SS</li>
                            <li><span>H</span>TML</li>
                            <li><span>J</span>ava<span>S</span>cript</li>
                            <li><span>G</span>it</li>
                        </ul>
                    </div>
                    <div id="education" class="tab-contents">
                        <ul>
                            <li><span>2020 - 2023</span> <br/> UFR Math-Info</li>
                            <li><span>2018 - 2019</span> <br/> Univ-Lyon2</li>
                        </ul>
                    </div>
                </div>
        </div>
    </div>
    <?php include_once 'footer.php';?>
</body>