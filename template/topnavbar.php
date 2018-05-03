<!--
File Name: topnavbar.php
Date: 04/27/18
Programmers: Janice Bradford, Chris Phillips
Project: History 251: Albina Street Walking Tour
-->

<?php

	echo '        <div class="topnav">' . "\r\n";
	echo '            <a target="_self" href="#home" class="active">Home</a>' . "\r\n";
	echo '            <a target="_self" href="#information">Information</a>' . "\r\n";
	echo '            <div class="dropdown">' . "\r\n";
	echo '                <button class="dropbtn">Locations  <i class="fa fa-caret-down"></i></button>' . "\r\n";
	echo '                <div class="dropdown-content">' . "\r\n";
	echo '                    <a target="_self" href="#">Location 1</a>' . "\r\n";
	echo '                    <a target="_self" href="#">Location 2</a>' . "\r\n";
	echo '                    <a target="_self" href="#">Location 3</a>' . "\r\n";
	echo '                    <a target="_self" href="#">Location 4</a>' . "\r\n";
	echo '                    <a target="_self" href="#">Location 5</a>' . "\r\n";
	echo '                    <a target="_self" href="#">Location 6</a>' . "\r\n";
	echo '                </div>' . "\r\n";
	echo '            </div>' . "\r\n";
	echo '            <a target="_self" href="#faq">FAQ</a>' . "\r\n";
	echo '            <a target="_self" href="#contact">Contact</a>' . "\r\n";
	echo '        </div>' . "\r\n";

?>