<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "index.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.0.0.58833 -->
    <meta charset="utf-8">
    <title>Heart Disease Diagnosis</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>
<meta name="description" content="Description">
<meta name="keywords" content="Keywords">



<style>.art-content .art-postcontent-0 .layout-item-0 { border-top-width:2px;border-top-style:solid;border-top-color:#BDBDBD;margin-top: 5px;margin-bottom: 5px;  }
.art-content .art-postcontent-0 .layout-item-1 { padding-top: 0px;padding-right: 10px;padding-bottom: 0px;padding-left: 10px;  }
.art-content .art-postcontent-0 .layout-item-2 { background: ; padding-top: 0px;padding-right: 10px;padding-bottom: 0px;padding-left: 10px;  }
.art-content .art-postcontent-0 .layout-item-3 { padding-right: 10px;padding-left: 10px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

.style1 {font-family: "Times New Roman", Times, serif}
#apDiv1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 91px;
	top: 45px;
}
.style2 {color: #FFFFFF}
#apDiv2 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 48px;
	top: 351px;
}
</style></head>
<body>
<div id="art-main">
<header class="art-header clearfix">


    <div class="art-shapes">
<h1 class="art-headline" data-left="2.51%">
    <a href="#">HEART DIS</a>EASE
</h1>
<h2 class="art-slogan" data-left="2.51%">Expert System</h2>

<div class="art-object0" data-left="100%">
  <div class="style2" id="apDiv1">www.netanimations.net/animated_<br>
moving_hearts_love_valentines<br>
_animations.htm</div>
</div>
<div class="art-object369268148" data-left="0%"></div>

            </div>

<nav class="art-nav clearfix">
    <div class="art-nav-inner">
    <ul class="art-hmenu">
    <li><a href="admin.php" class="active">Home</a></li>
    <li><a href="Symptoms.php">Modify Symptoms</a></li>
     <li><a href="Treatment.php">Modify Treatment and Medication</a></li>
     <li><a href="<?php echo $logoutAction ?>">Log Out</a></li>
       </ul> 
        </div>
    </nav>

                    
</header>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-1" style="width: 40%" >
         <p><img width="300" height="543" alt="" src="images/beatm.gif" class=""></p>

        <div id="apDiv2"><span class="style2">www.netanimations.net/animated_<br>
moving_hearts_love_valentines<br>
_animations.htm</span></div>
    </div><div class="art-layout-cell layout-item-2" style="width: 60%" ><p  class="a">




Successfully Updated


  

  </p>  </div>
    </div>
</div>
<div class="art-content-layout-br layout-item-0">
</div><div class="art-content-layout">
    <div class="art-content-layout-row">

    </div>
</div>
</div>
                                
                </article></div>
                    </div>
                </div>
            </div>
    </div>
<footer class="art-footer clearfix">
  <div class="art-footer-inner">
<div class="art-content-layout">

</div>


  </div>
</footer>

</div>


</body></html>