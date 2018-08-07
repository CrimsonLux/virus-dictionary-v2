<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>

<?php
session_start();
?>

<html lang="en">
    <head>
        <title>Virus Dictionary</title>
        <link rel="shortcut icon" type="image/x-icon" href="img/icon.png" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- <script>
            function loadThatPage(pageToLoad) {
                $('#pageFrame').load(pageToLoad);
            }
        </script> -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <!-- CSS -->
        <link href="css/virus-dictionary.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <!--Navigation Bar-->
        <nav class="navbar navbar-default navbar-fixed-top" id="mainNav" >
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <img src="img/icon.png" width="25" height="25" alt="">
                    </a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a class="nav-link" href="about.php">About</a></li>
                    <li><a class="nav-link" href="upload.php">Images</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Viruses <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="Malware.php">Malware</a></li>
                            <li><a href="Trojan.php">Trojan</a></li>
                            <li><a href="BootSector.php"> Boot Sector</a></li>
                            <li><a href="Scareware.php">Scareware</a></li>
                            <li><a href="Botnet.php">Botnet</a></li>

                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="contact.php"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
                    <?php if (isset($_SESSION['username'])) { ?>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    <?php } else { ?>
                        <li><a href="register.php"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
                        <?php } ?>
                </ul>
            </div>
        </nav>

