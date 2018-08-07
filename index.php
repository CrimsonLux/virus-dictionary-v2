<?php
include_once 'header.php'
?>
<!-- Header-->
<header class="masthead" style="background-image: url('img/header.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Virus Dictionary</h1>
                    <span class="subheading">The way to eradicate your viruses for free! We have the solutions to the most common viruses in our simple site!</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!--Search Bar -->
<div class="container">
<div class="row">
                <div class="col-md-10">
                    <form class="form-horizontal" action="http://www.youtube.com/results" method="get" target="_blank">
                        <div class="form-group">
                            <input class="form-control pull-left" name="search_query" type="text" maxlength="128" placeholder="Search Youtube..." autocomplete="off"/>
                        </div>
                            <input class="btn pull-left" type="submit" value="Search" />
                    </form> 
                </div>
            </div>
</div>


<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
                <a href="Malware.php">
                    <h2 class="post-title">
                        Malware Virus
                    </h2>
                    <h3 class="post-subtitle">
                        Did you know that Malware actually means "Malicious Software"?
                    </h3>
                </a>
                <p class="post-meta">Posted by
                    <a href="index.php">Virus Dictionary</a>
                </p>
            </div>
            <hr>
            <div class="post-preview">
                <a href="Trojan.php">
                    <h2 class="post-title">
                        Trojan Horse
                    </h2>
                    <h3 class="post-subtitle">
                        A malware disguised as a legitimate software.
                    </h3>
                </a>
                <p class="post-meta">Posted by
                    <a href="index.php">Virus Dictionary</a>
                </p>
            </div>
            <hr>
            <div class="post-preview">
                <a href="BootSector.php">
                    <h2 class="post-title">
                        Boot Sector Virus
                    </h2>
                    <h3 class="post-subtitle">
                        What is a boot sector virus?
                    </h3>
                </a>
                <p class="post-meta">Posted by
                    <a href="index.php">Virus Dictionary</a>
                </p>
            </div>
            <hr>
            <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-primary float-right" href="index_2.php">Older Posts &rarr;</a>
            </div>
        </div>
    </div>
</div>



<?php
include_once 'footer.php'
?>