<?php
require_once ('include.php');
    if(isset($_GET['action'])){
        $action = $_GET['action'];
        echo $action;
        switch ($action){
            case 'account':
                header('Location:signin.php');
            break;
            case 'facebook':
            break;
        }
    }

?>
<!DOCTYPE html>
<!-- saved from url=(0030)https://dash.generalassemb.ly/ -->
<html class="static-homepage" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <link rel="stylesheet" href="css/homepage.css">
</head>

<body>
    <nav role="navigation">
        <a class="brand" href="https://dash.generalassemb.ly/">Dash</a>
        <p class="login">
            Login with
            <a class="login-link login-email" data-analytics="home-login-email" href="index.php?action=account">Account</a> or
            <a class="login-link login-twitter" data-analytics="home-login-twitter" href="index.php?action=facebook">Facebook</a>
        </p>
    </nav>

    <main role="main" data-analytics="home">
        <div class="hero">
            <h1>Learn to code awesome websites in HTML, CSS, and JavaScript</h1>
            <h2> Dash is a fun and free online course that teaches you the basics of web development through projects you can do in your browser.</h2>
            <a data-analytics="home-signup" href="https://dash.generalassemb.ly/auth/generalassembly?state=signup">Start Learning</a>
        </div>

        <div class="props">
            <ul>
                <li>
                    <img alt="Learn the right way to code HTML" src="img/html-9997afadec0a5e7dee13682c16e65d13bdcc998a20209761c0cd6bc1dcd174f6.svg">
                    <h3>HTML5</h3>
                    <p>Learn the right way to code HTML, the building block of the web. Design beautifully modern sites and learn how to balance layout for content and navigation.</p>
                </li>
                <li>
                    <img alt="Create your first fully styled landing page with CSS" src="img/css-4342fb6b4ff585ae91e20330050a909311db3ed51d1777d7ce8b3d68a1581ca8.svg">
                    <h3>CSS3</h3>
                    <p>Create your first fully styled landing page, complete with multi-column layouts, modern navigation elements, and mobile responsive design.</p>
                </li>
                <li>
                    <img alt="Create dynamic interfaces with JavaScript" src="img/javascript-be3ad4f788a32db2650d4fd4d534bf457f98ed10eb82fa1bf7692745862c3dea.svg">
                    <h3>JavaScript</h3>
                    <p>Create dynamic interfaces that handle user events and add UI effects such as animations and drop-and-drop to surprise and delight your site’s visitors.</p>
                </li>
            </ul>
        </div>


        <div class="about">
            <h2>About General Assembly</h2>
            <p>
                <a href="https://generalassemb.ly/about">General Assembly</a> is a pioneer in education and career transformation, providing training in today's most in-demand skills.
            </p>
            <p>
            </p>
        </div>
    </main>





</body>

</html>
