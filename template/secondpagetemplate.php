<!DOCTYPE html>
<!--
File Name: index.php
Date: 04/18/18
Programmers: Janice Bradford, Chris Phillips, Patrick Ting
Project: History 251: Albina Street Walking Tour
-->



<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <meta name="author" content="Janice Bradford, Chris Phillips, Patrick Ting">
        <base target="_blank"> <!-- open all links not marked "_self" in a new tab -->

        <title>African American History Walking Tour</title>

        <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Libre+Baskerville" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
        <link rel="stylesheet" src="//normalize-css.googlecode.com/svn/trunk/normalize.css">
        
        <link href="assets/bootstrap.min.css" rel="stylesheet">
        <link href="assets/styles.css" rel="stylesheet" type="text/css">
<!--        <link href="assets/navbar.css" rel="stylesheet" type="text/css">-->

        <!-- <script src="js/menu.js"></script> -->

        <style>
            /* use to outline blocks while styling and debugging
            { outline: 1px solid red !important } */
        </style>
    </head>

    <body>

        <header>
            		<?php include 'header.php'; ?>
            <nav class="navbar navbar-fixed-top">

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        Menu
                    </button>

                    <div id="navbar">

                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#" target="_self">Home</a></li>
                            <li class="active"><a href="#" target="_self">Information</a></li>
                            <li> <a href="#" class="dropdown-toggle" target="_self">Locations &#9660;</a>
                                <ul class="nested-menu">
                                    <li><a href="#" target="_self">Location 1</a></li>
                                    <li><a href="#" target="_self">Location 2</a></li>
                                    <li><a href="#" target="_self">Location 3</a></li>
                                    <li><a href="#" target="_self">Location 4</a></li>
                                    <li><a href="#" target="_self">Location 5</a></li>
                                    <li><a href="#" target="_self">Location 6</a></li>
                                    
                                </ul>
                            </li>
                            <li><a href="#" target="_self">FAQ</a></li>
                            <li><a href="#" target="_self">Contact</a></li>
                        </ul>

                    </div>
                    <!--/.nav-collapse -->
                </div>

            </nav>

        </header>


        <main>
            <div class="content">
                <article class="content-block">
                    <h2>Heading 2</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                </article>

                			<?php include 'divider.php'; ?>

            </div>
        </main>


        <footer>
            		<?php include 'footer.php'; ?>
        </footer>
        
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>

    </body>

</html>