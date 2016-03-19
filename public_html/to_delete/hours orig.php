<!DOCTYPE HTML>
<html>
<?php include 'header.html'?>
<body id="pageBody">

<div id="divBoxed" class="container">

    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

    <div class="divPanel notop nobottom">
            <div class="row-fluid">
                <div class="span12">

                    <div id="divLogo" class="pull-left">
                        <a href="index.html" id="divSiteTitle">Your Name</a><br />
                        <a href="index.html" id="divTagLine">Your Tag Line Here</a>
                    </div>

                    <div id="divMenuRight" class="pull-right">
                    <div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                        NAVIGATION <span class="icon-chevron-down icon-white"></span>
                        </button>
                            <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
							<li class="active dropdown">
                            <a href="page.html" class="dropdown-toggle">Page <b class="caret"></b></a>
                            <ul class="dropdown-menu">                            
                            <li><a href="full.html">Full Page</a></li>
                            <li><a href="2-column.html">Two Column</a></li>
                            <li><a href="3-column.html">Three Column</a></li>
							<li><a href="../documentation/index.html">Documentation</a></li>
							<li class="dropdown">
                            <a href="#" class="dropdown-toggle">Dropdown Item &nbsp;&raquo;</a>
                            <ul class="dropdown-menu sub-menu">
                            <li><a href="#">Dropdown Item</a></li>
                            <li><a href="#">Dropdown Item</a></li>
                            <li><a href="#">Dropdown Item</a></li>
                            </ul>
                            </li>
                            </ul>
                            </li>
						    <li><a href="services.html">Services</a></li>
						    <li><a href="portfolio.html">Portfolio</a></li>						    
                            <li><a href="contact.php">Contact</a></li>
                            </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row-fluid">
                <div class="span12">
                    <div id="contentInnerSeparator"></div>
                </div>
            </div>
    </div>

    <div class="contentArea">

        <div class="divPanel notop page-content">

            <div class="breadcrumbs">
                <a href="index.html">Home</a> &nbsp;/&nbsp; <span>Full Page</span>
            </div>

            <div class="row-fluid">
            <!--Edit Main Content Area here-->
                <div class="span12" id="divMain">

                    <h1>Kent Food Bank Calendar </h1>
                     <iframe src="https://calendar.google.com/calendar/embed?title=Food%20Bank%20Hours%20%26%20Events%20&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffcc66&amp;ctz=America%2FLos_Angeles"
							 style="border-width:0" width=100% height="600" frameborder="0" scrolling="no"></iframe>
                </div>
            <!--End Main Content Area-->
            </div>

              
  <?php include 'footer.html' ?>



</body>
</html>