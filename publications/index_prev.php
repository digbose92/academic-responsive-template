<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>[ Digbalay | All Publications ]</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!--<link href="css/bootstrap.min.css" rel="stylesheet">-->

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="js/jquery.tipsy.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<link rel="stylesheet" type="text/css" href="css/custom.css"/>
<link rel="stylesheet" type="text/css" href="css/tipsy.css"/>
<link rel="stylesheet" type="text/css" href="css/fancybox.css"/>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/menucollapse.js"></script>
<script type="text/javascript" src="js/arrow78.js"></script><html>


<!-- Google Site Search | Search box-->
<script>
<!--
  (function() {
    var cx = '012777421281883581498:r3xp4rmwevw';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
-->
</script>
<!-- Google Analytics -->
<script>
<!--
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-70658068-1', 'auto');
  ga('send', 'pageview');
-->
</script>
<script language="JavaScript">
<!--
    function spiderjam(mym, myd){
        document.write("<a href=mailto:"	+ mym + "&#64;" + myd + ">" + mym + "&#64;" + myd + "</a>");
    }
-->
</script>

<body id="page-top" class="index">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="glyphicon glyphicon-search"></span>
            </button>
            <button id="button2" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <span><a href="https://www.usc.edu/"><img border="0" width="170" src="../images/USC_logo-removebg-preview.png"/></a></span>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                Home<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="../index.html#intro">Introduction</a></li>
                        <li><a href="../bio.html">Biography</a></li>
                        <li><a target="_blank" href="../cv_Digbalay.pdf">CV (PDF)</a></li>
                    </ul>
                </li>
                <li class="page-scroll">
                <a href="../index.html#news">News</a>
                </li>
                <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                Publications<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="../index.html#publications">Selected</a></li>
                        <li><a href="index.php">All</a></li>
                    </ul>
                </li>
                <li class="page-scroll">
                    <a href="../index.html#awards">Awards</a>
                </li>
                <li class="page-scroll">
                    <a href="../talks/">Projects</a>
                </li>
                <li class="page-scroll">
                    <a href="../index.html#service">Service</a>
                </li>
                <li class="page-scroll">
                    <a href="../index.html#contact">Contact</a>
                </li>
                <li class="page-scroll">
                    <a onclick="$('#bs-example-navbar-collapse-2').toggle();">
                        <span class="glyphicon glyphicon-search"></span>
                    </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->

        <!-- search box submenu -->
        <div class="collapse" id="bs-example-navbar-collapse-2">
            <gcse:search></gcse:search>
        </div>

    </div><!-- /.container-fluid -->
</nav>

<section>
    <!-- Place this tag where you want the search results to render -->
    <gcse:searchresults-only></gcse:searchresults-only>
</section>

<section id="tree" style="margin-top:50px">
    <div class="container">
        <a href="../index.html">Digbalay</a> > All Publications
    </div>
</section>

<!-- Home Section -->
<section id="home">
    <div class="container" id="publications">
    <br>
    <h1 align="CENTER">All Publications of Digbalay Bose</h1>
    <br>
    <?php 
           include 'bibtexbrowser.php?bib=demo.bib&all';
    ?>
</section>
</body>
</html>
